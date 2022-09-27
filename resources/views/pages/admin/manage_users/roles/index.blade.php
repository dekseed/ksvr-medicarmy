@extends('layouts.home')
@section('styles')

<link href="{{ asset('assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

@endsection
@section('breadcrumb')

<!--begin::Page title-->
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bolder my-1">
        <span class="text-white fs-1">บทบาทหน้าที่</span>
        {{-- <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small> --}}
    </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-line fw-bold fs-7 my-1">
        <li class="breadcrumb-item text-gray-600">
            <a href="{{ route('manage.dashboard') }}" class="text-gray-600">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-gray-600">ข้อมูลผู้ใช้</li>
        <li class="breadcrumb-item text-gray-400">บทบาทหน้าที่</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title=-->

@endsection
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Payment methods-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header card-header-stretch pb-0">
                <!--begin::Title-->
                <div class="card-title">
                    <h3 class="m-0">บทบาทหน้าที่</h3>
                </div>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar m-0">
                    <!--begin::Tab nav-->
                    <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                        <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bolder me-5 active" data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard">บทบาทหน้าที่</a>
                        </li>
                        <!--end::Tab item-->
                        {{-- <!--begin::Tab item-->
                        <li class="nav-item" role="presentation">
                            <a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bolder" data-bs-toggle="tab" role="tab" href="#kt_billing_paypal">Paypal</a>
                        </li>
                        <!--end::Tab item--> --}}
                    </ul>
                    <!--end::Tab nav-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Tab content-->
            <div id="kt_billing_payment_tab_content" class="card-body tab-content">
                <!--begin::Tab panel-->
                <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
                    {{-- <!--begin::Title-->
                    <h3 class="mb-5">My Cards</h3>
                    <!--end::Title--> --}}
                    <!--begin::Row-->
                    <div class="row gx-9 gy-6">
                        <!--begin::Col-->
                        @foreach($roles as $item)
                            <div class="col-xl-6">
                                <!--begin::Card-->
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column py-2">
                                        <!--begin::Owner-->
                                        <div class="d-flex align-items-center fs-4 fw-bolder mb-5">{{ $item->name }}
                                        {{-- <span class="badge badge-light-success fs-7 ms-2">Primary</span> --}}
                                        </div>
                                        <!--end::Owner-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Icon-->
                                            {{-- <img src="assets/media/svg/card-logos/visa.svg" alt="" class="me-4" /> --}}
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div>
                                                <div class="fs-4 fw-bolder">{{ $item->display_name }}</div>
                                                <div class="fs-6 fw-bold text-gray-400">{{ $item->description }}</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center py-2">
                                        <a href="{{ route('role.show', $item->id) }}" class="btn btn-sm btn-light btn-active-light-primary me-3">ดูข้อมูล</a>

                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Card-->
                            </div>

                        @endforeach
                        <!--end::Col-->
                        {{-- <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Card-->
                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                <!--begin::Info-->
                                <div class="d-flex flex-column py-2">
                                    <!--begin::Owner-->
                                    <div class="d-flex align-items-center fs-4 fw-bolder mb-5">Jacob Holder</div>
                                    <!--end::Owner-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="me-4" />
                                        <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div>
                                            <div class="fs-4 fw-bolder">Mastercard **** 2040</div>
                                            <div class="fs-6 fw-bold text-gray-400">Card expires at 10/22</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center py-2">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                                    <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Edit</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Card-->
                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                <!--begin::Info-->
                                <div class="d-flex flex-column py-2">
                                    <!--begin::Owner-->
                                    <div class="d-flex align-items-center fs-4 fw-bolder mb-5">Jhon Larson</div>
                                    <!--end::Owner-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="me-4" />
                                        <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div>
                                            <div class="fs-4 fw-bolder">Mastercard **** 1290</div>
                                            <div class="fs-6 fw-bold text-gray-400">Card expires at 03/23</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center py-2">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-3">Delete</button>
                                    <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Edit</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->--}}
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <!--begin::Content-->
                                    <div class="mb-3 mb-md-0 fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">เพิ่มข้อมูลบทบาทหน้าที่</h4>
                                        <div class="fs-6 text-gray-700 pe-7">
                                            {{-- <a href="#" class="fw-bolder me-1">Metronic Terms</a>adding your new payment card --}}
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_new_role">เพิ่มข้อมูล</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Tab panel-->
                {{-- <!--begin::Tab panel-->
                <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
                    <!--begin::Title-->
                    <h3 class="mb-5">My Paypal</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-gray-600 fs-6 fw-bold mb-5">To use PayPal as your payment method, you will need to make pre-payments each month before your bill is due.</div>
                    <!--end::Description-->
                    <!--begin::Form-->
                    <form class="form">
                        <!--begin::Input group-->
                        <div class="mb-7 mw-350px">
                            <select name="timezone" data-control="select2" data-placeholder="Select an option" data-hide-search="true" class="form-select form-select-solid form-select-lg fw-bold fs-6 text-gray-700">
                                <option>Select an option</option>
                                <option value="25">US $25.00</option>
                                <option value="50">US $50.00</option>
                                <option value="100">US $100.00</option>
                                <option value="125">US $125.00</option>
                                <option value="150">US $150.00</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Tab panel--> --}}
            </div>
            <!--end::Tab content-->
        </div>
        <!--end::Payment methods-->

    </div>
    <!--end::Container-->
