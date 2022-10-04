@extends('frontend.layouts.master')

@section('content')
    <!--My Account  S t a r t-->
    <div class="myAccout section-padding">
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
                                    <li class="breadcrumb-item"><a href="index.html">@lang('site.home')</a></li>
                                    <li class="breadcrumb-item"><a href="#">@lang('site.promoted_ad_list')</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /END-->
                    {{-- <div class="small-tittle mb-30">
                        <h3>Currently promoting ads</h3>
                        <p>Your currently promoted ads are shown here.</p>
                    </div> --}}
                    <!-- CurrentlyAds -->
                    {{-- <div class="currentlyAds">
                        <!-- Single -->
                        <div class="singleAds mb-24  wow fadeInUp social" data-wow-delay="0.1s">
                            <div class="adsCap">
                                <div class="adsImg">
                                    <img src="{{ asset('frontend') }}/assets/img/gallery/currentlyPromoting1.jpg"
                                        alt="images">
                                </div>
                                <div class="adsCaption">
                                    <div class="cap">
                                        <h5><a href="add_details.html" class="adsTittle">Luxury couple apartment</a></h5>
                                        <p class="adsPera">Dallas, Texas · <strong class="subCap">24hrs ago</strong></p>
                                        <div class="adsPricingWrapper">
                                            <span class="adsPricing">$124.80</span>
                                            <div class="adsDate">
                                                <span class="pera">Ends at</span>
                                                <span class="adsDateTime">15 Mar 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ads ON-OFF -->
                            <div class="ad-ON-OFF mb-10">
                                <ul class="tg-list">
                                    <li class="tg-list-item">
                                        <input class="tgl tgl-ios" id="cb2" type="checkbox" />
                                        <label class="tgl-btn" for="cb2"></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END -->
                    <div class="small-tittle mb-30">
                        <h3>Promote Ads</h3>
                        <p>Choose ads from below to promote</p>
                    </div>
                    <!-- promoteAds -->
                    <div class="promoteAds">
                        <!-- Single -->
                        @foreach ($products as $product)
                            <div class="singlePromoteAds mb-24  wow fadeInUp social" data-wow-delay="0.0s">
                                <div class="adsCap">
                                    <div class="adsImg">
                                        <img src="{{ asset($product->image) }}" alt="images" style="width: 70px">
                                    </div>
                                    <div class="adsCaption">
                                        <h5><a href="{{ route('product.single', $product->id) }}"
                                                class="adsTittle">{{ $product->title_en }}</a></h5>
                                        <p class="adsPera">@lang('site.posted_on') <strong
                                                class="subCap">{{ date_format($product->user[0]->created_at, 'D M Y') }}</strong>
                                        </p>
                                        <span class="adsPricing">${{ $product->price }}</span>
                                    </div>
                                </div>
                                <div class="btn-wrapper mb-20">
                                    <a href="#" id="ad-promoted" style="color:#fff"
                                        data-id={{ $product->id }} class="btn btn-danger">@lang('site.remove_Promote_this_ad')</a>
                                </div>
                            </div>
                        @endforeach
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
        $(document).on('click', '#ad-promoted', function() {
            let edit_url = '{{ route('products.remove_promoted') }}';
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
                        text: "{{ 'This Product Successfully removed Promoted' }}",
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
