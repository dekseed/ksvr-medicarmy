@extends('layouts.home')
@section('styles')

<link href="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

@endsection
@section('breadcrumb')

<!--begin::Page title-->
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bolder my-1">
        <span class="text-white fs-1">ข้อมูลผู้ใช้ {{ $user->title_names->name }}{{ $user->first_name }} {{ $user->last_name }}</span>
        {{-- <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small> --}}
    </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-line fw-bold fs-7 my-1">
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ route('manage.home') }}" class="text-gray-600">หน้าแรก</a>
        </li>
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ route('user.index') }}" class="text-gray-600">ข้อมูลผู้ใช้</a>
            </li>
        <li class="breadcrumb-item text-gray-600">ข้อมูลผู้ใช้ {{ $user->title_names->name }}{{ $user->first_name }} {{ $user->last_name }}</li>

    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title=-->

@endsection
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="{{ asset('media') }}/images/avatars/{{ $user->pic }}" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $user->title_names->name }}{{ $user->first_name }} {{ $user->last_name }}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-5 fw-bold text-muted mb-6">{{ isset($user->affiliations->name) ? $user->affiliations->name : '' }}</div>
                            <!--end::Position-->
                            {{-- <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-center">
                                <!--begin::Stats-->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                    <div class="fs-4 fw-bolder text-gray-700">
                                        <span class="w-75px">6,900</span>
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="fw-bold text-muted">Earnings</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                    <div class="fs-4 fw-bolder text-gray-700">
                                        <span class="w-50px">130</span>
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="fw-bold text-muted">Tasks</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                    <div class="fs-4 fw-bolder text-gray-700">
                                        <span class="w-50px">500</span>
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <div class="fw-bold text-muted">Hours</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info--> --}}
                        </div>
                        <!--end::Summary-->
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">รายละเอียด
                            <span class="ms-2 rotate-180">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span></div>
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="เปลี่ยนรหัสผ่าน">
                                <a href="#" class="btn btn-sm btn-light-warning" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">เปลี่ยนรหัสผ่าน</a>
                            </span>
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="แก้ไขข้อมูลส่วนตัว">
                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">แก้ไข</a>
                            </span>
                        </div>
                        <!--end::Details toggle-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--begin::Details content-->
                        <div id="kt_customer_view_details" class="collapse show">
                            <div class="py-5 fs-6">
                                {{-- <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Language</div>
                                <div class="text-gray-600">English</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Upcoming Invoice</div>
                                <div class="text-gray-600">54238-8693</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Tax ID</div>
                                <div class="text-gray-600">TX-8674</div>
                                <!--begin::Details item--> --}}
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">Email</div>
                                <div class="text-gray-600">{{ $user->email }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">ตำแหน่ง</div>
                                <div class="text-gray-600">{{ $user->position }}</div>
                                <!--begin::Details item-->
                                <!--begin::Details item-->
                                <div class="fw-bolder mt-5">เบอร์โทรศัพท์</div>
                                <div class="text-gray-600">{{ $user->tel }}</div>
                                <!--begin::Details item-->

                            </div>
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">ภาพรวม</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">

                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bolder">บทบาทหน้าที่</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_role_insert">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                        </svg>
                                    </span>
                                    @if($user->roles->count() == 0)
                                     <!--end::Svg Icon-->เพิ่มข้อมูลบทบาทหน้าที่
                                     @else
                                    <!--end::Svg Icon-->แก้ไขข้อมูลบทบาทหน้าที่
                                    @endif
                                    </a>
                                </div>

                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                {{ $user->roles->count() == 0 ? 'ไม่มีข้อมูล' : '' }}
                                @foreach($user->roles as $role)
                                <div class="fw-bolder fs-2">{{$role->display_name}}
                                <span class="text-muted fs-4 fw-bold">({{$role->name}})</span>
                                <div class="fs-7 fw-normal text-muted">{{$role->description}}</div></div>
                                @endforeach

                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        {{-- <!--begin::Card-->
                        <div class="card pt-2 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Invoices</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar m-0">
                                    <!--begin::Tab nav-->
                                    <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
                                        </li>
                                    </ul>
                                    <!--end::Tab nav-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Tab Content-->
                                <div id="kt_referred_users_tab_content" class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                            <!--begin::Thead-->
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                            </thead>
                                            <!--end::Thead-->
                                            <!--begin::Tbody-->
                                            <tbody class="fs-6 fw-bold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Oct 24, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$76.00</td>
                                                    <td>
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td>Oct 08, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$5.00</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Sep 15, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>May 30, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td class="text-success">$204.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Apr 22, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td class="text-success">$31.00</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Feb 09, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td class="text-success">$52.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Jan 04, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Tbody-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_2" class="py-0 tab-pane fade" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                            <!--begin::Thead-->
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                            </thead>
                                            <!--end::Thead-->
                                            <!--begin::Tbody-->
                                            <tbody class="fs-6 fw-bold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td>
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td>May 30, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td class="text-success">$204.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Apr 22, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td class="text-success">$31.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Feb 09, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td class="text-success">$52.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Jan 04, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Oct 24, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$76.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Oct 08, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$5.00</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Sep 15, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Tbody-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_3" class="py-0 tab-pane fade" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                            <!--begin::Thead-->
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                            </thead>
                                            <!--end::Thead-->
                                            <!--begin::Tbody-->
                                            <tbody class="fs-6 fw-bold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td class="text-success">$31.00</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Feb 09, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td class="text-success">$52.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Jan 04, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$5.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Sep 15, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td>
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td>Oct 24, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$76.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Oct 08, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">523445943</a>
                                                    </td>
                                                    <td class="text-danger">$-1.30</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>May 30, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">231445943</a>
                                                    </td>
                                                    <td class="text-success">$204.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Apr 22, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Tbody-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_4" class="py-0 tab-pane fade" role="tabpanel">
                                        <!--begin::Table-->
                                        <table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
                                            <!--begin::Thead-->
                                            <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bolder">
                                                <tr class="text-start text-muted gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="min-w-100px">Amount</th>
                                                    <th class="min-w-100px">Status</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="min-w-100px text-end pe-7">Invoice</th>
                                                </tr>
                                            </thead>
                                            <!--end::Thead-->
                                            <!--begin::Tbody-->
                                            <tbody class="fs-6 fw-bold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Oct 24, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">102445788</a>
                                                    </td>
                                                    <td class="text-success">$38.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">423445721</a>
                                                    </td>
                                                    <td class="text-danger">$-2.60</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Oct 24, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">426445943</a>
                                                    </td>
                                                    <td class="text-success">$31.00</td>
                                                    <td>
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td>Feb 09, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">984445943</a>
                                                    </td>
                                                    <td class="text-success">$52.00</td>
                                                    <td>
                                                        <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>Nov 01, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">324442313</a>
                                                    </td>
                                                    <td class="text-danger">$-0.80</td>
                                                    <td>
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td>Jan 04, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$76.00</td>
                                                    <td>
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td>Oct 08, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 text-hover-primary">312445984</a>
                                                    </td>
                                                    <td class="text-success">$76.00</td>
                                                    <td>
                                                        <span class="badge badge-light-info">In progress</span>
                                                    </td>
                                                    <td>Oct 08, 2020</td>
                                                    <td class="text-end">
                                                        <button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Tbody-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card--> --}}
                    </div>
                    <!--end:::Tab pane-->

                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->

    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

@endsection
@section('modals')

@include('pages.admin.manage_users.modal.update')
@include('pages.admin.manage_users.modal.role_insert')

@endsection
@section('scripts')

<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('assets') }}/js/custom/apps/customers/view/add-payment.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/customers/view/adjust-balance.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/customers/view/invoices.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/customers/view/payment-method.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/customers/view/payment-table.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/customers/view/statement.js"></script>
{{-- <script src="{{ asset('assets') }}/js/custom/apps/customers/update.js"></script> --}}


