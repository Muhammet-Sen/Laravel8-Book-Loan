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
                            <li><a href="">My Orders</a></li>
                            <li><a href="">My Reviews</a></li>
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

{{--<div class="col-lg-3 offset-lg-1">--}}
{{--   --}}
{{--</div>--}}

{{--<div class="contact-widget">--}}
{{--    <div class="cw-item">--}}
{{--        <h5>Location</h5>--}}
{{--        <ul>--}}
{{--            <li>1525 Awesome Lane, </li>--}}
{{--            <li>Los Angeles, CA</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="cw-item">--}}
{{--        <h5>Phone</h5>--}}
{{--        <ul>--}}
{{--            <li>+1 (603)535-4592</li>--}}
{{--            <li>+1 (603)535-4556</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="cw-item">--}}
{{--        <h5>E-mail</h5>--}}
{{--        <ul>--}}
{{--            <li>contact@violetstore.com</li>--}}
{{--            <li>www.violetstore.com</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
