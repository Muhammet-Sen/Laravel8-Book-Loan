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
                    <form role="form" action="{{route('admin_review_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Reviews Detail</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Id </th><td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th> Name </th><td>{{Auth::user()->name }}</td>
                                    </tr>
                                        <th> Product </th><td>{{$data->product->title}}</td>
                                    <tr>
                                        <th> Subject </th><td> {{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th> Review </th><td> {{$data->review}}</td>
                                    </tr>
                                    <tr>
                                        <th> Rate </th><td> {{$data->rate}}</td>
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
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Review</button>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                                @include('home.message')
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>



