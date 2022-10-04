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
                                <a href="{{ route('my_account') }}"
                                    class="items {{ request()->url() == route('my_account') ? ' active' : '' }}"> <i
                                        class="lar la-user-circle icon"></i>
                                    @lang('site.my_account')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('member_ship') }}"
                                    class="items {{ request()->url() == route('member_ship') ? ' active' : '' }}"><i
                                        class="las la-address-card icon"></i>
                                    @lang('site.membership')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('promoted_add') }}"
                                    class="items {{ request()->url() == route('promoted_add') ? ' active' : '' }}"><i
                                        class="las la-ad icon"></i>
                                    @lang('site.promoted_ads')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('wish_list') }}"
                                    class="items {{ request()->url() == route('wish_list') ? ' active' : '' }}"> <i
                                        class="lar la-heart icon"></i>
                                    @lang('site.wish_list')</a>
                            </li>
                            <li class="listItem">
                                <a href="{{ route('help') }}"
                                    class="items {{ request()->url() == route('help') ? ' active' : '' }}"> <i
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
                                    <li class="breadcrumb-item"><a href="{{ route('my_account') }}">@lang('site.my_account')</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- End-of Bread Crumb-->
                    <!-- Account -->
                    <div class="accountWrapper mb-24">
                        <!-- user -->
                        <div class="userProfile mb-24">
                            <div class="recentImg">
                                <img src="{{ asset(auth()->user()->image) }}" width="100px" height="100px" alt="images">
                            </div>
                            <div class="recentCaption">
                                <div class="cap">
                                    <h5><a href="#" class="featureTittle">{{ auth()->user()->first_name }}
                                            {{ auth()->user()->last_name }}</a></h5>
                                    <p class="featureCap">@lang('site.member_since')
                                        {{ \Carbon\Carbon::parse(auth()->user()->created_at)->format('Y-m-d') }}</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="{{ route('profile.edit') }}" class="cmn-btn-outline2">@lang('site.edit_profile')</a>
                                </div>
                            </div>
                        </div>
                        <!-- infoSingle -->
                        <div class="infoSingle">
                            <ul class="listing">
                                <li class="listItem"><i class="lar la-envelope-open icon"></i>{{ auth()->user()->email }}
                                </li>
                                <li class="listItem"><i class="las la-phone icon"></i>{{ auth()->user()->phone }}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- My Listings -->
                    <div class="myListing">
                        <!-- Single -->
                        @foreach ($products as $product)
                            <div class="singleFlexitem mb-24  wow fadeInUp social" data-wow-delay="0.0s">
                                <div class="listCap">
                                    <div class="recentImg">
                                        <img src="{{ asset($product->image) }}" style="width: 100px;height:100px"
                                            alt="images">
                                    </div>
                                    <div class="recentCaption">
                                        <h5><a href="{{ route('product.single', $product->id) }}"
                                                class="featureTittle">{{ $product->title_en }}</a></h5>
                                        <p class="featureCap">@lang('site.posted_on') <strong
                                                class="subCap">{{ date_format($product->user[0]->created_at, 'D M Y') }}</strong>
                                        </p>
                                        <span class="featurePricing">${{ $product->price }}</span>
                                        <div class="btn-wrapper">

                                            @if ($product->nigotiable == 1)
                                                <span class="pro-btn2">@lang('site.promoted')</span>
                                            @else
                                                <span class="pro-btn1">@lang('site.un_promoted')</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper mb-20">
                                    <a href="#" class="btn btn-primary mr-10"><i
                                            class="lar la-eye icon"></i>{{ $product->view }}</a>
                                    <a href="#" id="ad-promoted" style="background: var(--main-color-two);color:#fff"
                                        data-id={{ $product->id }} class="cmn-btn4">@lang('site.Promote_this_ad')</a>
                                    <form action="{{ route('products.delete', $product->id) }}" method="post"
                                        style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger mr-10" type="submit">
                                            <a href="#" class="btn btn-danger font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Delete product">
                                                <i style="color:white" class="fa fa-trash">@lang('site.delete')</i>
                                            </a></button>
                                    </form><!-- end of form -->
                                </div>
                            </div>
                            <!-- Single -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-of My Account-->
@endsection
@push('js')
    <script>
        $(document).on('click', '#ad-promoted', function() {
            let edit_url = '{{ route('products.promoted') }}';
            let id = $(this).data('id');
            let token = '{{ csrf_token() }}';
            $.ajax({
                url: edit_url,
                method: "post",
                data: {
                    '_token': token,
                    'id': id,
                },
                dataType: 'json',
                success: function(response) {
                    new Noty({
                        type: 'success',
                        layout: 'topRight',
                        text: "{{ 'This Product Successfully Promoted' }}",
                        timeout: 2000,
                        killer: true
                    }).show();
                    option.val(response['category_id'])
                },
                error: function(xhr, textStatus, errorThrown) {
                    var errors = $.parseJSON(xhr.responseText);
                    $.each(errors.errors, function(key, val) {
                        new Noty({
                            type: 'error',
                            layout: 'topRight',
                            text: val,
                            timeout: 2000,
                            killer: true
                        }).show();
                    });
                }
            });
        });
    </script>
@endpush
