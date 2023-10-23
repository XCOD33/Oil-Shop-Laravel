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
                                <form>
                                    <ul class="row">

                                        <!-- Name -->
                                        <li class="col-md-6">
                                            <label> *FIRST NAME
                                                <input type="text" name="first-name" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *LAST NAME
                                                <input type="text" name="last-name" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- EMAIL ADDRESS -->
                                        <li class="col-md-6">
                                            <label> *EMAIL ADDRESS
                                                <input type="text" name="contry-state" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- PHONE -->
                                        <li class="col-md-6">
                                            <label> *PHONE
                                                <input type="text" name="postal-code" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *PASSWORD
                                                <input type="password" name="last-name" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *PASSWORD
                                                <input type="password" name="last-name" value="" placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <!-- ADDRESS -->
                                            <label>*ADDRESS
                                                <input type="text" name="address" value="" placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <!-- ADDRESS -->
                                            <label>*ADDRESS
                                                <input type="text" name="address" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- COUNTRY -->
                                        <li class="col-md-6">
                                            <label> COUNTRY
                                                <select class="selectpicker" name="contry-state">
                                                    <option>COUNTRY</option>
                                                    <option>Country 2</option>
                                                    <option>Country 3</option>
                                                </select>
                                            </label>
                                        </li>

                                        <!-- TOWN/CITY -->
                                        <li class="col-md-6">
                                            <label>*TOWN/CITY
                                                <input type="text" name="town" value="" placeholder="">
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