{{-- <!DOCTYPE html> --}}
<html lang="en">
@php
// $categories = App\Models\Category::paginate(12);
$setting = App\Models\Settings::first();

@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords"
        content="ads, advertise, advertising, classified, classified ads, database, directory, jobs, listing, local, portal" />
    <meta name="description"
        content="Choose from 72 Premium classified ads Templates from the #1 source for classified ads Templates. Created by our Global Community of independent Web Developers." />
    <title>Classified Ads</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset('frontend') }}/assets/img/icon/favicon.png">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugin.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main-style.css">
    {{-- Noty --}}
    <link rel="stylesheet" href="{{ asset('css/noty/noty.css') }}">
    {{-- dropzone --}}
    <link rel="stylesheet" href="{{ asset('frontend/dropzone.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @include('frontend.layouts.header')
    <main>
        @yield('content')
        <!-- Modal -->
        <div class="body-overlay-desktop"></div>
        <div class="modal-wrapper text-center">
            <div class="close-icon">
                <i class="las la-times"></i>
            </div>
            <h2 class="modialTittle">@lang('site.post_your') <span>@lang('site.ad')</span> ?</h2>
            <div class="btn-wrapper">
                <a href="{{ route('product.create') }}" class="cmn-btn02">@lang('site.yes_post_ad')</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="footerWrapper plr">
            <div class="footer-area footer-padding">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="footer-widget widget  mb-24">
                                <div class="footer-tittle footer-tittle2">
                                    <div class="footer-logo mb-40">
                                        <a href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}"
                                                width="100px" style="height:50px" alt="images"></a>
                                    </div>
                                    <ul class="listing">
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#"
                                                class="singleLinks"><i
                                                    class="las la-map-marker icon"></i>{{ $setting->address }}</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#"
                                                class="singleLinks"><i
                                                    class="las la-phone icon"></i>{{ $setting->phone }}</a>
                                        </li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"><i
                                                    class="las la-envelope icon"></i>{{ $setting->email }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget widget  mb-24">
                                <div class="footer-tittle">
                                    <h4 class="footerTittle">@lang('site.categories')</h4>
                                    <ul class="listing">
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#"
                                                class="singleLinks"> @lang('site.electronics')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#"
                                                class="singleLinks"> @lang('site.mobile')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#"
                                                class="singleLinks"> @lang('site.vehicles')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#"
                                                class="singleLinks"> @lang('site.application')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.fashions')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.education')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.property')</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget widget  mb-24">
                                <div class="footer-tittle">
                                    <h4 class="footerTittle">@lang('site.about')</h4>
                                    <ul class="listing">
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#"
                                                class="singleLinks"> @lang('site.about_us')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a href="#"
                                                class="singleLinks"> @lang('site.blog')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#"
                                                class="singleLinks"> @lang('site.press')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.1s"><a href="#"
                                                class="singleLinks"> @lang('site.jobs')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.in_press')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.terms_condition')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.praivcy_policy')</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                            <div class="footer-widget widget  mb-24">
                                <div class="footer-tittle">
                                    <h4 class="footerTittle">@lang('site.help_support')</h4>
                                    <ul class="listing">
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.0s"><a
                                                href="{{ route('conacts') }}" class="singleLinks">
                                                @lang('site.contacts')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.2s"><a href="#"
                                                class="singleLinks"> @lang('site.faq')</a></li>
                                        <li class="listItem wow fadeInUp" data-wow-delay="0.3s"><a href="#"
                                                class="singleLinks"> @lang('site.safty_information')</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6">
                            <div class="footer-widget widget  mb-24">
                                <div class="footer-tittle footer-tittle2">
                                    <h4 class="footerTittle">@lang('site.news_letter')</h4>
                                    <div class="footer-pera footer-pera2">
                                        <p class="pera wow fadeInUp" data-wow-delay="0.0s">Be the first one to know
                                            news, offers and events weekly in your. Unsubscribe whenever you like with
                                            one click.</p>
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="footer-form mt-10 wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="form-row mb-20">
                                        <form class="newsletter-footer" action="{{ route('email.subscribtion') }}"
                                            method="post">
                                            @csrf
                                            <input class="input" type="email" name="email"
                                                placeholder="Your Email Address">
                                            <div class="btn-wrapper form-icon">
                                                <button class="btn-default btn-rounded" type="submit">
                                                    @lang('site.submit')</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="footer-social2 ">
                                        <a href="http://facebook.com/h" class="wow fadeInUp social"
                                            data-wow-delay="0.2s"><i class="lab la-facebook-f icon"></i></a>
                                        <a href="http://youtube.com/h" class="wow fadeInUp social"
                                            data-wow-delay="0.2s"><i class="lab la-youtube icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container-fluid">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p class="pera wow fadeInDown" data-wow-delay="0.0s">© 2022 , Xgenious All Rights
                                        Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Mouse Effect -->
    <div class="mouseCursor cursorOuter"></div>
    <div class="mouseCursor cursorInner"></div>
    <!-- Scroll Up  -->
    <div class="progressParent">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- End-of Scroll-->
    {{-- Noty --}}
    <script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('custom/noty/noty.min.js') }}"></script>
    <!-- jquery -->
    <!-- Plugin JS -->
    {{-- mahdy --}}
    {{-- {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs() !!} --}}
    <script src="{{ asset('frontend') }}/assets/js/plugin.js"></script>
    <!-- Main js -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    {{-- dropzone --}}
    <script src="{{ asset('frontend/dropzone.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('js')
</body>

</html>
