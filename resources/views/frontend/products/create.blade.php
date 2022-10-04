@extends('frontend.layouts.master')
@section('content')
    <!--addList-Details S t a r t-->
    <div class="addList-Details section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <!-- Bread Crumb S t a r t -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">@lang('site.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.properties')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.post_ad')</a></li>
                        </ol>
                        <h4 class="priceTittle pt-20 pb-20">@lang('site.post_your_ad')</h4>
                    </nav>
                    <!-- /END-->
                    <div class="listingDetails-Wrapper">
                        <div class="listingDetails">
                            <form action="{{ route('product.store') }}" id="add-form" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="select-itms">
                                            <label class="infoTitle">@lang('site.item_category')</label>
                                            <select name="category_id" class="niceSelect">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title_en }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <!-- condition -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="condition">
                                            <h6 class="infoTitle">@lang('site.server')</h6>
                                            <div class="cs_radio_btn">
                                                <div class="radio">
                                                    <input id="radio-1" name="condition" type="radio" tabindex="0"
                                                        value="0">
                                                    <label for="radio-1" class="radio-label">@lang('site.america')</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-2" name="condition" type="radio" tabindex="0"
                                                        value="1">
                                                    <label for="radio-2" class="radio-label">@lang('site.asia')</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-3" name="condition" type="radio" tabindex="0"
                                                        value="2">
                                                    <label for="radio-3" class="radio-label">@lang('site.europ')</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- condition -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="condition">
                                            <h6 class="infoTitle">@lang('site.authanticate')</h6>
                                            <div class="cs_radio_btn">
                                                <div class="radio">
                                                    <input id="radio-3" name="authanticate" type="radio" tabindex="0"
                                                        value="0">
                                                    <label for="radio-3" class="radio-label">Pre-Loved</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-4" name="authanticate" type="radio" tabindex="0"
                                                        value="1">
                                                    <label for="radio-4" class="radio-label">New</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Title en-->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.title_en')</label>
                                        <div class="input-form input-form2">
                                            <input type="text" name="title_en" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.title_ar')</label>
                                        <div class="input-form input-form2">
                                            <input type="text" name="title_ar" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Description En -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.description_en')</label>
                                        <div class="input-form">
                                            <textarea name="description_en" id="message" placeholder="About your project"></textarea>
                                        </div>
                                    </div>
                                    <!-- Description En -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.description_ar')</label>
                                        <div class="input-form">
                                            <textarea name="description_ar" id="message" placeholder="About your project"></textarea>
                                        </div>
                                    </div>
                                    <!-- Price -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.price')</label>
                                        <div class="input-form">
                                            <input type="number" name="price">
                                            <div class="icon"><i class="las la-calendar-week"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.image')</label>
                                        <div class="input-form">
                                            <input type="file" class="form-control modal-title" name='image'
                                                accept="image/jpeg,image/jpg,image/png">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        {{-- *********   image dropzone ********************* --}}
                                        {{-- <div enctype="multipart/form-data"
                                            class="dropzone" id="frmTarget">
                                            @csrf
                                            <input type="hidden" name='image' id='id1234' value=""> --}}
                                    </div>
                                        <div class="row ads_image_preview">
                                        </div>
                                    </div>
                                    <!-- user Message -->
                                    <div class="col-sm-12">
                                        <label class="checkWrap2">@lang('site.negotiable')
                                            <input class="effectBorder" name="nigotiable" type="checkbox"
                                                value="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                            <div class="col-sm-12">
                                <div class="btn-wrapper mb-10">
                                    <button form="add-form" type="submit"
                                        class="cmn-btn4 w-100">@lang('site.continue')</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of addList-Details -->
@endsection
{{-- @push('js')
    <script>
    Dropzone.options.frmTarget = {
            url:"{{ route('products.store_image') }}",
            maxFilesize:1,
            paramName: 'file',
            addRemoveLinks: true,
            autoProcessQueue: true,
            parallelUploads:1,
            dictRemoveFile: 'Remove file',
            params: {
                _token: '{{csrf_token()}}',
                id: $("#id1234").val(),
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function (file, response) {
                file.id = response.id;
                console.log(response);
            },
            removedfile: function(file) {
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '{{route('products.store_image')}}',
                    data: {'_token': ' {{ csrf_token() }}', id: file.id},
                    success: function (data) {
                        console.log('success: ' + data);
                    }
                })
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
        };

    </script>
@endpush --}}
