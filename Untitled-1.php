@extends('layouts/backend/default')
@section('content')

@php
if(isset($image_gallery)){
$data = ['id' => $image_gallery->id];
$name = $image_gallery->name;
$link = $video->link;
}else{
$data = '';
$name = old('name');
$link = old('link');
}
@endphp
<div class="row">
    <div class="col-12 col-sm-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add / Edit Image Gallery</h3>
            </div>
            <div class="card-body">
                <form action="{{route('backend.save_image_gallery' , $data)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Images For Gallery</label>
                        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple required>
                        @error('images')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Post Date</label>
                        <input type="date" class="form-control" name="post_date" id="post_date" required>
                        @error('post_date')
                        {{$message}}
                        @enderror
                    </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success my-1">
                <a href="{{route('backend.image_galleries')}}" class="btn btn-danger my-1">Cancel</a>
            </div>
        </div>
    </div>
</div>
@stop