<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">

        <title>MMPR Dashboard</title>

        <livewire:styles>
        @stack('css')
        @include('admin.layouts.css')
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
        data-menu="vertical-menu-modern" data-col="2-columns">
        <!-- navbar-->
        @include('admin.layouts.navbar')

        {{-- slide bar menu --}}
        @include('admin.layouts.sidebar')

        {{-- contents --}}
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-body">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('admin.layouts.footer')
        @include('admin.layouts.js')
        @include('admin.layouts.toaster')
        @stack('js')
    </body>

</html>