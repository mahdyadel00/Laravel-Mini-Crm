@extends('frontend.layouts.master')

@section('content')
     <!-- Hero Area S t a r t -->
     <div class="sliderArea heroAboutStyle plr ">
        <div class="slider-active">
            <div class="single-slider heroPadding d-flex align-items-center">
                <div class="container-fluid ">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xxl-6 col-xl-7 col-lg-5 col-md-12">
                            <div class="heroCaption mb-50">
                                <h1 class="tittle" data-animation="fadeInUp" data-delay="0.0s">We make buying-selling online easier</h1>
                                <p class="pera" data-animation="fadeInUp" data-delay="0.3s">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                <div class="btn-wrapper">
                                    <a href="{{route('register')}}" class="cmn-btn04 mr-15 mb-10 wow fadeInLeft" data-wow-delay="0.3s">@lang('site.sign_up')</a>
                                    <a href="#" class="browseBtn mb-10 wow fadeInLeft" data-wow-delay="0.3s">@lang('site.browse_ads') <i class="las la-angle-right icon"></i></a>
                                </div>
                            </div>
                            <!--? Count Down S t a r t -->
                            <div class="countDown">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <div class="single mb-24 wow fadeInLeft" data-wow-delay="0.2s" >
                                            <div class="single-counter">
                                                <span class="counter odometer"  data-count="4.05"></span>
                                                <p class="icon">+</p>
                                            </div>
                                            <div class="pera-count">
                                                <p class="pera">@lang('site.years_in_the_industry')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <div class="single mb-24 wow fadeInLeft" data-wow-delay="0.4s">
                                            <div class="single-counter">
                                                <span class="counter odometer"  data-count="1300"></span>
                                                <p class="icon">+</p>
                                            </div>
                                            <div class="pera-count ">
                                                <p>@lang('site.emloyees_working')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <div class="single mb-24 wow fadeInLeft" data-wow-delay="0.6s">
                                            <div class="single-counter">
                                                <span class="counter odometer"  data-count="20"></span>
                                                <p class="icon">K</p>
                                            </div>
                                            <div class="pera-count">
                                                <p>@lang('site.actived_registerd_user')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Count Down E n d -->
                        </div>
                        <div class="col-xxl-6 col-xl-5 col-lg-7 ">
                            <div class="hero-man d-none d-lg-block f-right" >
                                <img src="{{ asset('frontend') }}/assets/img/hero/aboutHero.png" alt="images" class="tilt-effect " data-animation="fadeInRight" data-delay="0.3s">
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End-of Hero  -->
    <!-- Story Area S t a r t -->
    <div class="storyArewa ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-7 col-lg-8 col-md-9 col-sm-10">
                    <div class="section-tittle section-tittle6 text-center mb-90">
                        <h2 class="tittle">@lang('site.our_story') <span class="lineBrack"></span> @lang('site.started_in')</h2>
                        <p>I found a 2007 study on effects of hand sanitizers on blood alcohol level in adults. The 12 subjects applied 4 mL of hand sanitizer for 30 seconds per application, 20 applications over a 30 min period (total exposure time 10 min).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of story -->
    <!-- About  S t a r t-->
    <section class="aboutArea section-padding2 sectionBg3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-5 position-relative">
                    <!-- about-img -->
                    <div class="aboutImg aboutImg5 tilt-effect mr-40">
                        <img src="{{ asset('frontend') }}/assets/img/gallery/about5.png" alt="images" class="bouncingAnimations">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-7 col-lg-6 col-md-7">
                    <div class="about-caption m-0">
                        <div class="row justify-content-center">
                            <div class="section-tittle section-tittle6 m-0">
                                <h2 class="tittle p-0">We’re working to make the world a better place </h2>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of About  -->
    <!-- Team Area S t a r t -->
    <section class="teamArea  section-padding plr">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10">
                    <div class="section-tittle section-tittle6 text-center mb-50">
                        <h2 class="tittle p-0">@lang('site.meet_our')<span class="lineBrack"></span>@lang('site.hard_workin_team')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam1.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">@lang('site.wade_warren')</a></h3>
                            <p class="pera">@lang('site.founder_co')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam2.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam3.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam4.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam5.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam6.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam7.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="singleTeam mb-24">
                        <div class="teamImg">
                            <img src="{{ asset('frontend') }}/assets/img/gallery/tam8.jpg" alt="images">
                            <!-- Social -->
                            <ul class="teamSocial">
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-facebook-f icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-twitter icon"></i></a></li>
                                <li class="list"><a href="#" target="_blank" class="singleSocial"><i class="lab la-instagram icon"></i></a></li>
                            </ul>
                        </div>
                        <div class="teamCaption">
                            <h3><a href="#" class="title">Wade Warren</a></h3>
                            <p class="pera">Founder & Ceo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Team -->
    <!-- About  S t a r t-->
    <section class="aboutArea plr bottom-padding2">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-7 col-xl-8 col-lg-10">
                    <div class="wantWorking sectionBg3 text-center">
                        <div class="section-tittle mb-20">
                            <h2 class="tittle wow fadeInUp" data-wow-delay="0.0s">@lang('site.growing_positive_environment')</h2>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ route('product.create') }}" class="cmn-btn2 mr-15 mb-10 wow fadeInLeft" data-wow-delay="0.1s">@lang('site.how_we_work')</a>
                            <a href="{{route('login.show')}}" class="cmn-btn3 mb-10 wow fadeInRight" data-wow-delay="0.1s">@lang('site.join_us')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of About  -->
@endsection


