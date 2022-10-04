<section class="aboutArea section-padding2 plr sectionBg1">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            @foreach ($banners as $banner)

            <div class="col-xxl-5 col-xl-7 col-lg-6">
                <div class="about-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-40">
                        <h2 class="tittle wow fadeInUp" data-wow-delay="0.1s">{{ $banner->title_en }}</h2>
                        <p  class="wow fadeInUp" data-wow-delay="0.2s">{{ $banner->description_en }}</p>
                    </div>
                    <div class="btn-wrapper">
                        <a href="{{ route('product.create') }}" class="cmn-btn2 mr-15 mb-10 wow fadeInLeft" data-wow-delay="0.3s">@lang('site.post_your_ad')</a>
                        <a href="ad_lists_category.html" class="cmn-btn3 mb-10 wow fadeInRight" data-wow-delay="0.3s">Browse ads</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5 col-lg-6 col-md-11">
                <!-- about-img -->
                <div class="aboutImg tilt-effect wow fadeInRight" data-wow-delay="0.1s">
                    <img src="{{ asset($banner->image) }}" alt="images" class="bouncingAnimation ">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
