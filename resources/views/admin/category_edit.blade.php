@extends('layouts.admin')


@section('title','Admin DashBoard')

@section('content')
        <div class="content-wrapper">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form role="form" action="{{route('admin_category_update',['id' => $data->id])}}" method="post">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Add Category</h4>

                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control form-control-lg" name="parent_id" id="exampleFormControlSelect1">
                                <option value="0">Main Category</option>
                                @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if ($rs->id ==$data->parent_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{$data->title}}" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control form-control-sm" name="description" value="{{$data->description}}" aria-label="Username">
                        </div>
                        <div class="form-group">
                            <label>Keyword</label>
                            <input type="text" class="form-control form-control-sm" name="keywords" value="{{$data->keywords}}" aria-label="Username">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                                    <option selected="selected" name="status" value="{{$data->status}}">False</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>

@endsection

