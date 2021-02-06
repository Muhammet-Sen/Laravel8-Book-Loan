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
                    <form role="form" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Add FAQ</h4>

                        <div class="form-group">
                            <label>Position</label>
                            <input type="number" class="form-control" name="position" value="0" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" class="form-control form-control-sm" name="question" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea id="body" name="answer" ></textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#body' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
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
                            <button type="submit" class="btn btn-primary">Add</button>
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

