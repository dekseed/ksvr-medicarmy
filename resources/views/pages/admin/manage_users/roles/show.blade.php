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
                                        <div class="card-header">
                                            <blockquote class="blockquote pl-1 border-left-primary border-left-3">
                                                <h3 class="card-title">{{$role->display_name}} <em>({{$role->name}})</em></h3>
                                                <p class="m-l-15">{{$role->description}}</p>
                                            </blockquote>
                                        </div>
                                        <h4 class="mt-5 mb-5"> สิทธิ์การใช้งานระบบ</h4>
                                        <ul>
                                            @foreach ($role->permissions as $r)
                                            <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                                            @endforeach
                                        </ul>
									</div>
                                    <div class="d-flex align-items-center py-2">
                                        <button type="buttom" class="btn btn-sm btn-danger me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_delete_card">ลบข้อมูล</button>
                                        <button type="buttom" class="btn btn-sm btn-light btn-active-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_role">แก้ไข</button>
                                        <a href="{{ route('role.index') }}" class="btn btn-sm btn-info">กลับ</a>
                                    </div>
                                    <!--end::Actions-->
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
<div class="modal fade" id="kt_modal_edit_role" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('role.update', $role->id) }}" id="kt_modal_edit_role_form" method="POST">
                {{method_field('PUT')}}
                {{csrf_field()}}

                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_role_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">แก้ไขข้อมูลบทบาทหน้าที่</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_edit_role_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_role_header" data-kt-scroll-wrappers="#kt_modal_edit_role_scroll" data-kt-scroll-offset="300px">

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">ชื่อ (Display Name)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ $role->display_name }}" name="display_name" placeholder="ชื่อ (Display Name)" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">ชื่อบ่งชี้เฉพาะ</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" value="{{ $role->name }}" name="name" placeholder="ชื่อบ่งชี้เฉพาะ" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 mb-2">รายละเอียด</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="description" value="{{ $role->description }}"  placeholder="รายละเอียด" />
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
                                        <input class="form-check-input" name="permissions[]" type="checkbox" value="{{$permission->id}}"
                                        @foreach ($role->permissions as $r)
                                        {{ $permission->id == $r->id ? 'checked' : '' }}
                                        @endforeach
                                         />
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
                    <button type="reset" id="kt_modal_edit_role_cancel" class="btn btn-light me-3">ยกเลิก</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_edit_role_submit" class="btn btn-primary">
                        <span class="indicator-label">แก้ไขข้อมูล</span>
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
<div class="modal fade" tabindex="-1" id="kt_modal_delete_card">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="delete" name="delete" action="{{ route('role.destroy', $role->id)}}" method="POST">
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
                    <p><h5>คุณต้องการลบ " {{ $role->name }} " ใช่หรือไม่?</h5></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">ลบข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
                i=new bootstrap.Modal(document.querySelector("#kt_modal_edit_role")),
                r=document.querySelector("#kt_modal_edit_role_form"),
                t=r.querySelector("#kt_modal_edit_role_submit"),
                e=r.querySelector("#kt_modal_edit_role_cancel"),
                o=r.querySelector("#kt_modal_edit_role_close"),
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
                                        document.getElementById('kt_modal_edit_role_form').submit()
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
                                        text:"แก้ไขข้อมูลบทบาทหน้าที่เรียบร้อย !",
                                        icon:"success",buttonsStyling:!1,
                                        confirmButtonText:"โอเค, เข้าใจแล้ว!",
                                        customClass:{confirmButton:"btn btn-primary"}
                                    })

                @endif
</script>

<script>

</script>

@endsection


