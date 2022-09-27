@extends('layouts.home')
@section('styles')

<link href="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

@endsection
@section('breadcrumb')

<!--begin::Page title-->
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bolder my-1">
        <span class="text-white fs-1">สิทธิ์การใช้งาน</span>
        {{-- <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small> --}}
    </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-line fw-bold fs-7 my-1">
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ route('manage.dashboard') }}" class="text-gray-600">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-gray-600">ข้อมูลผู้ใช้</li>
        <li class="breadcrumb-item text-gray-400">สิทธิ์การใช้งาน</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title=-->

@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
        <div class="card">

            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <!--begin:::Tab item-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fw-bold">
                        <li class="nav-item ms-auto">
                            <!--begin::Action menu-->
                            <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">เพิ่มสิทธิ์การใช้งาน
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-2 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user" class="menu-link px-5">เพิ่มสิทธิ์การใช้งานขั้นพื้นฐาน</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user2" class="menu-link px-5">CRUD สิทธิ์การใช้งาน</a>
                                </div>
                                <!--end::Menu item-->

                            </div>
                            <!--end::Menu-->
                            <!--end::Menu-->
                        </li>
                    </ul>
                    <!--end:::Tab item-->
                    </div>
                    <!--end::Toolbar-->

                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <table id="permission_table" class="table table-row-bordered gy-5">
                    <thead>
                        <tr class="fw-bold fs-6 text-muted">
                            <th class="text-center">ลำดับที่</th>
                            <th class="min-w-125px">สิทธิ์การใช้งาน</th>
                            <th class="min-w-125px">คำบ่งชี้</th>
                            <th class="min-w-125px">ลักษณะ</th>
                            <th class="min-w-125px">สร้างเมื่อวันที่</th>
                            <th class="text-end min-w-70px text-center">ตัวเลือก</th>
                        </tr>
                    </thead>
                    <tbody>

                            <?php $i=1 ?>
                            @foreach($permission as $item)
                            <tr>

                                <td class="text-center">
                                {{ $i++ }}
                                </td>
                                <!--begin::Name=-->
                                <td>
                                    {{ $item->name }}
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                   {{ $item->display_name }}
                                </td>
                                <td>
                                    {{ $item->description }}
                                 </td>

                                <!--begin::Date=-->
                                <td>{{ $item->created_at }}</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end text-center">
                                    <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3 delete_data" data-bs-toggle="modal" data-bs-target="#kt_modal_1{{ $item->id }}" title="ลบข้อมูล">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>



                                    <div class="modal fade" tabindex="-1" id="kt_modal_1{{ $item->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form id="delete{{ $item->id }}" name="delete" action="{{ route('permission.destroy', $item->id)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">ลบข้อมูล</h5>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                            <span class="svg-icon svg-icon-2x"></span>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <div class="modal-body">
                                                        <p><h5>คุณต้องการลบ " {{ $item->name }} " ใช่หรือไม่?</h5></p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">ยกเลิก</button>
                                                        <button type="submit" class="btn btn-primary">ลบข้อมูล</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <!--end::Action=-->
                            </tr>
                            @endforeach

                    </tbody>
                    <tfoot>
                       <tr class="fw-bold fs-6 text-muted">
                            <th class="text-center">ลำดับที่</th>
                            <th class="min-w-125px">สิทธิ์การใช้งาน</th>
                            <th class="min-w-125px">คำบ่งชี้</th>
                            <th class="min-w-125px">ลักษณะ</th>
                            <th class="min-w-125px">สร้างเมื่อวันที่</th>
                            <th class="text-end min-w-70px text-center">ตัวเลือก</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->

    </div>
    <!--end::Container-->
</div>

@endsection
@section('modals')
<!--begin::Modal - Customers - Add-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('permission.store') }}" id="kt_modal_add_user_form" method="POST">
                {{method_field('POST')}}
                {{csrf_field()}}
                <input type="hidden" name="permission_type" value="basic">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">สิทธิ์การใช้งานขั้นพื้นฐาน</h2>
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
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">ชื่อ (Display Name)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ old('display_name') }}" name="display_name" placeholder="ชื่อ (Display Name)" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">ชื่อบ่งชี้เฉพาะ</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ old('name') }}" name="name" placeholder="ชื่อบ่งชี้เฉพาะ" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 mb-2">อธิบายสิ่งที่ได้รับอนุญาตนี้</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="description" value="{{ old('description') }}"  placeholder="อธิบายสิ่งที่ได้รับอนุญาตนี้" />
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
<!--begin::Modal - Customers - Add-->
<div class="modal fade" id="kt_modal_add_user2" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('permission.store') }}" id="kt_modal_add_user_form2" method="POST">
                {{method_field('POST')}}
                {{csrf_field()}}
                <input type="hidden" name="permission_type" value="crud">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header2">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">CRUD สิทธิ์การใช้งาน</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_add_user_close2" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll2" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header2" data-kt-scroll-wrappers="#kt_modal_add_user_scroll2" data-kt-scroll-offset="300px">

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">ชื่อ</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ old('resource') }}" name="resource" placeholder="ชื่อ (Display Name)" />
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
                    <button type="reset" id="kt_modal_add_user_cancel2" class="btn btn-light me-3">ยกเลิก</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_add_user_submit2" class="btn btn-primary">
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
@endsection
@section('scripts')

<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->

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
    var KTModalCustomerAdd2=function(){
        var t,e,o,n,r,i;
        return{
            init:function(){
                i=new bootstrap.Modal(document.querySelector("#kt_modal_add_user2")),
                r=document.querySelector("#kt_modal_add_user_form2"),
                t=r.querySelector("#kt_modal_add_user_submit2"),
                e=r.querySelector("#kt_modal_add_user_cancel2"),
                o=r.querySelector("#kt_modal_add_user_close2"),
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
                                        document.getElementById('kt_modal_add_user_form2').submit()
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

    KTUtil.onDOMContentLoaded((function(){KTModalCustomerAdd2.init()}));

    $("#permission_table").DataTable();


                @if(Session::has('error'))
                                   Swal.fire({
                                     text:"ขออภัย, ดูเหมือนว่ามีข้อผิดพลาดบางอย่างที่ตรวจพบ โปรดลองอีกครั้ง",
                                     icon:"error",buttonsStyling:!1,
                                     confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                                     customClass:{confirmButton:"btn btn-primary"}})

                @elseif(Session::has('success_insert'))
                                Swal.fire({
                                        text:"เพิ่มข้อมูลสิทธิการใช้งานเรียบร้อย !",
                                        icon:"success",buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    })
                @elseif(Session::has('success_delete'))
                                Swal.fire({
                                        text:"ลบข้อมูลเรียบร้อย !",
                                        icon:"success",buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    })
                @endif
</script>

<script>

</script>

@endsection
