@extends('layouts.admin')


@section('title','Admin DashBoard')

@section('content')
            <div class="card-body">
                <h4 class="card-title">Table with contextual classes</h4>
                <p class="card-description"> Add class <code>.table-{color}</code> </p>
                <a href="{{route('admin_product_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Product</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Parent </th>
                        <th> Title </th>
                        <th>Description</th>
                        <th> Status </th>
                        <th>Keywords</th>
                        <th> Edit </th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr class="table-info">
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->parent_id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->description}}</td>
                        <td> {{$rs->status}}</td>
                        <td> {{$rs->keywords}}</td>
                        <td><a href="{{route('admin_product_edit', ['id' => $rs->id])}}">Edit </a> </td>
                        <td><a href="{{route('admin_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')"> Delete </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
