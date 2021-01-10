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
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
            </div>
            <div class="header-right">
                <img src="{{asset('assets')}}/img/icons/search.png" alt="" class="search-trigger">
                <img src="{{asset('assets')}}/img/icons/man.png" alt="">
                <a href="#">
                    <img src="{{asset('assets')}}/img/icons/bag.png" alt="">
                    <span>2</span>
                </a>
            </div>
            @auth
            <div class="user-access">
                <strong class="text-uppercase">{{Auth::user()->name }}</strong>
                <a href="{{route('logout')}}" class="d-block">Logout</a>
            </div>
            @endauth
            @guest
            <div class="user-access">
                <a href="/register">Register</a>
                <a href="/login" class="in">Sign in</a>
            </div>
            @endguest

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
                    <li><a href="./product-page.html">About</a></li>
                    <li><a href="./check-out.html">Blog</a></li>
                    <li><a href="./contact.html">Contact</a></li>
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
