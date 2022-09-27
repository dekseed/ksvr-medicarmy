"use strict";
var KTSigninGeneral=function(){
    var t,e,i;
    var email = $('#email').val();
    var password = $('#password').val();
    return{
        init:function(){
            t=document.querySelector("#kt_sign_in_form"),
            e=document.querySelector("#kt_sign_in_submit"),
            i=FormValidation.formValidation(t,
                {fields:{

                email:{validators:
                    {notEmpty:{message:"ต้องระบุที่อยู่อีเมล"},
                emailAddress:{
                    message:"ค่านี้ไม่ใช่ที่อยู่อีเมลที่ถูกต้อง"
                        }
                    }
                },
                password:{
                    validators:{
                        notEmpty:{
                            message:"ต้องระบุรหัสผ่าน"
                        }}}},
                plugins:{
                    trigger:new FormValidation.plugins.Trigger,
                    bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row"})
                }
            }),
            e.addEventListener("click",(function(n){
                n.preventDefault(),
                i.validate()

                    .then((function(i){
                        "Valid"==i?(e.setAttribute("data-kt-indicator","on"),
                            e.disabled=!0,
                            setTimeout((function(){
                            e.removeAttribute("data-kt-indicator"),
                            e.disabled=!1,
                            document.getElementById('kt_sign_in_form').submit()
                            // Swal.fire({
                            //     text:"คุณเข้าสู่ระบบสําเร็จ!",
                            //     icon:"success",buttonsStyling:!1,
                            //     confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                            //     customClass:{confirmButton:"btn btn-primary"}})

                    .then((function(e){
                        e.isConfirmed&&(t.querySelector('[name="email"]').value="",
                        t.querySelector('[name="password"]').value="")}
                        ))}),2e3))

                            :Swal.fire({
                                    text:"ขออภัย, ดูเหมือนว่ามีข้อผิดพลาดบางอย่างที่ตรวจพบ โปรดลองอีกครั้ง",
                                    icon:"error",buttonsStyling:!1,
                                    confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                                    customClass:{confirmButton:"btn btn-primary"}
                                })
                            }))
                        }))
                    }
                }
            }();
KTUtil.onDOMContentLoaded((function(){KTSigninGeneral.init()}));
