<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">
<div class="content-wrapper">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <form role="form" action="{{route('admin_order_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h4 class="card-title">Message Detail</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th> Id </th><td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th> UserName </th><td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th> Name </th><td>{{$data->name}}</td>
                        </tr>
                        <th> Address </th><td>{{$data->address}}</td>
                        <tr>
                            <th> Phone </th><td> {{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th> Email </th><td> {{$data->email}}</td>
                        </tr>
                        <tr>
                            <th> IP </th><td> {{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th> Create Date </th><td> {{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th> Update Date </th><td> {{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th> Status </th>
                            <td>
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>Accepted</option>
                                    <option>Canceled</option>
                                    <option>Shipping</option>
                                    <option>Completed</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <th> Admin Note </th><td> <textarea name="note" rows="3" cols="15">{{$data->note}}</textarea></td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                </div>
                            </td>
                        </tr>
                        </thead>
                    @include('home.message')
                </form>
                </table>

                <table class="table table-bordered">
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
                        <form role="form" action="{{route('admin_order_item_update',['id' => $rs->id])}}" method="post">
                            <tr>
                                <td class="product-col">
                                    @if($rs->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="75" alt="">
                                        <div class="p-title">
                                            <a href="{{route('product',['id'=>$rs->id])}}">
                                                <h5>{{$rs->product->title}}</h5></a>
                                        </div>
                                    @endif
                                </td>
                                <td class="price-col">{{$rs->price}}</td>
                                <td class="quantity-col">
                                    {{$rs->quantity}}
                                </td>
                                <td class="total">{{$rs->total}}</td>

                                @csrf
                                <td class="total"><select name="status">
                                        <option selected>{{$rs->status}}</option>
                                        <option>Accepted</option>
                                        <option>Canceled</option>
                                        <option>Shipping</option>
                                        <option>Completed</option>
                                    </select></td>
                                <td class="product-close" ><textarea name="note" rows="3" cols="15">{{$rs->note}}</td>
                                <td><input type="submit" value="update"></td>

                            </tr>
                        </form>
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>



