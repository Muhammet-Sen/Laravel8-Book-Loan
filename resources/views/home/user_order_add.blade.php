@extends('layouts.home')


@section('title', 'Order Products')

@section('content')
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Checkout<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form action="{{route('user_order_store')}}" method="post" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Your Information</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Name*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="{{Auth::user()->name }}" placeholder="Name">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Address*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="address" value="{{Auth::user()->address }}" placeholder="Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Email*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="email" value="{{Auth::user()->email }}" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Phone*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="phone" value="{{Auth::user()->phone }}" placeholder="Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <div class="diff-addr">
                                    <input type="radio" id="one">
                                    <label for="one">Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <h3>Payment</h3>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="in-name">Name*</p>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" name="name" value="{{Auth::user()->name }}" placeholder="Name">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="in-name">Card Number*</p>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" name="number" value="" placeholder="Card Number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="in-name">Valid Dates*</p>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" name="dates" value="" placeholder="Valid Dates">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="in-name">Secret Number*</p>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" name="key" value="" placeholder="Secret number">
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Place your order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Cart Total Page End -->

@endsection
