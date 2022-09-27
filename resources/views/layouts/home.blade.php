<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head><base href="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'โรงพยาบาลค่ายกฤษณ์สีวะรา') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets') }}/media/logos/favicon.ico" />

    <!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->

	<!--begin::Page Vendor Stylesheets(used by this page)-->
    @yield('styles')
	<!--end::Page Vendor Stylesheets-->

	<link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                    <a href="{{ route('home') }}">
                        <img alt="Logo" src="{{ asset('assets') }}/media/logos/logo-demo9.png" class="h-60px" />
                    </a>
                </div>

                @include('_includes.menu.nav.menu_home')

                @include('_includes.menu.footer_home')

            </div>

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include('_includes.header.header_mobile_tabile')

                @include('_includes.header.header_home')

                @yield('content')

                @include('_includes.footer.footer_home')

            </div>
        </div>
    </div>

    @yield('modals')

	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>

    <script>var hostUrl = "{{ asset('assets') }}/";</script>

	<script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
	<script src="{{ asset('assets') }}/js/scripts.bundle.js"></script>

    @yield('scripts')

</body>
</html>
