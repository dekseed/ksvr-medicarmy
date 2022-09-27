@extends('layouts.home')
@section('styles')

<link href="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

@endsection
@section('breadcrumb')

<!--begin::Page title-->
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bolder my-1">
        <span class="text-white fs-1">ข้อมูลผู้ใช้</span>
        {{-- <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small> --}}
    </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-line fw-bold fs-7 my-1">
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ route('manage.dashboard') }}" class="text-gray-600">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-gray-600">ข้อมูลผู้ใช้</li>
        <li class="breadcrumb-item text-gray-400">รายการ</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title=-->

@endsection
@section('content')

<div  class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="ค้นหา.." />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                        <!--begin::Filter-->
                        {{-- <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fs-5 fw-bold mb-3">Month:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
                                        <option></option>
                                        <option value="aug">August</option>
                                        <option value="sep">September</option>
                                        <option value="oct">October</option>
                                        <option value="nov">November</option>
                                        <option value="dec">December</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fs-5 fw-bold mb-3">Payment Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="payment_type">
                                        <!--begin::Option-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                            <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked" />
                                            <span class="form-check-label text-gray-600">All</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                            <input class="form-check-input" type="radio" name="payment_type" value="visa" />
                                            <span class="form-check-label text-gray-600">Visa</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                            <input class="form-check-input" type="radio" name="payment_type" value="mastercard" />
                                            <span class="form-check-label text-gray-600">Mastercard</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="payment_type" value="american_express" />
                                            <span class="form-check-label text-gray-600">American Express</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                        <!--begin::Export-->
                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
                                <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
                                <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Export</button>
                        <!--end::Export--> --}}
                        <!--begin::Add user-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">เพิ่มข้อมูลผู้ใช้</button>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                        <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count"></span>เลือก</div>
                        <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">ลบที่เลือกไว้</button>
                    </div>
                    <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                </div>
                            </th>
                            <th class="min-w-125px">ยศ ชื่อ - นามสกุล</th>
                            <th class="min-w-125px">Email</th>
                            <th class="min-w-20px">หน่วย/สังกัด</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th class="text-end min-w-70px">ตัวเลือก</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        @foreach($users as $item)
                        @if($item->id == '3')
                        @else
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="{{ $item->id }}" />
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('user.show', $item->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ $item->title_names->name }}{{ $item->first_name }} {{ $item->last_name }}</a>
                            </td>
                            <td>{{ $item->email }}</td>
                            <td>{{ isset($item->affiliations->name) ? $item->affiliations->name : '' }}</td>
                            <td>{{ $item->tel }}</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">ตัวเลือก
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('user.show', $item->id) }}" class="menu-link px-3">ดูข้อมูล</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">ลบข้อมูล</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modals-->
        <!--begin::Modal - Customers - Add-->
        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('user.store') }}" id="kt_modal_add_user_form" method="POST">
                        {{method_field('POST')}}
                        {{csrf_field()}}

                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_user_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">เพิ่มข้อมูลผู้ใช้</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_modal_add_user_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                 <!--begin::Input group-->
                                 <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">ยศ/คำนำหน้า</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="titleName_id" aria-label="เลือก ยศ/คำนำหน้า" data-control="select2" data-placeholder="ยศ/คำนำหน้า" data-dropdown-parent="#kt_modal_add_user" class="form-select form-select-solid fw-bolder">
                                        <option value="">เลือก</option>
                                        @foreach($titleName_id as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">ชื่อ</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="ชื่อหน้า" name="first_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">นามสกุล</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="นามสกุล" name="last_name" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 mb-2">ตำแหน่ง</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="ตำแหน่ง" name="position" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
										<span class="required">เบอร์โทรศัพท์</span>
									    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="รูปแบบ 0123456789"></i>
									</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" class="form-control form-control-solid" placeholder="เบอร์โทรศัพท์" name="tel" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">หน่วย/สังกัด</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="affiliation_id" aria-label="เลือก หน่วย" data-control="select2" data-placeholder="หน่วย/สังกัด" data-dropdown-parent="#kt_modal_add_user" class="form-select form-select-solid fw-bolder">
                                        <option value="">เลือก</option>
                                        @foreach($affiliation_id as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
								<div class="fv-row mb-7">
								    <!--begin::Label-->
									<label class="fs-6 fw-bold mb-2">
										<span class="required">Email</span>
									    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="ขอให้เป็นอีเมล์ที่ใช้งานปัจจุบัน"></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="email" class="form-control form-control-solid" placeholder="" name="email" />
									<!--end::Input-->
								</div>
							    <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">รหัสผ่าน</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="รหัสผ่านต้องมีตัวอักษรหรือตัวเลขมากว่า 6 ตัวขึ้นไป"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="password" class="form-control form-control-solid" placeholder="" name="password" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">ยืนยันรหัสผ่าน</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="password" class="form-control form-control-solid" placeholder="" name="confirm-password" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_add_user_cancel" class="btn btn-light me-3">ยกเลิก</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_add_user_submit" class="btn btn-primary">
                                <span class="indicator-label">เพิ่มข้อมูล</span>
                                <span class="indicator-progress">กรุณารอสักครู่...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Modal - Customers - Add-->

        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>

@endsection
@section('scripts')

<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('assets') }}/js/custom/apps/customers/list/export.js"></script>
<script>
    "use strict";
    var KTModalCustomerAdd=function(){
        var t,e,o,n,r,i;
        return{
            init:function(){
                i=new bootstrap.Modal(document.querySelector("#kt_modal_add_user")),
                r=document.querySelector("#kt_modal_add_user_form"),
                t=r.querySelector("#kt_modal_add_user_submit"),
                e=r.querySelector("#kt_modal_add_user_cancel"),
                o=r.querySelector("#kt_modal_add_user_close"),
                n=FormValidation.formValidation(
                    r,{fields:{
                        titleName_id:{validators:{notEmpty:{message:"กรุณาเลือก ยศ/คำนำหน้า ให้เรียบร้อย"}}},
                        first_name:{validators:{notEmpty:{message:"กรุณากรอก ชื่อ ให้เรียบร้อย"}}},
                        last_name:{validators:{notEmpty:{message:"กรุณากรอก นามสกุล ให้เรียบร้อย"}}},
                        email:{validators:{notEmpty:{message:"กรุณากรอกอีเมล์ให้เรียบร้อย"}}},
                        password:{validators:{notEmpty:{message:"กรุณากรอก รหัสผ่าน ให้เรียบร้อย"},
                        }},
                        "confirm-password":{validators:{notEmpty:{message:"กรุณากรอก ยืนยันรหัสผ่าน ให้เรียบร้อย"},
                        identical:{compare:function(){
                            return r.querySelector('[name="password"]').value
                        },message:"รหัสผ่านและการยืนยันไม่เหมือนกัน"}}},


                        affiliation_id:{validators:{notEmpty:{message:"กรุณาเลือก หน่วย/สังกัด ให้เรียบร้อย"}}},
                        tel:{validators:{notEmpty:{message:"กรุณากรอก เบอร์โทรศัพท์ ให้เรียบร้อย"}}},

                    },
                        plugins:{trigger:new FormValidation.plugins.Trigger,
                                bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}
                        }),
                t.addEventListener("click",(function(e){
                                e.preventDefault(),
                                n&&n.validate()
                                .then((function(e){
                                    console.log("validated!")
                                    ,"Valid"==e?(t.setAttribute("data-kt-indicator","on"),
                                    t.disabled=!0,
                                    setTimeout((function(){
                                        t.removeAttribute("data-kt-indicator"),
                                        document.getElementById('kt_modal_add_user_form').submit()
                                        // Swal.fire({
                                        //     text:"Form has been successfully submitted!",
                                        //     icon:"success",buttonsStyling:!1,
                                        //     confirmButtonText:"Ok, got it!",
                                        //     customClass:{confirmButton:"btn btn-primary"}
                                        // })

                                    // .then((function(e){
                                    //     e.isConfirmed&&(
                                    //         i.hide(),
                                    //         t.disabled=!1,
                                    //         window.location=r.getAttribute("data-kt-redirect"))
                                    //     }))
                                    }),2e3)):Swal.fire({
                                        text:"ขออภัย, ดูเหมือนว่าจะมีการตรวจพบข้อผิดพลาด โปรดลองอีกครั้ง",
                                        icon:"error",
                                        buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}})
                                    }))}
                                    )),
                                e.addEventListener("click",(function(t){
                                    t.preventDefault(),
                                    Swal.fire({
                                        text:"คุณแน่ใจหรือว่าต้องการยกเลิก?",
                                        icon:"warning",
                                        showCancelButton:!0,
                                        buttonsStyling:!1,
                                        confirmButtonText:"ใช่, ฉันต้องการยกเลิก!",
                                        cancelButtonText:"ไม่",
                                        customClass:{confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                                    }).then((function(t){
                                        t.value?(r.reset(),i.hide()):"cancel"===t.dismiss&&Swal.fire({
                                            text:"แบบฟอร์มของคุณยังไม่ถูกยกเลิก!.",
                                            icon:"error",buttonsStyling:!1,
                                            confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                            customClass:{confirmButton:"btn btn-primary"}})
                                        }))
                                    })),
                                    o.addEventListener("click",(function(t){
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
                                        .then((function(t){t.value?(r.reset(),i.hide()):"cancel"===t.dismiss&&Swal.fire({
                                            text:"แบบฟอร์มของคุณยังไม่ถูกยกเลิก!.",
                                            icon:"error",buttonsStyling:!1,
                                            confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                            customClass:{confirmButton:"btn btn-primary"}})
                                        }))
                                    }))
                                }
                }
    }();

    KTUtil.onDOMContentLoaded((function(){KTModalCustomerAdd.init()}));


        "use strict";
        var KTCustomerList=function(){
            var t,e,o,n,c=()=>{
                n.querySelectorAll('[data-kt-customer-table-filter="delete_row"]')
                .forEach((e=>{
                    e.addEventListener("click",
                    (function(e){
                        e.preventDefault();
                        const o=e.target.closest("tr"),
                        n=o.querySelectorAll("td")[1].innerText;
                        Swal.fire({
                            text:"Are you sure you want to delete "+n+"?",
                            icon:"warning",showCancelButton:!0,
                            buttonsStyling:!1,
                            confirmButtonText:"Yes, delete!",
                            cancelButtonText:"No, cancel",
                            customClass:{confirmButton:"btn fw-bold btn-danger",cancelButton:"btn fw-bold btn-active-light-primary"}
                        })
                        .then((function(e){
                            e.value?Swal.fire({
                                text:"You have deleted "+n+"!.",
                                icon:"success",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, got it!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}
                            })
                            .then((function(){
                                t.row($(o)).remove().draw()}
                                )):"cancel"===e.dismiss&&Swal.fire({
                                    text:n+" was not deleted.",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"Ok, got it!",
                                    customClass:{confirmButton:"btn fw-bold btn-primary"}})
                        }))
                    }))
                }))
            },
            r=()=>{const e=n.querySelectorAll('[type="checkbox"]'),
            o=document.querySelector('[data-kt-customer-table-select="delete_selected"]');
            e.forEach((t=>{
                t.addEventListener("click",
                    (function(){
                        setTimeout((function(){l()}),50)})
                )
            })),
            o.addEventListener("click",
                (function(){
                    Swal.fire({
                        text:"Are you sure you want to delete selected customers?",
                        icon:"warning",
                        showCancelButton:!0,
                        buttonsStyling:!1,
                        confirmButtonText:"Yes, delete!",
                        cancelButtonText:"No, cancel",
                        customClass:{confirmButton:"btn fw-bold btn-danger",cancelButton:"btn fw-bold btn-active-light-primary"}
                    }).then((function(o){o.value?Swal.fire({
                        text:"You have deleted all selected customers!.",
                        icon:"success",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, got it!",
                        customClass:{confirmButton:"btn fw-bold btn-primary"}})
                        .then((function(){
                            e.forEach((e=>{e.checked&&t.row($(e.closest("tbody tr"))).remove().draw()}));
                            n.querySelectorAll('[type="checkbox"]')[0].checked=!1})):"cancel"===o.dismiss&&Swal.fire({
                                text:"Selected customers was not deleted.",
                                icon:"error",
                                buttonsStyling:!1,
                                confirmButtonText:"Ok, got it!",
                                customClass:{confirmButton:"btn fw-bold btn-primary"}})
                    }))
                })
            )};


        }();

        KTUtil.onDOMContentLoaded((function(){KTCustomerList.init()}));

                @if(Session::has('error'))
                                   Swal.fire({
                                     text:"ขออภัย, ดูเหมือนว่ามีข้อผิดพลาดบางอย่างที่ตรวจพบ โปรดลองอีกครั้ง",
                                     icon:"error",buttonsStyling:!1,
                                     confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                                     customClass:{confirmButton:"btn btn-primary"}})

                @elseif(Session::has('success'))
                                Swal.fire({
                                        text:"เพิ่มข้อมูลเรียบร้อย !",
                                        icon:"success",buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    })
                @endif
 </script>
<script src="{{ asset('assets') }}/js/custom/widgets.js"></script>
<script src="{{ asset('assets') }}/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('assets') }}/js/custom/modals/create-app.js"></script>
<script src="{{ asset('assets') }}/js/custom/modals/upgrade-plan.js"></script>
<!--end::Page Custom Javascript-->


@endsection
