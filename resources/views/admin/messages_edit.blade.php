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
                    <form role="form" action="{{route('admin_message_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Message Detail</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Id </th><td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th> Name </th><td>{{$data->name}}</td>
                                    </tr>
                                        <th> Phone </th><td>{{$data->phone}}</td>
                                    <tr>
                                        <th> Email </th><td> {{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <th> Subject </th><td> {{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th> Messages </th><td> {{$data->message}}</td>
                                    </tr>
                                    <tr>
                                        <th> Admin Notes </th>
                                        <td><textarea id="body" name="note" >{{$data->note}}</textarea></td>

                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Message</button>
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



