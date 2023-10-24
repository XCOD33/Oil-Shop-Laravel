<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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

    public function about()
    {
        return view('about-us');
    }

    public function contact()
    {
        return view('contact');
    }
}
