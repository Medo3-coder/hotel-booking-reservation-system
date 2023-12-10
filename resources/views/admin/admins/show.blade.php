@extends('admin.layouts.master')

@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ __('admin.show') }}</div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ $admin->image }}" alt="Admin" class="rounded-circle p-1 bg-primary"
                                        width="110">
                                    <div class="mt-3">
                                        <h4>{{ $admin->name }}</h4>
                                        <p class="text-secondary mb-1">{{ $admin->email }}</p>

                                    </div>
                                </div>
                                {{-- <hr class="my-4" /> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form class="store form-horizontal">
                            <div class="col-12">

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.name') }}</label>
                                            <div class="controls">
                                                <input type="text" name="name" value="{{ $admin->name }}"
                                                    class="form-control" placeholder="{{ __('admin.enter_the_name') }}"
                                                    required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.email') }}</label>
                                            <div class="controls">
                                                <input type="email" name="email" value="{{ $admin->email }}"
                                                    class="form-control" placeholder="{{ __('admin.enter_the_email') }}"
                                                    required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                    data-validation-email-message="{{ __('admin.email_formula_is_incorrect') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.phone') }}</label>
                                            <div class="controls">
                                                <input type="number" name="phone" value="{{ $admin->phone }}"
                                                    class="form-control" placeholder="{{ __('admin.enter_the_phone') }}"
                                                    required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.password') }}</label>
                                            <div class="controls">
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.status') }}</label>
                                            <div class="controls">
                                                <select name="is_blocked" class="select2 form-control" required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}">
                                                    <option value>{{ __('admin.Select_the_blocking_status') }}</option>
                                                    <option {{ $admin->is_blocked == 1 ? 'selected' : '' }} value="1">
                                                        {{ __('admin.Prohibited') }}</option>
                                                    <option {{ $admin->is_blocked == 0 ? 'selected' : '' }} value="0">
                                                        {{ __('admin.Unspoken') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12 col-12">

                                        <div class="col-12 d-flex justify-content-center mt-3">
                                            <a href="{{ url()->previous() }}" type="reset"
                                                class="btn btn-outline-warning mr-1 mb-1">{{ __('admin.back') }}</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('js')
    <script>
        $('.store input').attr('disabled', true)
        $('.store textarea').attr('disabled', true)
        $('.store select').attr('disabled', true)
    </script>
@endpush
