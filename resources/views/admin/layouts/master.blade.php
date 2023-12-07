<!doctype html>
<html lang="en">

@include('admin.layouts.partial.header')


<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('admin.layouts.partial.sidebar')

        @include('admin.layouts.partial.navbar')

        <div class="page-wrapper">
            @yield('admin')
        </div>

        @include('admin.layouts.partial.footer')

    </div>
    <!--end wrapper-->




</body>

</html>
