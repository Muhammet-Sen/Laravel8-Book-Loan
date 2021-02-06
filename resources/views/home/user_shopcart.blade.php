@extends('layouts.home')


@section('title', 'Shop Cart')

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
                                <div class="pro-qty">
                                    <form action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="post">
                                        @csrf
                                    <input class="input" name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                                    </form>
                                </div>
                            </td>
                            <td class="total">{{$rs->product->price * $rs->quantity}}</td>
                            <td class="product-close" ><a href="{{route('user_shopcart_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete!!!')">X</a></td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
            <br><hr><br>
            <form action="{{route('user_order_add')}}" method="post">
            @csrf
                <input type="hidden" name="total" value="">
                <div class="total-info">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <button type="submit" class="primary-btn chechout-btn">Proceed to checkout</button>
                    </div>
                </div>
            </div>
            </form>
            <br><hr><br>
        </div>

    </div>
    <!-- Cart Page Section End -->
@endsection
