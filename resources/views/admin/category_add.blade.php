@extends('layouts.admin')


@section('title','Admin DashBoard')

@section('content')
        <div class="content-wrapper">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <form role="form" action="{{route('admin_category_create')}}" method="post">
                        @csrf
                    <div class="card-body">
                        <h4 class="card-title">Add Category</h4>

                        <div class="form-group">
                            <label>Parent</label>
                            <select class="form-control form-control-lg" name="parent_id" id="exampleFormControlSelect1">
                                <option value="0" selected="selected">Main Category</option>
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
                            <label>Status</label>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
@endsection

