@extends('layouts.admin')


@section('title','Admin DashBoard')
@section('javascript')
    <script src=" https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"    ></script>
@endsection
@section('content')


        <div class="content-wrapper">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form role="form" action="{{route('admin_faq_update',['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Edit FAQ</h4>


                        <div class="form-group">
                            <label>Position</label>
                            <input type="number" class="form-control" name="position" value="{{$data->position}}" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->question}}" name="question" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea id="body" name="answer" >{{$data->answer}}</textarea>
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
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>


    <!-- main-panel ends -->
@endsection

