@extends('frontend.layouts.master')

@php
$favourite = App\Models\FavouriteProduct::with('product')
    ->where('user_id', auth()->user()->id)
    ->get();
//   dd($favourite);
@endphp
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
                                    <li class="breadcrumb-item"><a href="{{ route('wish_list') }}"> @lang('site.wish_list')</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /END-->
                    <!-- promoteAds -->
                    <div class="promoteAds">
                        <!-- Single -->
                        @foreach ($favourite as $fav)
                            @foreach ($fav->product as $product)
                                <div class="singlePromoteAds mb-24  wow fadeInUp social" data-wow-delay="0.0s">
                                    <div class="adsCap">
                                        <div class="adsImg">
                                            <img src="{{ asset($product->image) }}" width="100px" height="100px"
                                                alt="images">
                                        </div>
                                        <div class="adsCaption">
                                            <h5><a href="{{ route('product.single', $product->id) }}"
                                                    class="adsTittle">{{ $product->title_en }}</a></h5>
                                            <p class="adsPera">Dallas, Texas · <strong
                                                    class="subCap">{{ date_format($fav->created_at, 'D M Y') }}</strong>
                                            </p>
                                            <span class="adsPricing">${{ $product->price }}</span>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper mb-20">
                                        <a href="#" data-id="{{ $product->id }}"
                                            class="cmn-btn-outline5 delete-product-from-favorite"
                                            data-url="{{ route('favorite.destroy', [$product->id]) }}"><i
                                                class="las la-heart icon"></i>@lang('site.favourite')</a>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                        <!-- Single -->
                    </div>
                    <!-- END -->
                </div>
            </div>
        </div>
    </div>
    <!--End-of My Account-->
@endsection

@push('js')
    <script>
        //remove favourite
        $(document).on('click', '.delete-product-from-favorite', function(e) {
            e.preventDefault();
            var _url = $(this).attr('data-url');
            var id = $(this).attr('data-id');
            var $this = $(this);
            $.ajax({
                url: _url,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    // console.log(response);
                    if (response == 'error') {
                        new Noty({
                            type: 'error',
                            layout: 'topRight',
                            text: "{{ 'Thank You, Your Review Has Been Submitted' }}",
                            timeout: 2000,
                            killer: true
                        }).show();
                    } else {
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            text: response.message,
                            timeout: 2000,
                            killer: true
                        }).show();
                    }
                },
            });
        })
        //added favourite


        // $(document).on('click', '.add-product-to-favorite', function(e) {
        //     e.preventDefault();
        //     var _url = $(this).attr('data-url');
        //     var id = $(this).attr('data-id');
        //     var $this = $(this);
        //     $.ajax({
        //         url: _url,
        //         method: "post",
        //         data: {
        //             "_token": "{{ csrf_token() }}"
        //         },
        //         success: function(response) {
        //             // console.log(response);
        //             if (response == 'error') {
        //                 new Noty({
        //                     type: 'error',
        //                     layout: 'topRight',
        //                     text: "{{ 'Thank You, Your Review Has Been Submitted' }}",
        //                     timeout: 2000,
        //                     killer: true
        //                 }).show();
        //             } else {
        //                 new Noty({
        //                     type: 'success',
        //                     layout: 'topRight',
        //                     text: response.message,
        //                     timeout: 2000,
        //                     killer: true
        //                 }).show();
        //             }
        //         },
        //     });
        // })
    </script>
@endpush
