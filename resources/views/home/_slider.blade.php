<!-- Hero Slider Begin -->
<section class="hero-slider">
    <div class="hero-items owl-carousel ">
        @foreach($slider as $rs)
        <div class="single-slider-item set-bg" data-setbg="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>{{$rs->title}}</h1>
                        <h2>{{$rs->status}}.</h2>
                        <a href="#" class="primary-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- Hero Slider End -->
