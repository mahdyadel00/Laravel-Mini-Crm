<div class="ourServices  plr">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10">
                <div class="section-tittle text-center mb-50">
                    <h2 class="tittle  "><span class="shape"></span>@lang('site.explore_categories')</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="listing">
                    @foreach ($categories as $category)
                        <li class="singleServices wow fadeInUp" data-wow-delay="0.1s">
                            <div class="serviceIcon">
                                <img src="{{ asset($category->image) }}" alt="images">
                            </div>
                            <div class="serviceCap">
                                <h4><a href="{{ route('single_category', $category->id) }}"
                                        class="title">{{ $category->title_en }}</a></h4>
                                <p class="info">
                                    {{ $category->products->count() }}

                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
