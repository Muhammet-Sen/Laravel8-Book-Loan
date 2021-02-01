@extends('layouts.home')


@section('title','References - '. $setting->title)

@section('content')



    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>References<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">

                </div>
            </div>
        </div>
    </section>
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {!! $setting->references !!}
                </div>
                <div class="col-lg-3 offset-lg-1">

                </div>
            </div>
        </div>
    </div>



@endsection
