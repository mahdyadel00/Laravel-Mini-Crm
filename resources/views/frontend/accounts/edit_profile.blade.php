@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <div class="contactArea section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="contact-Wrapper">
                        <form action="{{ route('profile.update', auth()->user()->id) }}" method="post" class="form-control col-md-12"
                            id="add-form" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-40">
                                        <h2 class="tittle p-0">Get in touch</h2>
                                        <p>Our friendly team would love to hear from you.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="infoTitle">@lang('site.first_name')</label>
                                    <div class="input-form input-form2">
                                        <input type="text" name="first_name" placeholder="First name"
                                            value="{{ auth()->user()->first_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="infoTitle">@lang('site.last_name')</label>
                                    <div class="input-form input-form2">
                                        <input type="text" name="last_name" placeholder="Last name"
                                            value="{{ auth()->user()->last_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="infoTitle">@lang('site.email')</label>
                                    <div class="input-form input-form2">
                                        <input type="email" name="email" placeholder="you@company.com"
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <!-- country Number Selector -->
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <label class="infoTitle">@lang('site.phone')</label>
                                        <input id="phone" name="phone" type="number" value="{{ auth()->user()->phone }}">
                                    </div>
                                </div>

                                <!-- country Number Selector -->
                                {{-- <div class="col-lg-12">
                                    <div class="input-form">
                                        <label class="infoTitle">@lang('site.country')</label>
                                        <select name="country_id" id="country_id" class="form-control">
                                            <option value="0">@lang('site.select_country')</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    @if ($user->country_id == $country->id) selected @endif>
                                                    {{ $country->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                <br>
                                <!-- user Message -->
                                <div class="col-sm-12">
                                    <div class="input-form">
                                        <label class="checkWrap2">@lang('site.image')</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-12">
                            <div class="btn-wrapper mb-10">
                                <button type="submit" form="add-form" class="cmn-btn4 w-100">@lang('site.edit')</button>
                                {{-- <button type="submit" class="btn btn-primary waves-effect waves-light" form='add-form'>Send
                                    Message</button> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="contactRight-img">
                        <img src="{{ asset(auth()->user()->image) }}" width="100px" height="100px" alt="images" class="contactImg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
