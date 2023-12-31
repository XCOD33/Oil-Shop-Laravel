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
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <h6>LOGIN YOUR ACCOUNT</h6>
                                <form method="POST" action="{{ route('frontend.login_post') }}">
                                    @csrf
                                    <ul class="row">

                                        <!-- Name -->
                                        <li class="col-md-12">
                                            <label> Email
                                                <input type="email" name="email" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- LAST NAME -->
                                        <li class="col-md-12">
                                            <label> PASSWORD
                                                <input type="password" name="password" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- LOGIN -->
                                        <li class="col-md-4">
                                            <button type="submit" class="btn">LOGIN</button>
                                        </li>

                                        <!-- CREATE AN ACCOUNT -->
                                        <li class="col-md-4">
                                            <div class="checkbox margin-0 margin-top-20">
                                                <input id="checkbox1" class="styled" type="checkbox">
                                                <label for="checkbox1"> Stay me Login</label>
                                            </div>
                                        </li>


                                    </ul>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
