<!--begin::Header-->
<div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
    <!--begin::Container-->
    <div class="header-container container-xxl">
        @yield('breadcrumb')
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center flex-wrap">

            <!--begin::Search-->
            @include('_includes.wrapper.search')
            <!--end::Search-->

            <!--begin::Action-->
            <div class="d-flex align-items-center py-3 py-lg-0">

                <!--begin::Notifications-->
                @include('_includes.wrapper.notifications')
                <!--end::Notifications-->

                <!--begin::Profile-->
                @include('_includes.wrapper.profile')
                 <!--end::Profile-->


            </div>
            <!--end::Action-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
    <div class="header-offset"></div>
</div>
<!--end::Header-->
