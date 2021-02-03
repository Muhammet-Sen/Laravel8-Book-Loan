@extends('layouts.home')


@section('title', $search->title)

@section('content')

    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <br>
                            <div class="cf-left">
                                <form action="#">

                                    <select class="sort" style="display: none;">
                                        <option value="">Sort by</option>
                                        <option value="">Orders</option>
                                        <option value="">Newest</option>
                                        <option value="">Price</option>
                                    </select><div class="nice-select sort" tabindex="0"><span class="current">Sort by</span><ul class="list"><li data-value="" class="option selected focus">Sort by</li><li data-value="" class="option">Orders</li><li data-value="" class="option">Newest</li><li data-value="" class="option">Price</li></ul></div>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>{{count($datalist)}} Products</span>
                                <a href="#">2</a>
                                <a href="#" class="active">4</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product-item" >
                            <figure>
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" style="height: 253px; width: 351px;">
                                <div class="p-status">new</div>
                                <div class="hover-icon">
                                    <a href="{{route('product',['id'=>$rs->id])}}" class="pop-up"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt=""></a>
                                </div>
                            </figure>
                            <div class="product-text">
                                <a href="{{route('product',['id'=>$rs->id])}}">
                                    <h6>{{$rs->title}}</h6>
                                </a>
                                <p>$22.90</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
