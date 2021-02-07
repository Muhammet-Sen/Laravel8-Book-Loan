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
    <div class="main-panel">
        <div class="content-wrapper"> </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <div class="card-body">
            @include('home.message')
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th><td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th>Name</th><td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th><td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th><td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{$row->name}}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th>Add Role</th>
                        <td>
                            <table>
                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" >
                                    @csrf
                                    <tr>
                                        <td>
                                            <select name="roleid">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-user btn-light ">
                                                Add Role
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </td>
                    </tr>

                    </thead>

                </table>

            </div>
        </div>

        <!-- partial -->
    </div>
    <!-- main-panel ends -->

