@extends('layouts.admin')


@section('title','Setting')
@section('javascript')
    <script src=" https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"    ></script>
@endsection
@section('content')


        <div class="content-wrapper">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Edit Settings</h4>
                        <input type="hidden" id="id" class="form-control" name="id" value="{{$data->id}}" aria-label="Username">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" id="title" class="form-control" name="title" value="{{$data->title}}" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->description}}" name="description" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->company}}" name="company"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->address}}" name="address"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->phone}}" name="phone"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->fax}}" name="fax"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->email}}" name="email"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Smtp Server</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->smtp_server}}" name="smtp_server"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Smtp Email</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->smtp_email}}" name="smtp_email"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Smtp Password</label>
                            <input type="password" class="form-control form-control-sm" value="{{$data->smtp_password}}" name="smtp_password"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Smtp Port</label>
                            <input type="number" class="form-control form-control-sm" value="{{$data->smtp_port}}" name="smtp_port"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->facebook}}" name="facebook"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->instagram}}" name="smtp_email"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->twitter}}" name="twitter"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" class="form-control form-control-sm" value="{{$data->youtube}}" name="Youtube"  aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>About Us</label>
                            <textarea id="about_us" name="about_us" >{{$data->about_us}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#about_us' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <textarea id="contact" name="contact" >{{$data->contact}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#contact' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <div class="form-group">
                            <label>References</label>
                            <textarea id="references" name="references" >{{$data->references}}</textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#references' ) )
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
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>


    <!-- main-panel ends -->
@endsection

