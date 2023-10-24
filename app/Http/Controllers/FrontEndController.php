<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function login_post(Request $request)
    {
        $request->only('email', 'password');

        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('frontend.index')->with('success', 'You have logged in successfully!');
        } else {
            return redirect()->route('frontend.login')->with('error', 'Invalid credentials!');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function register_post(Request $request)
    {
        // \dd($request->all());
        $request->only('first_name', 'last_name', 'email', 'phone', 'password', 'password_confirmation');

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|unique:users|string|max:255',
            'phone' => 'required|unique:users|string|max:255',
            'password' => 'required|string|max:255|confirmed',
        ]);

        $request->merge([
            'name' => $request->first_name . ' ' . $request->last_name,
        ]);

        $request->merge([
            'password' => bcrypt($request->password),
        ]);

        User::create($request->all());

        return redirect()->route('frontend.login')->with('success', 'You have registered successfully!');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('frontend.index')->with('success', 'You have logged out successfully!');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function place_order(Request $request)
    {
        $userId = auth()->user()->id;
        $cacheKey = $userId . ' cart';

        $cache = Cache::get($cacheKey, []);

        if (count($cache) == 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tidak ada produk yang dibeli.',
            ]);
        }

        $msg = 'Pembelian\nproduk berhasil dilakukan. Total: ' . $request->total_price . '';
        $http = Http::withHeader('Authorization', 'vUNKUxRjC_+gP7szRTZm')->post('https://api.fonnte.com/send', [
            'target' => auth()->user()->phone,
            'message' => $msg,
        ])->successful();

        if (!$http) {
            return response()->json([
                'status' => 'error',
                'message' => 'Pembelian\nproduk berhasil dilakukan. Terjadi kesalahan saat mengirimkan pesan WhatsApp. Silahkan cek WhatsApp untuk melihat total pembayaran.',
            ]);
        }

        // Hapus cache
        Cache::forget($cacheKey);

        return response()->json([
            'status' => 'success',
            'message' => 'Pembelian produk berhasil dilakukan. Silahkan cek WhatsApp untuk melihat total pembayaran.',
        ]);
    }

    public function cart_add(Request $request)
    {
        $req = [
            'name_product' => $request->name_product,
            'price_product' => $request->price_product,
            'image_product' => $request->image_product,
        ];

        $userId = auth()->user()->id;
        $cacheKey = $userId . ' cart';

        $cache = Cache::get($cacheKey, []);

        // Periksa apakah produk dengan nama yang sama sudah ada dalam cache
        if (!in_array($req['name_product'], array_column($cache, 'name_product'))) {
            // Produk belum ada dalam cache, tambahkan produk
            $cache[] = $req;

            // Simpan kembali ke cache
            Cache::put($cacheKey, $cache, 60);
        }
    }

    public function cart_get()
    {
        $userId = auth()->user()->id;
        $cacheKey = $userId . ' cart';

        $cache = Cache::get($cacheKey, []);

        return response()->json($cache);
    }
}
