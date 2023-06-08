@extends('layouts/admin/default')
@section('content')
<style>
    .anchor-div{
        color: #282f53!important;
    }
</style>
<!-- ROW-1 -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    @if(Session::get('admin.role') == "Admin")
                    <a class="anchor-div" href="{{route('admin.userlists')}}">
                    @else
                    <a class="anchor-div" href="{{route('admin.employee_tasks')}}">
                    @endif
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                @if(Session::get('admin.role') == "Admin")
                                <h6 class="">Total Users</h6>
                                <h2 class="mb-0 number-font">{{$users_count}}</h2>
                                @else
                                <h6 class="">Total Tasks</h6>
                                <h2 class="mb-0 number-font">{{$total_tasks}}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    @if(Session::get('admin.role') == "Admin")
                    <a class="anchor-div" href="{{route('admin.employees')}}">
                    @else
                    <a class="anchor-div" href="{{route('admin.employee_tasks',['status'=>'complete'])}}">
                    @endif
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                @if(Session::get('admin.role') == "Admin")
                                <h6 class="">Total Employees</h6>
                                <h2 class="mb-0 number-font">{{$employees_count}}</h2>
                                @else
                                <h6 class="">Completed Tasks</h6>
                                <h2 class="mb-0 number-font">{{$complete_tasks}}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    @if(Session::get('admin.role') == "Admin")
                    <a class="anchor-div" href="{{route('admin.donations')}}">
                    @else
                    <a class="anchor-div" href="{{route('admin.employee_tasks')}}">
                    @endif
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                @if(Session::get('admin.role') == "Admin")
                                <h6 class="">Total Donors</h6>
                                <h2 class="mb-0 number-font">{{$total_donors}}</h2>
                                @else
                                <h6 class="">Pending Tasks</h6>
                                <h2 class="mb-0 number-font">{{$pending_tasks}}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    @if(Session::get('admin.role') == "Admin")
                    <a class="anchor-div" href="{{route('admin.donations')}}">
                    @else
                    <a class="anchor-div" href="{{route('admin.employee_tasks')}}">
                    @endif
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                @if(Session::get('admin.role') == "Admin")
                                <h6 class="">Total Donation Amount</h6>
                                <h2 class="mb-0 number-font">{{$total_donations}}</h2>
                                @else
                                <h6 class="">Active Tasks</h6>
                                <h2 class="mb-0 number-font">{{$processing_tasks}}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <img src="{{url('')}}/assets/frontend/images/slider1.webp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop