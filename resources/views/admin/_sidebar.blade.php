


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="row">
                <div class="col-md-3">
                    @if(Auth::user()->profile_photo_path)
                        <img class="img-xs rounded-circle" src="{{Illuminate\Support\Facades\Storage::url(Auth::user()->profile_photo_path)}}" alt="profile image">
                    @endif
                </div>
                <div class="col-md-9">
                        @auth
                            <p class="d-block">{{Auth::user()->name }}</p>
                            <a href="{{route('logout')}}" class="d-block">Logout</a>
                        @endauth
                </div>

            </div>


        </li>
        <li class="nav-item nav-category">Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_category')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_products')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Order</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_orders')}}">All Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_order_list',['status'=>'accepted'])}}">Accepted Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_order_list',['status'=>'shipping'])}}">Shipping Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_message')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Contact Messages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_review')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Reviews</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_faq')}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">FAQ</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_setting')}}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Settings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin_user')}}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">User Lists</span>
            </a>
        </li>
    </ul>
</nav>