</div>

@endsection
@section('modals')
<!--begin::Modal - Customers - Add-->
<div class="modal fade" id="kt_modal_new_role" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('role.store') }}" id="kt_modal_new_role_form" method="POST">
                {{method_field('POST')}}
                {{csrf_field()}}
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_role_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">บทบาทหน้าที่</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_new_role_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_role_header" data-kt-scroll-wrappers="#kt_modal_new_role_scroll" data-kt-scroll-offset="300px">

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
                            <label class="required fs-6 mb-2">รายละเอียด</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="description" value="{{ old('description') }}"  placeholder="รายละเอียด" />
                            <!--end::Input-->
                        </div>
                        <h4 class="fv-row mb-7"> สิทธิ์การใช้งาน</h4>
                        <!--end::Input group-->
                        @foreach ($permissions as $permission)
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-bold">{{$permission->display_name}}</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="fs-7 fw-bold text-muted">{{$permission->description}}</div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <!--begin::Input-->
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="{{$permission->id}}" />
                                        <!--end::Input-->
                                        <!--begin::Label-->
                                        <span class="form-check-label fw-bold text-muted">Yes</span>
                                        <!--end::Label-->
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--begin::Wrapper-->
                            </div>
                            <!--end::Input group-->
                            @endforeach
                        </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_new_role_cancel" class="btn btn-light me-3">ยกเลิก</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_new_role_submit" class="btn btn-primary">
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
                i=new bootstrap.Modal(document.querySelector("#kt_modal_new_role")),
                r=document.querySelector("#kt_modal_new_role_form"),
                t=r.querySelector("#kt_modal_new_role_submit"),
                e=r.querySelector("#kt_modal_new_role_cancel"),
                o=r.querySelector("#kt_modal_new_role_close"),
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
                                        document.getElementById('kt_modal_new_role_form').submit()
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


                @if(Session::has('error'))
                                   Swal.fire({
                                     text:"ขออภัย, ดูเหมือนว่ามีข้อผิดพลาดบางอย่างที่ตรวจพบ โปรดลองอีกครั้ง",
                                     icon:"error",buttonsStyling:!1,
                                     confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                                     customClass:{confirmButton:"btn btn-primary"}})

                @elseif(Session::has('success_insert'))
                                Swal.fire({
                                        text:"เพิ่มข้อมูลบทบาทหน้าที่เรียบร้อย !",
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
