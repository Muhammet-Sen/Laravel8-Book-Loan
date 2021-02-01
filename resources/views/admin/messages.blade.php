@extends('layouts.admin')


@section('title','Contact Messages List')

@section('content')
            <div class="card-body">
                <h4 class="card-title">Table with contextual classes</h4>
                @include('home.message')

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> Phone </th>
                        <th> Email </th>
                        <th> Subject </th>
                        <th> Messages </th>
                        <th> Admin Notes </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr class="table-info">
                        <td>{{$rs->id}}</td>

                        <td>{{$rs->name}}</td>
                        <td>{{$rs->phone}}</td>
                        <td> {{$rs->email}}</td>
                        <td> {{$rs->subject}}</td>
                        <td> {{$rs->message}}</td>
                        <td> {{$rs->note}}</td>
                        <td><a href="{{route('admin_message_edit', ['id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="30" > </a> </td>
                        <td><a href="{{route('admin_message_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="50px" > </a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection

