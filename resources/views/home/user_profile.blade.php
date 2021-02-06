@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <br>
    <hr>
    <br>
<div class="contact-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div class="contact-widget">
                    <div class="cw-item">
                        <h5>User Panel</h5>
                        <ul class="list-links">
                            <li><a href="{{route('myprofile')}}">My account</a></li>
                            <li><a href="{{route('user_orders')}}">My Orders</a></li>
                            <li><a href="{{route('myreviews')}}">My Reviews</a></li>
                            <li><a href="">My Shop Cart</a></li>
                            <li><a href="">My Messages</a></li>
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @include('profile.show')
            </div>
        </div>
    </div>
</div>
@endsection
