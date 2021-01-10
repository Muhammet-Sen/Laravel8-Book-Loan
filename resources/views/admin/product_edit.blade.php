@extends('layouts.admin')


@section('title','Admin DashBoard')
@section('javascript')
    <script src=" https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"    ></script>
@endsection
@section('content')


        <div class="content-wrapper">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form role="form" action="{{route('admin_product_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Edit Product</h4>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control form-control-lg" name="category_id" id="exampleFormControlSelect1">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id ==$data->parent_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->description}}" name="description" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Keyword</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->keywords}}" name="keywords"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="body" name="detail" >{{$data->detail}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#body' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control form-control-sm" name="image"  aria-label="Username">
                            @if($data->image)
                                <img src="{{Illuminate\Support\Facades\Storage::url($data->image)}}" height="60" alt="">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>


    <!-- main-panel ends -->
@endsection

