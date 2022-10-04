@extends('frontend.layouts.master')

@section('content')
    <!-- Product Categories s t a r t -->
    <div class="section-padding2 plr">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-9 col-xl-9  col-lg-8 col-md-7">
                    <div class="viewItems">
                        <div class="row">
                            <div class="col-lg-7">
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
                                    </div>
                                    <!-- Custom Tab -->
                                    <div class="view">
                                        <button class="customTab active" data-toggle-target=".customTab-content-1"><i
                                                class="las la-th-large"></i></button>
                                        <button class="customTab" data-toggle-target=".customTab-content-2"><i
                                                class="las la-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid View -->
                    <div class="gridView customTab-content customTab-content-1 active">
                        <div class="row ">
                            @foreach ($products as $product)
                                <div class="col-xl-4  col-lg-6  col-md-12 col-sm-6">
                                    <div class="singleFeature mb-24">
                                        <div class="featureImg">
                                            <a href="{{ route('product.single', $product->id) }}"><img
                                                    src="{{ asset($product->image) }}" style="width:100%;height:55%"
                                                    alt="images"></a>
                                        </div>
                                        <div class="featureCaption">
                                            <h4><a href="{{ route('product.single', $product->id) }}"
                                                    class="featureTittle">{{ $product->title_en }}</a></h4>
                                            <p class="featureCap">Los Angels, CA · <strong
                                                    class="subCap">{{ date_format($product->created_at, 'D M Y') }}</strong>
                                            </p>
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
            </div>
        </div>
    </div>
    <!-- End-of Categories -->
@endsection
{{-- @push('js')
    <script>
        $('body').on('submit', '#search', function(e) {
            e.preventDefault();
            let form = $(this);
            let url = $(this).attr('action');
            let lang = $(this).data('langcode');
            $.ajax({
                url: url,
                method: "get",
                data: new FormData(this),
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 'success') {

                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            text: "{{ 'Saved Successfully' }}",
                            timeout: 2000,
                            killer: true
                        }).show();
                        CKEDITOR.instances.textarea1.setData('');
                        CKEDITOR.instances.textarea2.setData('');
                        form[0].reset();
                        $('#profile-tab-' + lang).trigger('click');
                    }
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
@endpush --}}
