@extends('layouts.admin')


@section('title','Users List')

@section('content')
            <div class="card-body">
                <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th>Profile Image</th>
                        <th> Name </th>
                        <th> Email </th>
                        <th>Phone</th>
                        <th> Address </th>
                        <th>Roles</th>
                        <th> Edit </th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr class="table-info">
                        <td>{{$rs->id}}</td>
                        <td>
                            @if ($rs->profile_photo_path)
                                <img src="{{Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" height="100" alt="">
                            @endif
                        </td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->email}}</td>
                        <td> {{$rs->phone}}</td>
                        <td> {{$rs->address}}</td>
                        <td>@foreach($rs->roles as $row)
                                {{$row->name}}
                            @endforeach
                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return  !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                <i class="mdi mdi-compass icon-sm text-danger"></i>
                            </a>
                        </td>
                        <td><a href="{{route('admin_user_edit', ['id' => $rs->id])}}">
                                <img src="{{asset('assets/admin/images')}}/edit.png" height="30" > </a> </td>
                        <td><a href="{{route('admin_user_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')">
                                <img src="{{asset('assets/admin/images')}}/delete.png" height="50px" > </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection

