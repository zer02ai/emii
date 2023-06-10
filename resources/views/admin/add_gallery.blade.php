@extends('layouts/admin/default')
@section('content')

@php
if(isset($gallery)){
$data = ['id' => $gallery->id];
$type = $gallery->type;
}else{
$data = '';
$type = old('type');
}
@endphp
<div class="row">
    <div class="col-12 col-sm-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add / Edit Image Gallery</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.save_gallery' , $data)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="form-label">Images For Gallery</label>
                        <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple required>
                        @error('images')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Type</label>
                        <select class="form-control" name="type" id="type" required>
                            <option value="">-- Select Type --</option>
                            <option value="event" {{($type == 'event')?'selected':''}}>Event</option>
                            <option value="placement" {{($type == 'placement')?'selected':''}}>Placement</option>
                            <option value="practical" {{($type == 'practical')?'selected':''}}>Practical</option>
                            <option value="class" {{($type == 'class')?'selected':''}}>Class</option>
                            <option value="other" {{($type == 'other')?'selected':''}}>Other</option>
                        </select>
                    </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success my-1">
                <a href="{{route('admin.gallery')}}" class="btn btn-danger my-1">Cancel</a>
            </div>
        </div>
    </div>
</div>
@stop