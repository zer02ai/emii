@extends('layouts/admin/default')
@section('content')

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Website Info</h3>
                <div class="card-options">
                    <a href="{{route('admin.add_info')}}" class="btn btn-primary btn-sm">Add Website Info</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">S No.</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Value</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($infos as $info)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$info->name}}</td>
                                <td>{{$info->value}}</td>
                                <td>{{($info->status == 1)?'Active':'Inactive'}}</td>
                                <td>
                                    <div class="g-2">
                                        <a class="btn text-primary btn-sm" href="{{route('admin.add_info',['id' => $info->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                        <a class="btn text-primary btn-sm" href="{{route('admin.status_info',['id' => $info->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Status"><span class="bi bi-toggles fs-14"></span></a>
                                        <a class="btn text-danger btn-sm" href="{{route('admin.delete_info',['id' => $info->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
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
@stop