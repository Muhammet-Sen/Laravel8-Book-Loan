@extends('layouts.home')


@section('title', $data->title)

@section('content')

    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <br>
                            <h2>{{$data->title}}<span></span></h2>
                            <div class="cf-right">

                                <span>{{count($datalist)}} Products</span>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
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
        </div>
    </section>

@endsection
