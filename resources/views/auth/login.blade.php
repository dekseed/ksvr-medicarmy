@extends('layouts.login')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--begin::Content-->
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <!--begin::Logo-->
    <a href="{{ route('login') }}" class="mb-12">
        <img alt="Logo" src="{{ asset('assets') }}/media/logos/logo-demo9.png" class="h-40px" />
    </a>
    <!--end::Logo-->
    <!--begin::Wrapper-->
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"  method="POST" action="{{ route('login') }}">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">เข้าสู่ระบบ MedicArmy</h1>
                <!--end::Title-->
                <!--begin::Link-->
                {{-- <div class="text-gray-400 fw-bold fs-4">New Here?
                <a href="../../demo9/dist/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div> --}}
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid" type="text" name="email" id="email" autocomplete="off" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">รหัสผ่าน</label>
                    <!--end::Label-->
                    <!--begin::Link-->
                    <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">ลืมรหัสผ่าน ?</a>
                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid" type="password" name="password" id="password" autocomplete="off" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <!--begin::Submit button-->
                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">เข้าสู่ระบบ</span>
                    <span class="indicator-progress">รอสักครู่...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Submit button-->
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Content-->
<!--begin::Footer-->
<div class="d-flex flex-center flex-column-auto p-10">
    <!--begin::Links-->
    <div class="d-flex align-items-center fw-bold fs-6">
        {{-- <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a> --}}
        <a href="mailto:ksvrhospital@hotmail.com" class="text-muted text-hover-primary px-2">อีเมล์</a>
        <a href="https://ksvrhospital.go.th/ksvr/contact" class="text-muted text-hover-primary px-2">ติดต่อสอบถาม</a>
    </div>
    <!--end::Links-->
</div>
<!--end::Footer-->

@endsection

@section('scripts')
<script>


                @if(Session::has('error'))
                    $(window).on("load", function(){
                                   Swal.fire({
                                     text:"ขออภัย, ดูเหมือนว่ามีข้อผิดพลาดบางอย่างที่ตรวจพบ โปรดลองอีกครั้ง",
                                     icon:"error",buttonsStyling:!1,
                                     confirmButtonText:"ตกลง, เข้าใจแล้ว!",
                                     customClass:{confirmButton:"btn btn-primary"}})
                                 });
                @endif
</script>

@endsection
