@php
$categories = App\Models\Category::paginate(12);
$setting = App\Models\Settings::first();

@endphp
<header class="header-style-01">
    <nav class="navbar navbar-area headerBg1 navbar-expand-lg  plr">
        <div class="container-fluid container-two nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset($setting->logo) }}" width="100px" style="height:50px" alt="images">
                    </a>
                </div>
                <!-- Click Menu Mobile right menu -->
                <a href="#0" class="click_show_icon"><i class="las la-ellipsis-v"></i> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="NavWrapper">
                <div class="sibeBar-Wrapper">
                    <!-- sideBar -->
                    <div class="sideBar">
                        <!-- sidebar Btn -->
                        <a href="#" class="sidebarBtn">
                            <i class="las la-bars iconLeft"></i> <span class="allCat">@lang('site.all_categories')</span><i
                                class="las la-angle-down iconRight"></i>
                        </a>
                        <!-- Show Menu list -->
                        <div class="showSidebar">
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="singleList menu-item-has-children current-menu-item ">
                                        <a href="{{ route('single_category', $category->id) }}" class="tittle"> <i
                                                class="las la-headphones icon"></i> {{ $category->title_en }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
                <!-- Main Menu -->
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li><a href="{{ route('product.index') }}">@lang('site.all_ads')</a></li>
                        <li><a href="{{ route('about_us') }}">@lang('site.about_us')</a></li>
                        <li class="menu-item-has-children">
                            <a href="#" class="menuArrow">@lang('site.pages')</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('home') }}">@lang('site.home') </a></li>
                                <li><a href="{{ route('product.index') }}">@lang('site.ad_list')</a></li>
                                {{-- <li><a href="{{ route('product.single' , $product->id) }}">@lang('site.add_details')</a></li> --}}
                                <li><a href="{{ route('categories.category') }}">@lang('site.add_lists_category')</a></li>
                                {{-- <li><a href="add_listing_Details.html">Add listing Details</a></li> --}}
                                {{-- <li><a href="add_setting.html">Add Setting</a></li> --}}
                                {{-- <li><a href="{{ route('my_account') }}">My Account</a></li> --}}
                                {{-- <li><a href="memberShip.html">Member Ship</a></li> --}}
                                {{-- <li><a href="{{ route('wish_list') }}">@lang('site.wish_list')</a></li> --}}
                                {{-- <li><a href="promoted_add_list.html">Promoted add_list</a></li> --}}
                                {{-- <li><a href="image_uploded.html">Image Uploded</a></li> --}}
                                {{-- <li><a href="payment.html">Payment</a></li> --}}

                                {{-- <li><a href="messages.html">@lang('site.message_all')</a></li> --}}
                            </ul>
                        </li>
                        <li><a href="{{ route('conacts') }}">@lang('site.contacts')</a></li>
                        <li><a href="{{ route('promoted.ads') }}">@lang('site.promoted_ads')</a></li>
                        @guest

                            <li><a href="{{ route('login.show') }}">@lang('site.login')</a></li>
                        @endguest

                    </ul>
                </div>
            </div>
            <!-- Menu Right -->
            <div class="nav-right-content">
                <!-- new -->
                <ul class="header-cart">
                    <li class="single chatBar">
                        @if (auth()->check())
                            <a href="{{ route('chatify') }}" class="chat"><i class="lab la-rocketchat icon"></i><span
                                    class="text">@lang('site.chat')</span></a>
                        @else
                            <a href="{{ route('login.show') }}" class="chat"><i
                                    class="lab la-rocketchat icon"></i><span
                                    class="text">@lang('site.chat')</span></a>
                        @endif
                        <!-- Chat List Wrapper -->
                        {{-- <div class="chatList-wrapper">
                            <h6 class="chat-title">@lang('site.all_message') </h6>
                            <ul class="chat-list">
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Rupak </a>
                                            <span class="list-sub"> 4 hours ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html">Md. Shahin </a>
                                            <span class="list-sub"> 8 hours ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Shariful Rahman </a>
                                            <span class="list-sub"> 1 day ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Suzon islam </a>
                                            <span class="list-sub"> 3 day ago </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list">
                                    <div class="chat-list-flex">
                                        <div class="item-icon">
                                            <img src="{{ asset('frontend') }}/assets/img/gallery/user.png"
                                                alt="img">
                                        </div>
                                        <div class="chat-contents">
                                            <a class="list-title" href="messages.html"> Md Zahid </a>
                                            <span class="list-sub"> 7 day ago </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="messages.html" class="all-chat"> See All Messages </a>
                        </div> --}}
                        <!-- end Chat List -->
                    </li>
                    @if (auth()->check())
                        <li class="single"><a href="{{ route('wish_list') }}" class="heart"><i
                                    class="lar la-heart icon"></i></a>
                        </li>
                    @else
                        <li class="single"><a href="{{ route('login.show') }}" class="heart"><i
                                    class="lar la-heart icon"></i></a>
                        </li>
                    @endif
                    @auth
                        <li class="single userAccount">
                            @if (auth()->check())
                                <button class="user"><img style="border-radius:50%"
                                        src="{{ asset(auth()->user()->image) }}" alt="images"></button>
                            @else
                                <button class="user"><img style="border-radius:50%"
                                        src="{{ asset('frontend') }}/assets/img/gallery/user.png" alt="images"></button>
                            @endif
                            <div class="userAccount-wrapper">
                                <h6 class="ac-title">@lang('site.user_account')</h6>
                                <ul class="ac-list">
                                    <li class="list">
                                        <a class="list-title" href="{{ route('my_account') }}"> <i
                                                class="lar la-user-circle icon"></i> @lang('site.my_account') </a>
                                    </li>
                                    <li class="list">
                                        <a class="list-title" href="{{ route('member_ship') }}"> <i
                                                class="las la-address-card icon"></i> @lang('site.membership') </a>
                                    </li>
                                    <li class="list">
                                        <a class="list-title" href="{{ route('promoted_add') }}"><i
                                                class="las la-ad icon"></i> @lang('site.promoted_ads') </a>
                                    </li>
                                    <li class="list">
                                        <a class="list-title" href="{{ route('wish_list') }}"><i
                                                class="lar la-heart icon"></i>
                                            @lang('site.wish_list') </a>
                                    </li>
                                    <li class="list">
                                        <a class="list-title" href="{{ route('help') }}"> <i
                                                class="lar la-question-circle icon"></i> @lang('site.help')</a>
                                    </li>
                                    <li class="list">
                                        <a class="list-title" href="{{ route('logout.front') }}"> <i
                                                class="las la-sign-out-alt icon"></i>
                                            @lang('site.logout')</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End User AC -->
                        </li>
                    @endauth
                    <li class="single">
                        <div class="btn-wrapper">
                            @if (auth()->check())
                                <a href="#" class="cmn-btn1 popup-modal">
                                    <i class="las la-plus-square"></i><span class="text">@lang('site.post_your_ad')</span>
                                </a>
                            @else
                                <a href="{{ route('login.show') }}" class="cmn-btn1 popup-modal">
                                    <i class="las la-plus-square"></i><span class="text">@lang('site.post_your_ad')</span>
                                </a>
                            @endif
                        </div>
                    </li>
                    <li class="single">
                        <!-- Select Language -->
                        <div class="select-itms">
                            <select name="select" class="niceSelect">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <option value=""> <a rel="alternate" hreflang="{{ $localeCode }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a></option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
