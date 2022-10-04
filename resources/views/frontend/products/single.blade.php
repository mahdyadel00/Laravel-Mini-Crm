@extends('frontend.layouts.master')
@section('content')
    @php
        if (auth()->check()) {
            $favourite = App\Models\FavouriteProduct::with('product')
                ->where('user_id', auth()->user()->id)
                ->where('product_id', $product->id)
                ->first();
        }
    @endphp
    <!--Product Details  S t a r t-->
    <div class="proDetails section-padding2">
        <div class="container">
            <!-- Bread Crumb S t a r t -->
            <div class="row mb-40">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('site.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.category')</a></li>
                            <li class="breadcrumb-item"><a href="#">Phones</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End-of Bread Crumb-->
            <div class="row">
                <div class="col-xl-7 col-lg-12">
                    <!-- Product Slider -->
                    <div class="product-view-wrap" id="myTabContent">
                        <div class="shop-details-gallery-slider global-slick-init slider-inner-margin sliderArrow"
                            data-asNavFor=".shop-details-gallery-nav" data-infinite="true" data-arrows="false"
                            data-dots="false" data-slidesToShow="1" data-swipeToSlide="true" data-fade="true"
                            data-autoplay="true" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                            data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                            data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 1}},{"breakpoint": 1600,"settings": {"slidesToShow": 1}},{"breakpoint": 1400,"settings": {"slidesToShow": 1}},{"breakpoint": 1200,"settings": {"slidesToShow": 1}},{"breakpoint": 991,"settings": {"slidesToShow": 1}},{"breakpoint": 768, "settings": {"slidesToShow": 1}},{"breakpoint": 576, "settings": {"slidesToShow": 1}}]'>
                            <div class="single-main-image" id="main-image">
                                <a href="#" class="long-img">
                                    <img src="{{ asset($product->image) }}" class="img-fluid" alt="image"
                                        data-img="{{ asset($product->image) }}">
                                </a>
                            </div>
                        </div>
                        <!-- Nav -->
                        <div class="thumb-wrap">
                            <div class="shop-details-gallery-nav global-slick-init slider-inner-margin sliderArrow"
                                data-arrows="false" data-dots="false" data-slidesToShow="6" data-swipeToSlide="true"
                                data-autoplay="true" data-autoplaySpeed="2500"
                                data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                                data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>'
                                data-responsive='[{"breakpoint": 1800,"settings": {"slidesToShow": 6}},{"breakpoint": 1600,"settings": {"slidesToShow": 6}},{"breakpoint": 1400,"settings": {"slidesToShow": 6}},{"breakpoint": 1200,"settings": {"slidesToShow": 6}},{"breakpoint": 991,"settings": {"slidesToShow": 6}},{"breakpoint": 768, "settings": {"slidesToShow": 4}},{"breakpoint": 576, "settings": {"slidesToShow": 4}}]'>
                                @foreach($product_images as $image)
                                <div class="single-thumb" style="max-height: 84px" aria-hidden="true">
                                    <a class="thumb-link" data-toggle="tab" href="#image-02">
                                        <img style="height: 90px;" src="{{ asset($image->image) }}"
                                            alt="thumb">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- proDescription -->
                    <div class="proDescription">
                        <!-- Top -->
                        <div class="descriptionTop">
                            <h4>

                                @if (Auth::user())
                                    @if (!$favourite == null)
                                        <a href="#" data-id="{{ $product->id }}"
                                            data-url="{{ route('favorite.destroy', [$product->id]) }}"
                                            class="detailsTittle delete-product-from-favorite">{{ $product->title_en }}
                                            <i style="background:#f76631" class="las la-heart icon"></i></a>
                                        </a>
                                    @else
                                        <a href="#" data-id="{{ $product->id }}"
                                            data-url="{{ route('favorite.store', [$product->id]) }}"
                                            class="detailsTittle add-product-to-favorite">{{ $product->title_en }}
                                            <i class="lar la-heart icon"></i></a>
                                            <div class="container">
                                                <h2>Upload Image</h2><br/>
                                                <form method="post" action="{{ route('products.store_image') }}" enctype="multipart/form-data"
                                                    class="dropzone" id="dropzone">
                                                  @csrf
                                                  <input type="hidden" name='image' id='id1234' value="{{ $product->id }}">
                                              </form>
                                              </div>
                                    @endif
                                @else
                                    <a href="{{ route('login.show') }}" data-id="{{ $product->id }}"
                                        data-url="{{ route('favorite.store', [$product->id]) }}"
                                        class="detailsTittle add-product-to-favorite">{{ $product->title_en }}
                                        <i class="lar la-heart icon"></i></a>
                                @endif
                            </h4>
                            <p class="detailsCap">@lang('site.posted_on') {{ date_format($product->created_at, 'D M Y') }}</p>


                            <span class="detailsPricing">${{ $product->price }}
                                <em style="float: right">
                                    <a href="#" class="btn btn-success">Check Out</a>
                                </em></span>
                        </div>
                        <!-- Mid -->
                        <div class="descriptionMid">
                            <h4 class="priceTittle">@lang('site.description')</h4>
                            <p class="pera">{{ $product->description_en }}</p>
                        </div>
                        <!-- Footer -->
                        <div class="descriptionFooter">
                            <div class="btn-wrapper">
                                <a href="#" class="cmn-btn-outline2"><i
                                        class="lab la-font-awesome-flag icon"></i>Report</a>
                            </div>
                            <div class="socialWrap" style="display:flex">
                                <a href="#" class="whatsapp"><i class="lab la-whatsapp"></i></a>
                                <a href="#" class="telegram"><i class="lab la-telegram"></i></a>
                                <a href="#" class="snapchat"><i class="lab la-snapchat"></i></a>
                                <div class="" id="fb-share-button"
                                    data-href="{{ route('product.single', $product->id) }}">
                                    <a href="#" class="facebook"><i class="lab la-facebook-square"></i></a>
                                </div>
                                <a href="#"class="twitter"><i class="lab la-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="sellerMessage mb-24">
                        <div class="singleFlexitem mb-24">
                            <div class="recentImg">
                                <img src="{{ asset($product->user[0]->image) }}" width="50px" height="50px"
                                    alt="images">
                            </div>
                            <div class="recentCaption">
                                <h5><a href="#" class="featureTittle">{{ $product->user[0]->first_name }}
                                        {{ $product->user[0]->last_name }}<img
                                            src="{{ asset('frontend') }}/assets/img/icon/checkMark.svg" class="icon"
                                            alt="images">
                                        @if (auth()->check())
                                        <i class=" text-success fa-solid fa-circle"></i>
                                        @else
                                            <i class="btn btn-danger"></i>
                                        @endif
                                    </a>
                                </h5>
                                <p class="featureCap">@lang('site.member_since')
                                    {{ date_format($product->user[0]->created_at, 'D M Y') }}</p>
                            </div>
                        </div>
                        <form action="#" class="contactSeller">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="(704) *** ***"
                                            value="{{ $product->user[0]->phone }}" disabled>
                                        <div class="icon"><i class="las la-phone"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="btn-wrapper mb-20">
                                        <a href="#" class="cmn-btn-outline3 w-100">Reveal Contact</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="btn-wrapper">
                            <a href="#" class="cmn-btn-outline2 w-100"><i class="las la-comments icon"></i>Message
                                seller</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-of product Details-->
