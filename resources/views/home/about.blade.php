@extends('layouts.home')


@section('title','About Us - '. $setting->title)

@section('content')


    <!-- Header Info End -->
    <!-- Header End -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>About us<span>.</span></h2>
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
                    {!! $setting->about_us !!}
                </div>
                <div class="col-lg-3 offset-lg-1">

                </div>
            </div>
        </div>
    </div>



    <!-- Footer Section Begin -->

@endsection
