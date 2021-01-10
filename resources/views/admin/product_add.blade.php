@extends('layouts.admin')


@section('title','Admin DashBoard')
@section('javascript')
    <script src=" https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"    ></script>
@endsection
@section('content')
    <div class="main-panel">

        <div class="content-wrapper">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form role="form" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Add Product</h4>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control form-control-lg" name="category_id" id="exampleFormControlSelect1">
                                @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control form-control-sm" name="description" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Keyword</label>
                            <input type="text" class="form-control form-control-sm" name="keywords"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="body" name="detail" ></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#body' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control form-control-sm" name="image"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection

