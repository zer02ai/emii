@extends('layouts/admin/default')
@section('content')
<style>
    #bulk_delete{
        background-color: #ffc100;
        color: #000;
    }
</style>
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Gallery</h3>
                <div class="card-options">
                    <a href="{{route('admin.add_gallery')}}" class="btn btn-primary btn-sm">Add Gallery</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Select</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Type</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $gallery)
                            <tr>
                                <td><input type="checkbox" name="gallery[]" class="gallery" value="{{$gallery->id}}"/></td>
                                <td><span class="avatar bradius" style="background-image: url({{$gallery->thumbnail_image_path}})"></span></td>
                                <td>{{ucfirst($gallery->type)}}</td>
                                @if($gallery->status == 1)
                                <td>Active</td>
                                @else
                                <td>Inactive</td>
                                @endif
                                <td>
                                    <div class="g-2">
                                        <a class="btn text-primary btn-sm" href="{{route('admin.add_gallery',['id' => $gallery->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                        <a class="btn text-primary btn-sm" href="{{route('admin.status_gallery',['id' => $gallery->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Status"><span class="bi bi-toggles fs-14"></span></a>
                                        <a class="btn text-danger btn-sm" href="{{route('admin.delete_gallery',['id' => $gallery->id])}}" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @if($galleries->count() > 0)
            <div class="card-footer">
                <a class="btn btn-sm" href="#" id="bulk_delete">Bulk Delete</a>
            </div>
            @endif
        </div>
    </div>
</div>
<script>
    $(document).on('click','#bulk_delete',function(){
        var gallery_ids = [];
        var i = 0 ;
        $('.gallery:checked').each(function () {
            gallery_ids[i++] = $(this).val();
        });
        // console.log(gallery_ids);  
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{route('admin.bulk_delete_gallery')}}",
                    data: {gallery_ids:gallery_ids},
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 200) {
                            location.reload();
                        }
                    }
        }) 
    })
</script>
@stop