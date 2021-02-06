@extends('layouts.home')
@section('title', 'User Reviews')
@section('content')
    <div class="contact-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="contact-widget">
                        <div class="cw-item"><br><br>
                            <h5>User Panel</h5>
                            <ul class="list-links">
                                <li><a href="{{route('myprofile')}}">My account</a></li>
                                <li><a href="">My Orders</a></li>
                                <li><a href="{{route('myreviews')}}">My Reviews</a></li>
                                <li><a href="">My Shop Cart</a></li>
                                <li><a href="">My Messages</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <br>
                        <table class="table table-bordered">
                            <thead>
                            <tr class="table-info">
                                <th> ID </th>
                                <th> Product </th>
                                <th> Subject </th>
                                <th> Review </th>
                                <th> Rate </th>
                                <th> Status </th>
                                <th> Date </th>
                                <th> Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                <tr >
                                    <td>{{$rs->id}}</td>
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
                                        <a href="{{route('admin_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')">
                                            <img src="{{asset('assets/admin/images')}}/delete.png" height="40px" > </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
