@extends('layouts.admin')


@section('title','Product')

@section('content')
            <div class="card-body">

                <a href="{{route('admin_product_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Product</a><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Category </th>
                        <th> Title </th>
                        <th>Description</th>
                        <th> Status </th>
                        <th>Keywords</th>
                        <th>Image</th>
                        <th>Image Gallery</th>
                        <th> Edit </th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr class="table-info">
                        <td>{{$rs->id}}</td>
                        <td>
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                        </td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->description}}</td>
                        <td> {{$rs->status}}</td>
                        <td> {{$rs->keywords}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Illuminate\Support\Facades\Storage::url($rs->image)}}" height="150px" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('admin_image_add',['product_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                <img src="{{asset('assets/admin/images')}}/gallery.png" height="30" ></a>
                        </td>
                        <td><a href="{{route('admin_product_edit', ['id' => $rs->id])}}">
                                <img src="{{asset('assets/admin/images')}}/edit.png" height="30" > </a> </td>
                        <td><a href="{{route('admin_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')">
                                <img src="{{asset('assets/admin/images')}}/delete.png" height="50px" > </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection

