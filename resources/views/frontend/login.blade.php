@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <!--login Area s t a r t-->
    <div class="loginArea section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 p-0 loginLeft-img">
                    <div class="loginLeft-img">
                        <div class="login-cap">
                            <h3 class="tittle">Buy & sell anything</h3>
                            <p class="pera">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                        </div>
                        <div class="login-img">
                            <img src="{{ asset($auth->login_image) }}" alt="img" class="loginImg">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 login-Wrapper">
                    <form action="{{ route('login.do') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label class="infoTitle">@lang('site.email')</label>
                                <div class="input-form">
                                    <input type="text" name="email" placeholder="Enter your email">
                                    <div class="icon"><i class="lar la-envelope icon"></i></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="infoTitle">@lang('site.password')</label>
                                <div class="input-form">
                                    <input type="password" name="password" placeholder="Enter password">
                                    <div class="icon"><i class="las la-lock icon"></i></div>
                                    <p>@lang('site.password_must')</p>
                                </div>
                            </div>
                            <!--Forget passwords -->
                            <div class="col-sm-12">
                                <div class="passRemember mt-20">
                                    <label class="checkWrap2">@lang('site.remmber_me')
                                        <input class="effectBorder" type="checkbox" value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- forgetPassword -->
                                    <div class="forgetPassword mb-25">
                                        <a href="#" class="forgetPass">@lang('site.forget_password')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="btn-wrapper text-center">
                                    {{-- <a href="#"  class="cmn-btn4 w-100 mb-60"> --}}
                                        {!! NoCaptcha::display() !!}
                                    <button class="cmn-btn4 w-100 mb-60" type="submit">@lang('site.login')</button>
                                    <a href="#" class="cmn-btn-outline0  mb-20 w-100"><img
                                            src="{{ asset('frontend') }}/assets/img/icon/googleIocn.svg" alt="images"
                                            class="icon"> @lang('site.login_with_google')</a>
                                    <a href="#" class="cmn-btn-outline0 mb-20  w-100"><img
                                            src="{{ asset('frontend') }}/assets/img/icon/fbIcon.svg" alt="images"
                                            class="icon">@lang('site.login_with_facebook')</a>
                                    <p class="sinUp"><span>@lang('site.dont_have_account') </span><a href="{{ route('register.show') }}"
                                            class="singApp">@lang('site.sign_up')</a></p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
