@extends('layouts.admin')


@section('title','FAQ')

@section('content')
            <div class="card-body">

                <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add FAQ</a><br>
                @include('home.message')
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Position </th>
                        <th> Question </th>
                        <th>Answer</th>
                        <th> Status </th>
                        <th> Edit </th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr class="table-info">
                        <td>{{$rs->id}}</td>

                        <td>{{$rs->position}}</td>
                        <td>{{$rs->question}}</td>
                        <td> {!! $rs->answer !!}</td>
                        <td> {{$rs->status}}</td>

                        <td><a href="{{route('admin_faq_edit', ['id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="30" > </a> </td>
                        <td><a href="{{route('admin_faq_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="50px" > </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection

