@extends('admin.layouts.master')

@push('css')
    <!-- dataTables CSS -->
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- dataTables CSS -->
@endpush

@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                <h3 class="page-title"><a href="{{ url()->current() }}">{{ __('admin.admins') }}</a></h3>
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <div class="btn-group">


                        </div>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary px-5">{{ __('admin.add') }} </a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{ __('admin.image') }}</th>
                                <th>{{ __('admin.name') }}</th>
                                <th>{{ __('admin.email') }}</th>
                                <th>{{ __('admin.phone') }}</th>
                                <th>{{ __('admin.status') }}</th>
                                <th>{{ __('admin.control') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>
                                        <img src="{{ $admin->image }}" width="50px" height="50px" alt="image">
                                    </td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->phone }}</td>
                                    <td>
                                        @if ($admin->id != 1)
                                            @if ($admin->is_blocked)
                                                <span class="btn btn-sm round btn-outline-danger">
                                                    {{ __('admin.Prohibited') }} <i class="la la-close font-medium-2"></i>
                                                </span>
                                                <span class="btn btn-sm round btn-outline-success block_user"
                                                    data-id="{{ $admin->id }}">{{ __('admin.unblock') }}</span>
                                            @else
                                                <span class="btn btn-sm round btn-outline-success">
                                                    {{ __('admin.Unspoken') }} <i class="la la-check font-medium-2"></i>
                                                </span>
                                                <span class="btn btn-sm round btn-outline-danger block_user"
                                                    data-id="{{ $admin->id }}">{{ __('admin.block') }}</span>
                                            @endif
                                        @else
                                            --
                                        @endif

                                    </td>
                                    <td class="product-action">
                                        <span class="text-primary pr-1"><a
                                                href="{{ route('admin.show', ['id' => $admin->id]) }}"><i
                                                    class="fa fa-eye"></i></a></span>
                                        <span class="action-edit text-primary pr-1"><a
                                                href="{{ route('admin.edit', ['id' => $admin->id]) }}"><i
                                                    class="fa fa-edit"></i></a></span>
                                        @if ($admin->id != 1 && auth()->id() != $admin->id)
                                            <a class="text-danger" id="delete"
                                                href="{{ route('admin.delete', $admin->id) }}"><i
                                                    class="fa fa-trash-o"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr />

    </div>
@endsection

@push('js')
    <!--datatable JS-->
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>

    <!--datatable JS-->
@endpush
