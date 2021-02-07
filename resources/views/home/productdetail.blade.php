@extends('layouts.home')


@section('title', $data->title)

@section('content')


    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>{{$data->title}}<span>.</span></h2>
                        <a href="{{route('home')}}">Home</a>
                        <a>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a>
                        <a class="active" >{{$data->title}}</a>
                    </div>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="product-slider owl-carousel">
                        <div class="product-img">
                            <figure>
                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" alt="">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                        @foreach($datalist as $rs)
                        <div class="product-img">
                            <figure>
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-md-1">

                </div>
                <div class="col-md-6">
                    <div class="product-content">
                        <h2>{{$data->title}}</h2>
                        <div class="pc-meta">
                            <h5>$22.90</h5>
                            @php
                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
                                $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                            @endphp
                            <div class="rating">
                                <i class="fa fa-star @if($avgrev<1) -o empty @endif"></i>
                                <i class="fa fa-star @if($avgrev<2) -o empty @endif"></i>
                                <i class="fa fa-star @if($avgrev<3) -o empty @endif"></i>
                                <i class="fa fa-star @if($avgrev<4) -o empty @endif"></i>
                                <i class="fa fa-star @if($avgrev<5) -o empty @endif"></i>
                            </div>
                        </div>
                        <p>{{$data->description}}</p>
                        <ul class="tags">
                            <li><span>Category :</span> Men’s Wear</li>
                            <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                        </ul>
                        <form action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="product-quantity">
                                <div class="pro-qty">
                                    <input class="input" name="quantity" type="number" value="1" max="{{$data->quantity}}">
                                </div>
                            </div>
                            <button type="submit"  class="primary-btn pc-btn">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>REVIEWS</h3><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-reviews">
                                        @foreach($reviews as $rs)
                                            <div class="single-reviews">
                                                <div class="review-heading">
                                                    <div><a>
                                                            <i class="fa fa-user-o"></i><strong>{{$rs->title}}</strong>
                                                            <i class="fa fa-clock-o"></i>{{$rs->created_at}}
                                                        </a>
                                                    </div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star @if($rs->rate<1) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if($rs->rate<2) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if($rs->rate<3) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if($rs->rate<4) fa fa-star-o @endif"></i>
                                                        <i class="fa fa-star @if($rs->rate<5) fa fa-star-o @endif"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>{{$rs->subject}}</p>
                                                    <p>{{$rs->review}}</p>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-5">
                                    <h4 class="text-uppercase">Write Your Review</h4>
                                    <br>
                                    @livewire('review',['id'=>$data->id])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($picked as $rs)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="{{route('product',['id'=>$rs->id])}}"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>{{$rs->title}}</h6>
                            <p>$22.90</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->







<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/main.js"></script>



@endsection
