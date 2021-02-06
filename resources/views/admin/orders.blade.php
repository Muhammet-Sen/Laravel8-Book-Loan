@extends('layouts.admin')


@section('title','Admin Order List')

@section('content')
        <div class="cart-page">
            <div class="container">
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th class="product-h">Id</th>
                            <th>UserName</th>
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
                                <td class="price-col">{{$rs->user->name}}</td>
                                <td class="price-col">{{$rs->name}}</td>
                                <td class="price-col">{{$rs->email}}</td>
                                <td class="price-col">{{$rs->phone}}</td>
                                <td class="price-col">{{$rs->address}}</td>
                                <td class="price-col">{{$rs->status}}</td>
                                <td class="product-close" ><a href="{{route('admin_order_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1300, height=900')">
                                        <img src="{{asset('assets/admin/images')}}/edit.png" height="50" ></a></td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <br><hr><br>
            </div>
        </div>
@endsection

