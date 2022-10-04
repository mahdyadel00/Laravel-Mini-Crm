@extends('frontend.layouts.master')

@section('content')
    <!--My Account  S t a r t-->
    <div class="myAccout section-padding2">
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
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('site.home')</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('help') }}"> @lang('site.help')</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /END-->

                    <div class="HelpSearch">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="SearchWrapper">
                                    <div class="searchBox-wrapper">
                                        <!-- Search Box -->
                                        <form action="#" class="search-box">
                                            <div class="input-form">
                                                <input type="text" class=" keyup-input" placeholder="Search">
                                                <!-- icon -->
                                                <div class="icon">
                                                    <i class="las la-search"></i>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- search-suggestions -->
                                        <div class="category-searchbar search-showHide">
                                            <!-- Closed Icon -->
                                            <span class="closed-icon"><i class="las la-times"></i></span>
                                            <div class="search-suggestions" id="search_suggestions_wrap">
                                                <div class="search-inner">
                                                    <div class="category-suggestion item-suggestions">
                                                        <h6 class="item-title">Category Suggestions</h6>
                                                        <ul class="category-suggestion-list">
                                                            <li class="list"> <a href="#" class="item">Fruits
                                                                    &amp; Vegetables</a>
                                                            </li>
                                                            <li class="list"><a href="#" class="item">Cooking</a>
                                                            </li>
                                                            <li class="list"> <a href="#" class="item">Dairy</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-suggestion item-suggestions">
                                                        <h6 class="item-title">
                                                            <span>
                                                                Product Suggestions
                                                            </span>
                                                            <a href="#" target="_blank" id="search_result_all"
                                                                class="showAll">Show all</a>
                                                        </h6>
                                                        <ul class="product-suggestion-list mt-4"
                                                            id="search_result_products">
                                                            <li class="list">
                                                                <a href="#" class="item">
                                                                    <div class="product-image"><img
                                                                            src="assets/img/gallery/wishlist1.jpg"
                                                                            alt="img"></div>
                                                                    <div class="product-info">
                                                                        <div class="product-info-top">
                                                                            <h6 class="product-name">Fresh Fruits</h6>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <div class="price-update-through">
                                                                                <span
                                                                                    class="flash-price fw-500">$200.00</span>
                                                                                <span class="flash-old-prices">$240</span>
                                                                            </div>
                                                                            <span class="stock-out">In Stock</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End suggestions -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="faqArea">
                                    <!-- collapse-wrapper -->
                                    <div class="collapse-wrapper">
                                        <div class="accordion" id="accordionExample">
                                            <!-- Single 01 -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button " type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        01 How to proceed purchase a dangerous cargo ?
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>It is a long established fact that a reader will be distracted by
                                                            the readabl content of a page when looking at its layout. The
                                                            point of using Lorem Ips um is that it has a more</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single 02 -->
                                            <!--
                                                Show
                                                1. remove : collapsed
                                                2.Change : aria-expanded="false" to  aria-expanded="true"
                                                3. add : show
                                            -->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        02 Can you guarantee exactly delivery date on time?
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>See how we’re building a better healthcare experience for people
                                                            just like you. Search for a Clinicity Clinic health expert by
                                                            specialty, disease. Quo ex facer decore sadipscing, mel cu
                                                            iriure oporteat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single 03-->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        03 What are the of freight payment method?
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>It is a long established fact that a reader will be distracted by
                                                            the readabl content of a page when looking at its layout. The
                                                            point of using Lorem Ips um is that it has a more</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single 04-->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        04 Do you have a warehouse drop off the cargo?
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p>It is a long established fact that a reader will be distracted by
                                                            the readabl content of a page when looking at its layout. The
                                                            point of using Lorem Ips um is that it has a more</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-of My Account-->
@endsection
