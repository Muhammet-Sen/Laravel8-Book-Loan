@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')


@section('title', $setting->title)
@section('description')
    {{ $setting->description }}
@endsection
@section('keywords', $setting->keywords)

@section('content')
    @include('home._slider')
    <br><br>
    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>Karabük Üniversitesi <br />Kamil Güleç Kütüphanesi</h2>
                        </div>
                        <p>Üniversitemizin eğitim – öğretim ve araştırma faaliyetlerini  desteklemek amacı ile her türlü basılı ve elektronik bilgi kaynağını sağlamak,
                            belirli bir sistem dahilinde düzenlemek, en hızlı ve en kolay biçimde kullanıcıların hizmetine sunmaktır.
                            Sürekli olarak bilgi kaynaklarının güncellenmesi, yenilenmesi, koleksiyonun geliştirilmesi ve kullanıcıların
                            kütüphane hizmetlerinden en etkin şekilde yararlanabilmelerini sağlamak.Kütüphane hizmetlerinin dünya standartlarına ulaşmasını sağlamak.</p>
                        <a href="{{route('aboutus')}}" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-md-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="{{asset('assets')}}/img/kbu4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <strong><h1>Welcome to BooK WorlD</h1></strong><br><br>
                    <section class="hero-slider">
                        <div class="hero-items owl-carousel ">
                            @foreach($slider as $rs)
                                <div class="single-slider-item set-bg" data-setbg="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h1>{{$rs->title}}</h1><br><br><br><br><br><br><br><br>
                                                <a href="{{route('product',['id'=>$rs->id])}}" class="primary-btn">See More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                @foreach($slider as $rs)
                    <div class="col-lg-3 col-sm-6 mix all dresses bags">
                        <div class="single-product-item" >
                            <figure>
                                <a href="{{route('product',['id'=>$rs->id])}}"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt=""></a>
                                <div class="p-status">new</div>
                            </figure>
                            <div class="product-text">

                                <a href="{{route('product',['id'=>$rs->id])}}"><h6>{{$rs->title}}</h6></a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Product End -->
    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($picked as $rs)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product-item">
                            <figure>
                                <div class="p-status">new</div>
                                <div class="hover-icon">
                                    <a href="{{route('product',['id'=>$rs->id])}}" class="pop-up"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt=""></a>
                                </div>
                            </figure>
                            <div class="product-text">
                                <h6>{{$rs->title}}</h6>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->


@endsection
