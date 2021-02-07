@extends('layouts.home')
@section('title', 'FAQ')
@section('content')
<br>
<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-breadcrumb">
                    <h2>Frequently Asked Questions<span>.</span></h2>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($datalist as $rs)
                   <h4>{{$rs->question}}</h4>

                   {!! $rs->answer !!}
                  <hr>
             @endforeach
            </div>
        </div>
    </div>
</div>
<br>
@endsection
