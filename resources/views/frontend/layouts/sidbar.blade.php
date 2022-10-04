<div class="sliderArea plr ">
    <div class="slider-active">
        <div class="single-slider heroPadding d-flex align-items-center">
            <div class="container-fluid ">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-7 ">
                        <div class="heroCaption">

                            <h1 class="tittle" data-animation="fadeInUp" data-delay="0.1s"><span
                                    class="tittleBg"></span><span
                                    class="lineBrack">{{ $slider ? $slider->title_en : '' }}</span></h1>
                            <p class="pera" data-animation="fadeInUp" data-delay="0.3s">
                                {{ $slider ? $slider->description_en : '' }}</p>
                        </div>
                        <!-- form -->
                        <form action="{{ route('search_category') }}" method="get" class="search-box">
                            @csrf
                            <div class="select-form" data-animation="fadeInLeft" data-delay="0.4s">
                                <div class="select-itms">
                                    <select name="category_id" id="category" class="niceSelect">
                                        <option value="0">@lang('site.select_category')</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title_en }}</option>
                                        @endforeach
                                    </select>
                                    <i class="las la-map-marker-alt  icon"></i>
                                </div>
                            </div>
                            <!-- Show  -->
                            <div class="searchBox-wrapper">
                                <div class="input-form" data-animation="fadeInRight" data-delay="0.4s">
                                    <input type="text" name="search" class="input keyup-input"
                                        placeholder="Search...">
                                </div>

                            </div>

                            <div class="search-form" data-animation="bounceIn" data-delay="0.4s">
                                <button type="submit" class="search-Btn"><i class="las la-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="hero-man d-none d-lg-block f-right">
                            <img src="{{ asset($slider ? $slider->image : '') }}" alt="images" class="tilt-effect  "
                                data-animation="fadeInRight" data-delay="0.2s">
                            <!-- Shape 01-->

                            <div class=" shapeHero shapeHero1" data-animation="fadeInLeft" data-delay="0.8s">
                                <img src="{{ asset($slider_left ? $slider_left->image : '') }} "
                                    style=" max-width: 20%;height: auto;" alt="images" class="bouncingAnimation">
                            </div>
                            <!-- Shape 02-->
                            <div class=" shapeHero shapeHero2" data-animation="fadeInDown" data-delay="0.6s">
                                <img src="{{ asset($slider_top ? $slider_top->image : '') }} " style="width: 220px"
                                    alt="images" class="routedOne">
                            </div>
                            <!-- Shape 03-->
                            <div class=" shapeHero shapeHero3" data-animation="fadeInRight" data-delay="0.5s">
                                <img src="{{ asset($slider_right ? $slider_right->image : '') }} " style="width:120px"
                                    alt="images" class="bounce-animate">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
            </div>
        </div>
    </div>
</div>
{{-- @push('js')
    <script>
        $(document).on('change', '#category', function() {
            let edit_url = '{{ route('search_category') }}';
            let category = $(this).val();
            let token = '{{ csrf_token() }}';
            $.ajax({
                url: edit_url,
                method: "get",
                data: {
                    '_token': token,
                    'category': category
                },
                dataType: 'json',
                success: function(response) {
                    new Noty({
                        type: 'success',
                        layout: 'topRight',
                        text: "{{ 'Saved Successfully' }}",
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
@endpush --}}
