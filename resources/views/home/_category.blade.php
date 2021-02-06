@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp


<nav class="main-menu mobile-menu">
    <ul>
        <li><a class="active" href="{{route('home')}}">Home</a></li>
        <li><a href="#">Shop</a>
                <ul class="sub-menu">
                    @foreach($parentCategories as $rs)
                    <li><a href="{{route('categoryproducts',['id'=>$rs->id])}}">{{$rs->title}}</a></li>
                    @endforeach
                </ul>
        </li>
        <li><a href="{{route('aboutus')}}">About</a></li>
        <li><a href="{{route('references')}}">References</a></li>
        <li><a href="{{route('faq')}}">FAQ</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
    </ul>
</nav>



