@extends('frontend.layouts.master')

@section('content')
    <!-- phoneCat Listings  S t a r t -->
    <div class="featureListing section-padding2">
        <div class="container">
            <!-- Bread Crumb S t a r t -->
            <div class="row  mb-40">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">@lang('site.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.category')</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $category->title_en }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End-of Bread Crumb-->
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="singleFeature mb-24">
                            <div class="featureImg">
                                <a href="#"><img src="{{ asset($product->image) }}" style="width: 100%;height:55%"
                                        alt="images"></a>
                            </div>
                            <div class="featureCaption">
                                <h4><a href="{{ route('product.single', $product->id) }}"
                                        class="featureTittle">{{ $product->title_en }}</a></h4>
                                <p class="featureCap">Los Angels, CA · <strong
                                        class="subCap">{{ date_format($product->created_at, 'D M Y') }}</strong></p>
                                <span class="featurePricing">${{ $product->price }}</span>
                                <div class="btn-wrapper">
                                    @if ($product->condition == 0)
                                        <span class="pro-btn1">@lang('site.america')</span>
                                    @endif
                                    @if ($product->condition == 1)
                                        <span class="pro-btn1">@lang('site.asia')</span>
                                    @endif
                                    @if ($product->condition == 2)
                                        <span class="pro-btn1">@lang('site.europ')</span>
                                    @endif
                                    @if ($product->nigotiable == 1)
                                        <span class="pro-btn2">@lang('site.promoted')</span>
                                    @else
                                        <span class="pro-btn2">@lang('site.un_promoted')</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $products->links() }}
            </div>
        </div>
    </div>
    <!-- End-of phoneCat  -->
@endsection
