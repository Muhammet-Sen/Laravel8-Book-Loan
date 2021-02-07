@extends('layouts.admin')

@section('content')

    <div class="card-body">
        <h4 class="card-title">Reviews</h4>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Product </th>
                <th> Subject </th>
                <th> Review </th>
                <th> Rate </th>
                <th> Status </th>
                <th> Date </th>
                <th> Edit </th>
                <th> Delete </th>
            </tr>
            </thead>
            <tbody>
            @include('home.message')
            @foreach($datalist as $rs)
                <tr class="table-info">
                    <td>{{$rs->id}}</td>
                    <td>
                        <a href="{{route('admin_user_show',['id'=>$rs->id])}}" onclick="return  !window.open(this.href,'','top=50 left=100 width=700,height=700')">
                            {{Auth::user()->name }}</a>
                    </td>
                    <td><a href="{{route('product',['id'=>$rs->product->id])}}" target="_blank">
                            {{$rs->product->title}}
                        </a>
                    </td>
                    <td>{{$rs->subject}}</td>
                    <td>{{$rs->review}}</td>
                    <td>{{$rs->rate}}</td>
                    <td>{{$rs->status}}</td>
                    <td>{{$rs->created_at}}</td>
                    <td>
                        <a href="{{route('admin_review_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                            <img src="{{asset('assets/admin/images')}}/edit.png" height="50" ></a>
                    </td>
                    <td>
                        <a href="{{route('admin_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="50px" > </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
