@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <div class="contactArea section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="contact-Wrapper">
                        <form action="{{ route('contacts.store') }}" method="post" class="form-control col-md-12"
                            id="add-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-40">
                                        <h2 class="tittle p-0">@lang('site.get_in_touch')</h2>
                                        <p>Our friendly team would love to hear from you.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="infoTitle">@lang('site.first_name')</label>
                                    <div class="input-form input-form2">
                                        <input type="text" name="first_name" placeholder="First name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="infoTitle">@lang('site.last_name')</label>
                                    <div class="input-form input-form2">
                                        <input type="text" name="last_name" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="infoTitle">@lang('site.email')</label>
                                    <div class="input-form input-form2">
                                        <input type="email" name="email" placeholder="you@company.com" required>
                                    </div>
                                </div>
                                <!-- country Number Selector -->
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <label class="infoTitle">@lang('site.phone')</label>
                                        <input id="phone" name="phone" type="number" required>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="col-lg-12">
                                    <label class="infoTitle">@lang('site.message')</label>
                                    <div class="input-form">
                                        <textarea class="form-control" name="message" rows="5" placeholder="About your project" required></textarea>
                                    </div>
                                </div>
                                <!-- user Message -->
                                <div class="col-sm-12">
                                    <label class="checkWrap2">@lang('site.agree_to_our_privcy_policy')
                                        <input class="effectBorder" name="published" type="checkbox" value="1"
                                            required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-12">
                            <div class="btn-wrapper mb-10">
                                <button type="submit" class="btn btn-primary waves-effect waves-light" form='add-form'>
                                    @lang('site.send_message')</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="contactRight-img">
                        <img src="{{ asset($auth_image->contact_us_image) }}" alt="images" class="contactImg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('body').on('submit', '#add-form', function(e) {
                    e.preventDefault();
                    var url = $(this).attr('action');
                    $.ajax({
                            url: url,
                            method: "post",
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
                                        text: "{{ 'Saved successfully' }}",
                                        timeout: 2000,
                                        killer: true
                                    }).show();

                                },
                            });
                    });
    </script>
@endpush
