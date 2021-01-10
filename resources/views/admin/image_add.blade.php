<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/favicon.ico"/>
</head>
<body>
            <div class="card col-lg-12 grid-margin stretch-card">
                <div class="card-body">
                    <form role="form" action="{{route('admin_image_store',['product_id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-lg-12" >
                        <h4 class="form-group">{{$data->title}}</h4>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control form-control-sm" name="image"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Image</button>
                        </div>
                        </div>
                    </form>
                    <div class="card">
                     <div class="card-body">
                      <table class="table table-bordered" width="100%">

                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Title </th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)

                            <tr >
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img class="w3-border w3-padding" src="{{Illuminate\Support\Facades\Storage::url($rs->image)}}" height="100px" alt="">
                                    @endif
                                </td>
                                <td><a href="{{route('admin_image_delete', ['id' => $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Delete!!!')">
                                        <img src="{{asset('assets/admin/images')}}/delete.png" height="40px" > </a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                     </div>
                    </div>
            </div>



</body>
</html>
