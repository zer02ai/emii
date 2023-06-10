@extends('layouts/admin/default')
@section('content')

@if($type == 'main')
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Main Course List</h3>
                <div class="card-options">
                    <a href="{{route('admin.add_course',['type'=>'main'])}}" class="btn btn-primary btn-sm">Add Main Course</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">S No.</th>
                                <th class="wd-15p border-bottom-0">Main Course</th>
                                <th class="wd-15p border-bottom-0">Type</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{ucwords($course->type)}}</td>
                                <td>{{($course->status == 1)?'Active':'Inactive'}}</td>
                                <td>
                                    <div class="g-2">
                                        <a class="btn text-primary btn-sm" href="{{route('admin.add_course',['type'=>'main','id' => $course->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                        <a class="btn text-primary btn-sm" href="{{route('admin.status_course',['type'=>'main','id' => $course->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Status"><span class="bi bi-toggles fs-14"></span></a>
                                        <a class="btn text-danger btn-sm" href="{{route('admin.delete_course',['type'=>'main','id' => $course->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sub Course List</h3>
                <div class="card-options">
                    <a href="{{route('admin.add_course',['type'=>'sub'])}}" class="btn btn-primary btn-sm">Add Sub Course</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">S No.</th>
                                <th class="wd-15p border-bottom-0">Sub Course</th>
                                <th class="wd-15p border-bottom-0">Type</th>
                                <th class="wd-15p border-bottom-0">Parent Course</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{ucwords($course->type)}}</td>
                                <td>{{(isset($course->parent_category))?$course->parent_category->name:'Main Course'}}</td>
                                <td>{{($course->status == 1)?'Active':'Inactive'}}</td>
                                <td>
                                    <div class="g-2">
                                        <a class="btn text-primary btn-sm" href="{{route('admin.add_course',['type'=>'sub','id' => $course->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                        <a class="btn text-primary btn-sm" href="{{route('admin.status_course',['type'=>'sub','id' => $course->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Status"><span class="bi bi-toggles fs-14"></span></a>
                                        <a class="btn text-danger btn-sm" href="{{route('admin.delete_course',['type'=>'sub','id' => $course->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@stop