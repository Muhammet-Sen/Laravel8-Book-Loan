@extends('layouts.home')
@section('title', 'FAQ')
@section('content')
<br>
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
