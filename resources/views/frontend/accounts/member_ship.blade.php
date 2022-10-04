@extends('frontend.layouts.master')

@section('content')
    <!--MemberShip  S t a r t-->
    <div class="memberShip section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                    <!-- Account Sidebar    -->
                    <div class="accountSidebar">
                        <ul class="listing listScroll">
                            <li class="listItem ">
                                <a href="{{ route('my_account') }}" class="items {{ request()->url() == route('my_account') ? ' active' : '' }}"> <i class="lar la-user-circle icon"></i>
                                    @lang('site.my_account')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('member_ship') }}" class="items {{ request()->url() == route('member_ship') ? ' active' : '' }}"><i class="las la-address-card icon"></i>
                                    @lang('site.membership')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('promoted_add') }}" class="items {{ request()->url() == route('promoted_add') ? ' active' : '' }}"><i class="las la-ad icon"></i>
                                    @lang('site.promoted_ads')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('wish_list') }}" class="items {{ request()->url() == route('wish_list') ? ' active' : '' }}"> <i class="lar la-heart icon"></i>
                                    @lang('site.wish_list')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('help') }}" class="items {{ request()->url() == route('help') ? ' active' : '' }}"> <i
                                        class="lar la-question-circle icon"></i> @lang('site.help')</a>
                            </li>
                        </ul>
                        <div class="accessAccount">
                            <a href="{{ route('logout') }}" class="account-btn"><i class="las la-sign-out-alt icon"></i>
                                @lang('site.logout')</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                    <!-- Bread Crumb S t a r t -->
                    <div class="row mb-24">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">My Account</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /END -->
                    <!-- member Ship -->
                    <div class="memberShipCart">
                        <!-- Single -->
                        <div class="singleMember mb-24">
                            <div class="memberDetails">
                                <h5><a href="#" class="memberTittle">Verified Membership <span
                                            class="activeUser">Active</span></a></h5>
                                <!-- infoSingle -->
                                <div class="infoSingle">
                                    <ul class="listing">
                                        <li class="listItem">Billing Yearly</li>
                                        <li class="listItem">24 Days remaining to next invoice</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-wrapper mb-20">
                                <a href="#" class="cmn-btn-outline4 mr-10">Cancel</a>
                                <a href="#" class="cmn-btn4">Upgrade</a>
                            </div>
                        </div>
                    </div>
                    <!-- /END -->

                    <div class="small-tittle mb-30">
                        <h3>Payments</h3>
                    </div>
                    <!--Payment Table -->
                    <div class="paymentTable">
                        <!-- Single -->
                        <div class="singleMember wow fadeInUp social" data-wow-delay="0.0s">
                            <p class="memberInfo">Verified Membership</p>
                            <p class="price">$102.99</p>
                            <p class="memberInfo">$07 Jan 2022 </p>
                            <p class="memberInfo">Mastercard ****<span class="lastDegit">9834</span> </p>
                            <p class="success-btn">Successfully paid</p>
                        </div>
                        <!-- Single -->
                        <div class="singleMember wow fadeInUp social" data-wow-delay="0.1s">
                            <p class="memberInfo">Verified Membership</p>
                            <p class="price">$102.99</p>
                            <p class="memberInfo">$07 Jan 2022 </p>
                            <p class="memberInfo">Mastercard ****<span class="lastDegit">9834</span> </p>
                            <p class="success-btn">Successfully paid</p>
                        </div>
                        <!-- Single -->
                        <div class="singleMember wow fadeInUp social" data-wow-delay="0.2s">
                            <p class="memberInfo">Verified Membership</p>
                            <p class="price">$102.99</p>
                            <p class="memberInfo">$07 Jan 2022 </p>
                            <p class="memberInfo">Mastercard ****<span class="lastDegit">9834</span> </p>
                            <p class="success-btn">Successfully paid</p>
                        </div>
                    </div>
                    <!-- /END -->
                </div>
            </div>
        </div>
    </div>
    <!--End-of MemberShip-->
@endsection
