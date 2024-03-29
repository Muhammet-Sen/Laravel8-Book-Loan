@extends('layouts.home')


@section('title','Contact Us - '. $setting->title)

@section('content')

    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="page-breadcrumb">
                        <h2>Contact us<span>.</span></h2><br>
                        {!! $setting->contact !!}
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </section>

    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('home.message')
                    <form action="{{route('sendmessage')}}" class="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7">
                                <input type="text" name="name" placeholder="Name & Surname">
                            </div>
                            <div class="col-lg-5">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="email" placeholder="E-mail">
                                <input type="text" name="subject" placeholder="Subject">
                                <textarea  name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-lg-12 text-right">
                                <button type="submit">Send message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="contact-widget">
                        <div class="cw-item">
                            <h5>Location</h5>
                            <ul>
                                <li>{!! $setting->address !!} </li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>Phone</h5>
                            <ul>
                                <li>{!! $setting->phone !!}</li>
                                <li>{!! $setting->fax !!}</li>
                            </ul>
                        </div>
                        <div class="cw-item">
                            <h5>E-mail</h5>
                            <ul>
                                <li>{!! $setting->email !!}</li>
                                <li>{!! $setting->smtp_email !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
                            height="560" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->



@endsection

