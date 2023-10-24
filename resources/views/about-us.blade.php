@extends('master.front_end.app')

@section('content')
    <div id="content"> 
        
        <!-- History -->
        <section class="history-block padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
            <div class="col-xs-10 center-block">
                <div class="col-sm-9 center-block">
                <h4>A Brief History</h4>
                <p> Established in 2005, our company embarked on a culinary journey rooted in a passion for exceptional cooking oils and culinary essentials. Over the years, we've evolved from a small team to a trusted provider of top-quality products, earning the loyalty of customers through our unwavering dedication to excellence. With significant milestones, such as introducing our signature 'Gourmet Blend' in 2010 and expanding our market reach to Europe in 2015, we've continued to innovate and expand. As we look to the future, our commitment to delivering the best in the world of culinary products remains stronger than ever, with a focus on enhancing customer experiences through personalized service and expanding our eco-friendly product line. Thank you for being a part of our story, and we're excited to share many more culinary adventures with you.</p>
                </div>
                
                <!-- IMG --> 
                <img class="img-responsive margin-top-80 margin-bottom-80" src="images/about-img.jpg" alt="">
                <div class="vision-text">
                <div class="col-lg-5">
                    <h5 class="text-left">our vision</h5>
                    <h2>We craft awesome stuff with great experiences</h2>
                </div>
                <div class="col-lg-7">
                    <p>To be the leading and preferred provider of high-quality cooking oil products, offering convenience to our customers in creating delicious and healthy dishes worldwide. We are committed to continuously developing innovative products that cater to the needs and preferences of our customers while making a positive impact on the environment and the communities in which we operate. We aspire to be an industry leader in delivering high-quality and sustainable culinary solutions to the world.  </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        
        <!-- Culture BLOCK -->
        <section class="cultur-block">
        <ul>
            <li> <img src="images/cultur-img-1.jpg" alt="" > </li>
            <li> <img src="images/cultur-img-2.jpg" alt="" > </li>
            <li> <img src="images/cultur-img-3.jpg" alt="" > </li>
            <li> <img src="images/cultur-img-4.jpg" alt="" > </li>
        </ul>
        
        <!-- Culture Text -->
        <div class="position-center-center">
            <div class="container">
            <div class="col-sm-6 center-block">
                <h4>awesome work culture</h4>
                <p>Phasellus lacinia fermentutm bibendum. Interdum et malante ipuctus non. Nulla lacinia,
                eros vel fermentum consectetur, ris dolor in ex. </p>
            </div>
            </div>
        </div>
        </section>
        
        <!-- Video -->
        <section class="video-block"> <img class="img-responsive" src="images/video-img.jpg" alt="" >
        <div class="position-center-center"> <a href="#"> <i class="icon-camcorder"></i>watch video </a> </div>
        </section>
        
        <!-- OUR TEAM -->
        <section class="our-team light-gray-bg padding-top-150 padding-bottom-100">
        <div class="container">
            <div class="heading text-center">
            <h4>OUR TEAM</h4>
            <span>United by love & help to build great brands</span> </div>
            
            <!-- TEAM -->
            <ul class="row">
            
            <!-- Member -->
            <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.4s">
                <article> 
                <!-- abatar -->
                <div class="avatar"> <img class="img-circle" src="images/team-1.png" alt="" > 
                    <!-- Team hover -->
                    <div class="team-hover">
                    <div class="position-center-center">
                        <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a></div>
                    </div>
                    </div>
                </div>
                <!-- Team Detail -->
                <div class="team-names">
                    <h6>NUGRAHMAN RESKI P</h6>
                    <p>CEO & FOUNDER</p>
                </div>
                </article>
            </li>
            
            <!-- Member -->
            <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.6s">
                <article> 
                <!-- abatar -->
                <div class="avatar"> <img class="img-circle" src="images/team-2.png" alt="" > 
                    <!-- Team hover -->
                    <div class="team-hover">
                    <div class="position-center-center">
                        <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a></div>
                    </div>
                    </div>
                </div>
                <!-- Team Detail -->
                <div class="team-names">
                    <h6>IVAN BHAGASKARA K</h6>
                    <p>DESIGNER</p>
                </div>
                </article>
            </li>
            
            <!-- Member -->
            <li class="col-md-4 text-center animate fadeInUp" data-wow-delay="0.8s">
                <article> 
                <!-- abatar -->
                <div class="avatar"> <img class="img-circle" src="images/team-3.png" alt="" > 
                    <!-- Team hover -->
                    <div class="team-hover">
                    <div class="position-center-center">
                        <div class="social-icons"> <a href="#."><i class="icon-social-facebook"></i></a> <a href="#."><i class="icon-social-twitter"></i></a></div>
                    </div>
                    </div>
                </div>
                <!-- Team Detail -->
                <div class="team-names">
                    <h6>RICO ADITYA P</h6>
                    <p>DEVELOPER</p>
                </div>
                </article>
            </li>
            </ul>
        </div>
        </section>
        
        <!-- WORK WITH US -->
        <section class="our-team padding-top-150 padding-bottom-100">
        <div class="container">
            <div class="heading text-center">
            <h4>We work with the best</h4>
            <span>We are proud that we have awesome sponsors</span> </div>
            <ul class="clients-img">
            <li> <img class="img-responsive" src="images/c-img-1.jpg" alt=""> </li>
            <li> <img class="img-responsive" src="images/c-img-2.jpg" alt=""> </li>
            <li> <img class="img-responsive" src="images/c-img-3.jpg" alt=""> </li>
            <li> <img class="img-responsive" src="images/c-img-4.jpg" alt=""> </li>
            </ul>
        </div>
        </section>
    </div>
@endsection