@extends('layouts/admin/default')
@section('content')

@php
if(isset($info)){
$data = ['id' => $info->id];
$name = $info->name;
$value = $info->value;
}else{
$data = ['id'=>null];
$name = old('name');
$value = old('type');
}
@endphp
<div class="row">
    <div class="col-12 col-sm-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add / Edit {{ucwords($name)}} Info</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.save_info' , $data)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ex:- Contact Us" value="{{$name}}" required>
                         @error('name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input type="text" class="form-control" name="value" id="value" placeholder="Ex:- 9900990090" value="{{$value}}" required>
                         @error('value')
                        {{$message}}
                        @enderror
                    </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success my-1">
                <a href="{{route('admin.infos')}}" class="btn btn-danger my-1">Cancel</a>
            </div>
        </div>
    </div>
</div>
@stop