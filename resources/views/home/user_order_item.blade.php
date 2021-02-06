@extends('layouts.home')


@section('title', 'Order İtem')

@section('content')

    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Shop Cart<span>.</span></h2>
                        <a href="{{route('home')}}">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </section>

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                    <tr>
                        <th class="product-h">Product</th>
                        <th>Price</th>
                        <th class="quan">Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)
                        <tr>
                            <td class="product-col">
                                @if($rs->product->image)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->product->image)}}" height="75" alt="">
                                <div class="p-title">
                                    <a href="{{route('product',['id'=>$rs->product->id])}}">
                                        <h5>{{$rs->product->title}}</h5></a>
                                </div>
                                @endif
                            </td>
                            <td class="price-col">{{$rs->product->price}}</td>
                            <td class="quantity-col">
                                {{$rs->quantity}}
                            </td>
                            <td class="total">{{$rs->total}}</td>
                            <td class="total">{{$rs->status}}</td>
                            <td class="product-close" >{{$rs->note}}</td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
            <br><hr><br>
        </div>

    </div>
    <!-- Cart Page Section End -->
@endsection
