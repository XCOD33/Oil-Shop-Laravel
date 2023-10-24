@extends('master.front_end.app')

@section('content')
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="chart-page padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info register">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-12">
                                <h6>REGISTER</h6>
                                <form method="POST" action="{{ route('frontend.register_post') }}">
                                    @csrf
                                    <ul class="row">

                                        <!-- Name -->
                                        <li class="col-md-6">
                                            <label> *FIRST NAME
                                                <input type="text" name="first_name" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *LAST NAME
                                                <input type="text" name="last_name" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- EMAIL ADDRESS -->
                                        <li class="col-md-6">
                                            <label> *EMAIL ADDRESS
                                                <input type="email" name="email" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- PHONE -->
                                        <li class="col-md-6">
                                            <label> *PHONE
                                                <input type="text" name="phone" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *PASSWORD
                                                <input type="password" name="password" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *PASSWORD
                                                <input type="password" name="password_confirmation" value=""
                                                    placeholder="">
                                            </label>
                                        </li>

                                        <!-- PHONE -->
                                        <li class="col-md-6">
                                            <button type="submit" class="btn">REGISTER NOW</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        @include('master.front_end.components.about')

        <!-- News Letter -->
        @include('master.front_end.components.news_letter')
    </div>
@endsection
