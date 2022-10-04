{{--  --}}
@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <main>
        <!-- Modal -->
        <div class="body-overlay-desktop"></div>
        {{-- <div class="modal-wrapper text-center">
            <div class="close-icon">
                <i class="las la-times"></i>
            </div>
            <h2 class="modialTittle">Post Your <span>Ad</span> ?</h2>

                <div class="btn-wrapper">
                    <a href="{{ route('product.create') }}" class="cmn-btn02">Yes , Post ad</a>
                </div>

        </div> --}}

        <!-- Hero Area S t a r t -->
        @include('frontend.layouts.sidbar')
        <!-- End-of Hero  -->
        <!-- Services Area  S t a r t-->
        @include('frontend.layouts.services')
        <!-- End-of Services -->
        <!-- Featured Listings  S t a r t -->
        @include('frontend.layouts.featured')
        <!-- End-of Featured  -->
        <!-- About  S t a r t-->
        @include('frontend.layouts.aboutarea')
        <!-- End-of About  -->
        <!-- Recent Listings S t a r t -->
        @include('frontend.layouts.recent_listings')
        <!-- End-of Recent Listings -->
        <!-- Pricing Card S t a r t -->
        @include('frontend.layouts.price_card')
        <!-- End-of Pricing -->
        <!-- Testimonial S t a r t -->
        @include('frontend.layouts.testmonial')
        <!-- End-of Testimonial  -->
    </main>
@endsection