<script>
        "use strict";
        var KTModalUpdateCustomer=function(){
            var t,e,n,o,c,r;
            return{
                init:function(){
                    t=document.querySelector("#kt_modal_update_customer"),
                    r=new bootstrap.Modal(t),
                    c=t.querySelector("#kt_modal_update_customer_form"),
                    e=c.querySelector("#kt_modal_update_customer_submit"),
                    n=c.querySelector("#kt_modal_update_customer_cancel"),
                    o=t.querySelector("#kt_modal_update_customer_close"),
                    e.addEventListener("click",
                        (function(t){
                            t.preventDefault(),
                            e.setAttribute("data-kt-indicator","on"),
                            setTimeout((function(){
                                e.removeAttribute("data-kt-indicator"),
                                document.getElementById('kt_modal_update_customer_form').submit()
                                Swal.fire({
                                    text:"Form has been successfully submitted!",
                                    icon:"success",
                                    buttonsStyling:!1,
                                    confirmButtonText:"Ok, got it!",
                                    customClass:{confirmButton:"btn btn-primary"}
                                })
                                .then((function(t){t.isConfirmed&&r.hide()}))
                            }),2e3)}
                        )
                    ),
                    n.addEventListener("click",
                        (function(t){
                            t.preventDefault(),
                            Swal.fire({
                                text:"คุณแน่ใจหรือว่าต้องการยกเลิก?",
                                icon:"warning",
                                showCancelButton:!0,
                                buttonsStyling:!1,
                                confirmButtonText:"ใช่, ฉันต้องการยกเลิก!",
                                cancelButtonText:"ไม่",
                                customClass:{confirmButton:"btn btn-primary",
                                cancelButton:"btn btn-active-light"}
                            })
                            .then((function(t){
                                t.value?(c.reset(),r.hide()):"cancel"===t.dismiss&&Swal.fire({
                                    text:"แบบฟอร์มของคุณยังไม่ถูกยกเลิก!.",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"โอเค, ฉันเข้าใจแล้ว!",
                                    customClass:{confirmButton:"btn btn-primary"}
                                })}))
                        })
                    ),
                    o.addEventListener("click",
                        (function(t){
                            t.preventDefault(),
                            Swal.fire({
                                text:"คุณแน่ใจหรือว่าต้องการยกเลิก?",
                                icon:"warning",
                                showCancelButton:!0,
                                buttonsStyling:!1,
                                confirmButtonText:"ใช่, ฉันต้องการยกเลิก!",
                                cancelButtonText:"ไม่",
                                customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                            })
                            .then((function(t){
                                t.value?(c.reset(),r.hide()):"cancel"===t.dismiss&&Swal.fire({
                                    text:"แบบฟอร์มของคุณยังไม่ถูกยกเลิก!",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"โอเค, ฉันเข้าใจแล้ว!",
                                    customClass:{confirmButton:"btn btn-primary"}})
                                }))
                            })
                    )
                }
            }
        }();

        KTUtil.onDOMContentLoaded((function(){KTModalUpdateCustomer.init()}));


        "use strict";
        var KTModalInsertRole=function(){
            var t,e,n,o,c,r;
            return{
                init:function(){
                    t=document.querySelector("#kt_modal_role_insert"),
                    r=new bootstrap.Modal(t),
                    c=t.querySelector("#kt_modal_role_insert_form"),
                    e=c.querySelector("#kt_modal_role_insert_submit"),
                    n=c.querySelector("#kt_modal_role_insert_cancel"),
                    o=t.querySelector("#kt_modal_role_insert_close"),
                    e.addEventListener("click",
                        (function(t){
                            t.preventDefault(),
                            e.setAttribute("data-kt-indicator","on"),
                            setTimeout((function(){
                                e.removeAttribute("data-kt-indicator"),
                                document.getElementById('kt_modal_role_insert_form').submit()
                                // Swal.fire({
                                //     text:"Form has been successfully submitted!",
                                //     icon:"success",
                                //     buttonsStyling:!1,
                                //     confirmButtonText:"Ok, got it!",
                                //     customClass:{confirmButton:"btn btn-primary"}
                                // })
                                .then((function(t){t.isConfirmed&&r.hide()}))
                            }),2e3)}
                        )
                    ),
                    n.addEventListener("click",
                        (function(t){
                            t.preventDefault(),
                            Swal.fire({
                                text:"คุณแน่ใจหรือว่าต้องการยกเลิก?",
                                icon:"warning",
                                showCancelButton:!0,
                                buttonsStyling:!1,
                                confirmButtonText:"ใช่, ฉันต้องการยกเลิก!",
                                cancelButtonText:"ไม่",
                                customClass:{confirmButton:"btn btn-primary",
                                cancelButton:"btn btn-active-light"}
                            })
                            .then((function(t){
                                t.value?(c.reset(),r.hide()):"cancel"===t.dismiss&&Swal.fire({
                                    text:"แบบฟอร์มของคุณยังไม่ถูกยกเลิก!.",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"โอเค, ฉันเข้าใจแล้ว!",
                                    customClass:{confirmButton:"btn btn-primary"}
                                })}))
                        })
                    ),
                    o.addEventListener("click",
                        (function(t){
                            t.preventDefault(),
                            Swal.fire({
                                text:"คุณแน่ใจหรือว่าต้องการยกเลิก?",
                                icon:"warning",
                                showCancelButton:!0,
                                buttonsStyling:!1,
                                confirmButtonText:"ใช่, ฉันต้องการยกเลิก!",
                                cancelButtonText:"ไม่",
                                customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                            })
                            .then((function(t){
                                t.value?(c.reset(),r.hide()):"cancel"===t.dismiss&&Swal.fire({
                                    text:"แบบฟอร์มของคุณยังไม่ถูกยกเลิก!",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"โอเค, ฉันเข้าใจแล้ว!",
                                    customClass:{confirmButton:"btn btn-primary"}})
                                }))
                            })
                    )
                }
            }
        }();

        KTUtil.onDOMContentLoaded((function(){KTModalInsertRole.init()}));

        @if(Session::has('error'))
                                   Swal.fire({
                                     text:"ขออภัย, ดูเหมือนว่ามีข้อผิดพลาดบางอย่างที่ตรวจพบ โปรดลองอีกครั้ง",
                                     icon:"error",buttonsStyling:!1,
                                     confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                                     customClass:{confirmButton:"btn btn-primary"}})

                @elseif(Session::has('success'))
                                Swal.fire({
                                        text:"อัปเดตข้อมูลเรียบร้อย !",
                                        icon:"success",buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    })
                @elseif(Session::has('success_role_insert'))
                                Swal.fire({
                                        text:"อัปเดตข้อมูลบทบาทหน้าที่เรียบร้อย !",
                                        icon:"success",buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    })

                @endif
</script>

<script src="{{ asset('assets') }}/js/custom/modals/new-card.js"></script>
<script src="{{ asset('assets') }}/js/custom/widgets.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('assets') }}/js/custom/modals/create-app.js"></script>
<script src="{{ asset('assets') }}/js/custom/modals/upgrade-plan.js"></script>
<!--end::Page Custom Javascript-->


@endsection

{{-- 25695 23200 0643655731 สไพ --}}
