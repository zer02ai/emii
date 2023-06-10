@extends('layouts/admin/default')
@section('content')

@php
if(isset($course)){
$data = ['type'=>$type,'id' => $course->id];
$name = $course->name;
$parent_id = $course->parent_id;
$course_type = $course->type;
}else{
$data = ['type'=>$type,'id'=>null];
$name = old('name');
$parent_id = old('parent_id');
$course_type = old('type');
}
@endphp
<div class="row">
    <div class="col-12 col-sm-9">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add / Edit {{ucwords($type)}} Course</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.save_course' , $data)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$name}}" required>
                         @error('name')
                        {{$message}}
                        @enderror
                    </div>
                    @if($type != 'main')
                    <div class="form-group">
                        <label for="parent_id">Parent Course</label>
                        <select class="form-control" name="parent_id" id="parent_id">
                            <option value="0">-- select --</option>
                            @if($p_courses->count() > 0)
                            @foreach($p_courses as $p_course)
                            @if($parent_id == $p_course->id)
                            <option value="{{$p_course->id}}" selected>{{$p_course->name}}</option>
                            @else
                            <option value="{{$p_course->id}}">{{$p_course->name}}</option>
                            @endif
                            @endforeach
                            @else
                            <option value="add_main_course">+ Add Course</option>
                            @endif
                        </select>
                    </div>
                    @else
                    <input class="form-control" name="parent_id" id="parent_id" value="0" hidden>
                    @endif
                    <div class="form-group">
                        <label for="type">Course Type</label>
                        <select class="form-control" name="type" id="type" required>
                            <option value="goverment" {{($course_type == "goverment")?'selected':''}}>Goverment</option>
                            <option value="private" {{($course_type == "private")?'selected':''}}>Private</option>
                        </select>
                         @error('type')
                        {{$message}}
                        @enderror
                    </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success my-1">
                @if($type == 'main')
                <a href="{{route('admin.course',['type'=>'main'])}}" class="btn btn-danger my-1">Cancel</a>
                @else
                <a href="{{route('admin.course',['type'=>'sub'])}}" class="btn btn-danger my-1">Cancel</a>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    $('#parent_id').change(function(){
        console.log($(this).val());
        if($(this).val() == 'add_main_course'){
            window.location.href = "{{route('admin.add_course',['type'=>'main'])}}"
        }
    })
</script>
@stop