@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="{{route('getproduct')}}" method="post" class="search-model-form">
            @csrf
            @livewire('search')
        </form>
        @livewireScripts
    </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section" >
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <nav class="main-menu mobile-menu">
                   <ul>
                       <li><img src="{{asset('assets')}}/img/icons/search.png" alt="" class="search-trigger"></li>
                        <li><a href="{{route('user_shopcart')}}">
                            <img src="{{asset('assets')}}/img/icons/bag.png" alt="">
                            <span>{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span>
                        </a></li>
                       <li><a href="{{route('home')}}"> <img src="{{asset('assets')}}/img/icons/man.png" alt="">
                               @guest
                                   <a href="/register">Register</a>
                                   <a href="/login" class="in">Sign in</a>

                               @endguest
                               @auth
                                   <strong class="text-uppercase">{{Auth::user()->name }}</strong>
                                   <ul class="sub-menu">
                                       <li><a href="{{route('myprofile')}}">My Account</a></li>
                                       <li><a href="{{route('myreviews')}}">My Reviews</a></li>
                                       <li><a href="{{route('user_shopcart')}}">My Shopcart</a></li>
                                       <li><a href="{{route('user_orders')}}">My Orders</a></li>
                                       <li><a href="{{route('logout')}}" class="d-block">Logout</a></li>
                                   </ul>
                               @endauth

                           </a></li>
                   </ul>
                </nav>
            </div>
            <div class="user-access">


            </div>
            @include('home._category')
        </div>
    </div>
</header>
<!-- Header Info Begin -->
<div class="header-info">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="header-item">
                    <img src="{{asset('assets')}}/img/icons/delivery.png" alt="">
                    <p>Free shipping on orders over 50 TL in SAMSUN</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">

                    <p>@include('home.message')</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                    <img src="{{asset('assets')}}/img/icons/sales.png" alt="">
                    <p>20% Student Discount</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Info End -->
<!-- Header End -->
