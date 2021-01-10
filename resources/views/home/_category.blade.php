
@php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="category-nav">
    <span class="category-header">Categories <i class="fa fa list"></i> </span>
    <ul class="category-list">
        <li><a class="active" href="./index.html">Home</a></li>
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
</div>
