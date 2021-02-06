@extends('layouts.home')


@section('title', 'Shop Cart')

@section('content')

    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Orders<span>.</span></h2>
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
                        <th class="product-h">Id</th>
                        <th>Name</th>
                        <th class="quan">Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)
                        <tr>
                            <td class="product-col">{{$rs->id}}</td>
                            <td class="price-col">{{$rs->name}}</td>
                            <td class="price-col">{{$rs->email}}</td>
                            <td class="price-col">{{$rs->phone}}</td>
                            <td class="price-col">{{$rs->address}}</td>
                            <td class="price-col">{{$rs->status}}</td>
                            <td class="product-close" ><a href="{{route('user_order_show', ['id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="30" ></a></td>
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
