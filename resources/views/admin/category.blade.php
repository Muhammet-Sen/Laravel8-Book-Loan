@extends('layouts.admin')


@section('title','Admin DashBoard')

@section('content')
    <div class="main-panel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table with contextual classes</h4>
                <p class="card-description"> Add class <code>.table-{color}</code> </p>
                <a href="{{route('admin_category_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Category</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Parent </th>
                        <th> Title </th>
                        <th> Status </th>
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
                        <td> {{$rs->status}}</td>
                        <td><a href="{{route('admin_category_edit', ['id' => $rs->id])}}">Edit</a> </td>
                        <td><a href="{{route('admin_category_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')"> Delete </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="content-wrapper"> </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection

