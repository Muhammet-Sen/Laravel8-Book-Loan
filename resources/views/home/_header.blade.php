<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section" >
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href=""><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <nav class="main-menu mobile-menu">
                   <ul>
                       <li><img src="{{asset('assets')}}/img/icons/search.png" alt="" class="search-trigger"></li>
                        <li><a href="#">
                            <img src="{{asset('assets')}}/img/icons/bag.png" alt="">
                            <span>2</span>
                        </a></li>
                       <li><a href="{{route('home')}}"> <img src="{{asset('assets')}}/img/icons/man.png" alt="">
                               @guest
                                   <a href="/register">Register</a>
                                   <a href="/login" class="in">Sign in</a>

                               @endguest
                               @auth
                                   <strong class="text-uppercase">{{Auth::user()->name }}</strong>
                                   <ul class="sub-menu">
                                       <li><a href="{{route('myprofile')}}">My account</a></li>
                                       <li><a href="{{route('logout')}}" class="d-block">Logout</a></li>
                                   </ul>
                               @endauth

                           </a></li>
                   </ul>
                </nav>
            </div>
            <div class="user-access">


            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a class="active" href="{{route('home')}}">Home</a></li>
                    <li><a href="./categories.html">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="product-page.html">Product Page</a></li>
                            <li><a href="shopping-cart.html">Shopping Card</a></li>
                            <li><a href="check-out.html">Check out</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('aboutus')}}">About</a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                    <li><a href="./check-out.html">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </nav>
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
                    <p>Free shipping on orders over $30 in USA</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="{{asset('assets')}}/img/icons/voucher.png" alt="">
                    <p>20% Student Discount</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                    <img src="{{asset('assets')}}/img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Info End -->
<!-- Header End -->
