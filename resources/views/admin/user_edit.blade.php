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
@extends('layouts.admin')


@section('title','Users List')

@section('content')
<div class="content-wrapper">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card"><br>
                <form class="user" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-lg-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label>Name</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{$data->name}}" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label>Email</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{$data->email}}" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label>Phone</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{$data->phone}}" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label>Address</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{$data->address}}" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2">
                                    <label>İmage</label>
                                </div>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="image">
                                    @if ($data->profile_photo_path)
                                        <img src="{{Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="100" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary btn-user btn-block col-lg-3 ">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- main-panel ends -->

@endsection
