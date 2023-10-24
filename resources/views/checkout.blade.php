@extends('master.front_end.app')

@section('content')
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="chart-page padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row justify-content-center">

                            <!-- SUB TOTAL -->
                            <div class="col-sm-8">
                                <h6>YOUR ORDER</h6>
                                <div class="order-place">
                                    <div class="order-detail">
                                        {{-- <p>WOOD CHAIR <span>$598 </span></p>
                                        <p>STOOL <span>$199 </span></p>
                                        <p>WOOD SPOON <span> $139</span></p> --}}
                                        <div class="checkouts">

                                        </div>

                                        <!-- SUB TOTAL -->
                                        <p class="all-total">TOTAL COST <span class="checkout-all-price"></span></p>
                                    </div>
                                    <div class="pay-meth">
                                        <button class="btn btn-dark pull-right margin-top-30" id="btnPlaceOrder"
                                            disabled>PLACE
                                            ORDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            getCart();

            $('#btnPlaceOrder').on('click', function() {
                placeOrder();
            })
        });

        function getCart() {
            $.ajax({
                url: "{{ route('frontend.cart.get') }}",
                method: "GET",
                success: function(data) {
                    $('.checkouts').empty();

                    var totalCart = 0;
                    // Iterasi melalui data dan buat elemen <li> untuk setiap produk
                    for (var i = 0; i < data.length; i++) {
                        var product = data[i];

                        html =
                            `<p class="checkout-name text-uppercase">${product.name_product}<span class="checkout-price">${product.price_product}</span></p>`

                        var priceText = product.price_product;
                        var price = parseFloat(priceText.replace('Rp', '').replace('.', '').replace(',',
                            '.'));

                        $('.checkouts').append(html);

                        totalCart += price;
                    }
                    $('.checkout-all-price').text(`Rp ` + totalCart.toLocaleString('id-ID', {
                        minimumFractionDigits: 0
                    }));
                    if (totalCart > 0) {
                        $('#btnPlaceOrder').removeAttr('disabled');
                    }
                }
            })
        }

        function placeOrder() {
            $.ajax({
                url: "{{ route('frontend.place_order') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    'total_price': $('.checkout-all-price').text(),
                },
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('frontend.checkout') }}";
                            }
                        })
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: response.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })
                    }
                },
                error: function(xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    var err_msg = '';
                    $.each(err.errors, function(key, val) {
                        err_msg += val + '<br>';
                    });
                    Swal.fire({
                        title: 'Error!',
                        html: err_msg,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                }
            })
        }
    </script>
@endsection