@endsection

@push('js')
    <div id="fb-root"></div>
    <script>
        var fbButton = document.getElementById('fb-share-button');
        var url = $(fbButton).data("href");

        fbButton.addEventListener('click', function() {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
                'facebook-share-dialog',
                'width=800,height=600'
            );
            return false;
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.whatsapp', function() {

                let full_url = $("#url").val()
                window.open(
                    'https://api.whatsapp.com/send?text={{ route('product.single', $product->id) }}',
                    '_blank');
            });
            $(document).on('click', '.twitter', function() {

                let full_url = $("#url").val()
                window.open(
                    'https://twitter.com/share?url={{ route('product.single', $product->id) }}',
                    '_blank');
            });
            $(document).on('click', '.telegram', function() {

                let full_url = $("#url").val()
                window.open(
                    'https://t.me/share/url?url=={{ route('product.single', $product->id) }}',
                    '_blank');
            });
            $(document).on('click', '.snapchat', function() {

                let full_url = $("#url").val()
                window.open(
                    'https://snapchat.com/scan?attachmentUrl=={{ route('product.single', $product->id) }}',
                    '_blank');
            });
        })
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
        $(document).on('click', '.add-product-to-favorite', function(e) {
            e.preventDefault();
            var _url = $(this).attr('data-url');
            var id = $(this).attr('data-id');
            var $this = $(this);
            $.ajax({
                url: _url,
                method: "post",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
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
        Dropzone.options.dropzone = {
            url:"{{ route('products.store_image') }}",
            maxFilesize:1,
            paramName: 'image',
            addRemoveLinks: true,
            autoProcessQueue: true,
            parallelUploads:1,
            dictRemoveFile: 'Remove file',
            params: {
                _token: '{{csrf_token()}}',
                id: $("#id1234").val(),
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function (image, response) {
                console.log(response);
            },
            error: function (image, response) {
                return false;
            }
            // removedfile: function(file) {
            //     $.ajax({
            //         type: 'POST',
            //         dataType: 'json',
            //         url: '{{route('products.store_image')}}',
            //         data: {'_token': ' {{ csrf_token() }}', id: file.id},
            //         success: function (data) {
            //             console.log('success: ' + data);
            //         }
            //     })
            //     var _ref;
            //     return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            // },
        };

    </script>
@endpush
