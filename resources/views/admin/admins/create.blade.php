@extends('admin.layouts.master')

@push('css')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endpush

@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ __('admin.add_admin') }}</div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset('admin\assets\images\no_image.jpg') }}" alt="Admin"
                                        class="rounded-circle p-1 bg-primary" width="110" id="showImage">

                                </div>
                                <hr class="my-4" />

                            </div>
                        </div>
                    </div>
                        <form method="POST"action="{{ route('admin.store') }}" class="store form-horizontal" novalidate>
                            @csrf
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.name') }}</label>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="{{ __('admin.write_the_name') }}" required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.email') }}</label>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="{{ __('admin.enter_the_email') }}" required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}"
                                                    data-validation-email-message="{{ __('admin.email_formula_is_incorrect') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.phone') }}</label>
                                            <div class="controls">
                                                <input type="number" name="phone" class="form-control"
                                                    placeholder="{{ __('admin.enter_the_phone') }}" required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">{{ __('admin.image') }}</label>
                                            <div class="controls">
                                                <input type="file" name="image" accept="image/*" class="form-control" id="image"
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


                                    {{-- <div class="col-md-12 col-12">
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
                                    </div> --}}


                                    {{-- <div class="col-md-12 col-12">
                                        <div class="form-group">
                                          <label for="first-name-column">{{ __('admin.Validity')}}</label>
                                          <div class="controls">
                                            <select name="role_id" class="select2 form-control" required
                                                    data-validation-required-message="{{ __('admin.this_field_is_required') }}">
                                              <option value>{{  __('admin.Select_the_validity') }}</option>
                                              @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}
                                                </option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div>
                                      </div> --}}

                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1 submit_button">{{ __('admin.add') }}</button>
                                        <a href="{{ url()->previous() }}" type="reset"
                                            class="btn btn-outline-warning mr-1 mb-1">{{ __('admin.back') }}</a>
                                    </div>

                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    @include('admin.shared.submitAddForm')

    <script>
        $(document).ready(function() {
            $("#image").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#showImage").attr("src", e.target.result);
                };
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
