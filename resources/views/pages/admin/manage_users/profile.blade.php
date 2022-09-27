@extends('layouts.check_up')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-user.css">

@endsection
@section('content')

<div id="app">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            {{-- <div class="content-header row">
                 <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">ข้อมูลสมาชิก</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">จัดการข้อมูลสมาชิก</a>
                                    </li>
                                    <li class="breadcrumb-item active">ข้อมูลสมาชิก
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="content-body">
                 <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">ข้อมูลสมาชิก</div>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="{{ asset('images') }}/{{$user->pic}}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">คำนำหน้า</td>
                                                <td class="font-medium-1">{{$user->title_name->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">ชื่อ - สกุล</td>
                                                    <td class="font-medium-1">{{$user->first_name}} {{$user->last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">ตำแหน่ง</td>
                                                    <td class="font-medium-1">{{$user->position}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">อีเมล์</td>
                                                    <td class="font-medium-1">{{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">แผนก</td>
                                                    <td class="font-medium-1">{{$user->department->name}}</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">

                                                    <div class="form-group">
                                                        <div class="table-responsive border rounded px-1 ">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-lock mr-50 "></i>การฉีดวัคซีน Covid-19</h6>
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
                                                                    <thead>
                                                                        <tr>

                                                                        <th class="text-center">เข็มที่</th>
                                                                        <th >ชื่อวัคซีน</th>
                                                                        <th >วันที่</th>
                                                                        <th >สถานที่</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        @foreach ($vaccine as $index => $cate_tender)
                                                                        <tr>
                                                                            <td class="text-center">{{ $cate_tender->no }}</td>
                                                                            <td >{{ $cate_tender->name }}</td>
                                                                            <td >{{ DateThai3($cate_tender->date) }}</td>
                                                                            <td>{{ $cate_tender->location }}</td>

                                                                        </tr>

                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- account end -->
                     {{--   <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">ข้อมูลสมาชิก</div>
                                </div>
                                <div class="card-body">
                                    <div class="users-view-image">
                                            <img src="{{ asset('images') }}/no_image_user.png" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12">
                                            <table>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">คำนำหน้า</td>
                                                <td class="font-medium-1">{{$user->title_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">ชื่อ - สกุล</td>
                                                    <td class="font-medium-1">{{$user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">ตำแหน่ง</td>
                                                    <td class="font-medium-1">{{$user->position}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">อีเมล์</td>
                                                    <td class="font-medium-1">{{$user->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">แผนก</td>
                                                    <td class="font-medium-1">{{$user->department->name}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-medium-1 font-weight-bold">สถานะ</td>
                                                    <td class="font-medium-1">
                                                        @if($user->status === '1')
                                                        <div class="badge badge-primary badge-md">อนุมัติแล้ว</div>
                                                        @else
                                                        <div class="badge badge-danger badge-md">รอการอนุมัติ</div>
                                                        @endif

                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">บทบาทหน้าที่</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        @foreach ($user->roles as $role)
                                        <tr>
                                            <td class="font-weight-bold">{{$role->display_name}}</td>
                                            <td>({{$role->description}})</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                         <!-- permissions start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom mx-2 px-0">
                                    <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Permission
                                    </h6>
                                </div>
                                <div class="card-body px-75">
                                    <div class="table-responsive users-view-permission">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Module</th>
                                                    <th>Read</th>
                                                    <th>Write</th>
                                                    <th>Create</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Users</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox1" class="custom-control-input" disabled checked>
                                                            <label class="custom-control-label" for="users-checkbox1"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox2" class="custom-control-input" disabled><label class="custom-control-label" for="users-checkbox2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox3" class="custom-control-input" disabled><label class="custom-control-label" for="users-checkbox3"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox4" class="custom-control-input" disabled checked>
                                                            <label class="custom-control-label" for="users-checkbox4"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Articles</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox5" class="custom-control-input" disabled><label class="custom-control-label" for="users-checkbox5"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox6" class="custom-control-input" disabled checked>
                                                            <label class="custom-control-label" for="users-checkbox6"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox7" class="custom-control-input" disabled><label class="custom-control-label" for="users-checkbox7"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox8" class="custom-control-input" disabled checked>
                                                            <label class="custom-control-label" for="users-checkbox8"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Staff</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox9" class="custom-control-input" disabled checked>
                                                            <label class="custom-control-label" for="users-checkbox9"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox10" class="custom-control-input" disabled checked>
                                                            <label class="custom-control-label" for="users-checkbox10"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox11" class="custom-control-input" disabled><label class="custom-control-label" for="users-checkbox11"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox ml-50"><input type="checkbox" id="users-checkbox12" class="custom-control-input" disabled><label class="custom-control-label" for="users-checkbox12"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- permissions end --> --}}
                    </div>
                </section>
                <!-- page users view end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
</div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
        permissionsSelected: []
    }
  });
</script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->
@endsection
