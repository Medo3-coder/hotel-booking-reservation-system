@extends('site.layouts.master')
@push('css')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endpush

@section('title', 'Register')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg10">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">{{ __('site.home') }}</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>{{ __('site.signup') }}</li>
                </ul>
                <h3>{{ __('site.signup') }}</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Sign Up Area -->
    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                <span class="sp-color"> {{ __('site.signup') }}</span>
                                <h2>{{ __('site.create_account') }}</h2>
                            </div>
                            <form action="{{ route('siteRegister') }}" method="POST" class="store">
                                @csrf
                                <div class="row" novalidate>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="name">{{ __('site.name') }}</label>
                                            <input type="text" name="name" id="name" class="form-control"

                                                data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                placeholder="name">
                                        </div>
                                    </div>


                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="phone">{{ __('site.phone2') }}</label>
                                            <input type="text" name="phone" id="phone" class="form-control"

                                                data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                placeholder="phone">
                                        </div>
                                    </div>


                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="address">{{ __('site.address') }}</label>
                                            <input type="text" name="address" id="address" class="form-control"

                                                data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                placeholder="address">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="password-confirm">{{ __('site.email') }}</label>

                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control"

                                                data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password-confirm">{{ __('site.password') }}</label>

                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password"
                                                data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                placeholder="Password">
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label for="password-confirm">{{ __('site.confirm_password2') }}</label>
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password_confirmation"
                                                data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit"
                                            class="default-btn btn-bg-three border-radius-5">{{ __('admin.add') }}</button>
                                    </div>

                                    <div class="col-12">
                                        <p class="account-desc">
                                            {{ __('site.have_account') }}
                                            <a href="{{ route('showLogin') }}"> {{ __('site.Sign_In') }}</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Area End -->

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    @include('site.shared.submitAddForm')
@endpush
