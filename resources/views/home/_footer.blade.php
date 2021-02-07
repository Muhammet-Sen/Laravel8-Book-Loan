@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Footer Section Begin -->
<footer class="footer-section spad">
    <div class="container">
        <div class="newslatter-form">
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="text" placeholder="Your email address">
                        <button type="submit">Subscribe to our newsletter</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-widget">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="{{route('aboutus')}}"><h4>About us</h4></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="{{route('references')}}"><h4>References</h4></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="{{route('faq')}}"><h4>FAQ</h4></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="{{route('contact')}}"><h4>Contact</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                @if($setting->instagram !=null)<a href="{{$setting->instagram}}" target="_blank" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>@endif
                <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                @if($setting->facebook !=null)<a href="{{$setting->facebook}}" target="_blank"  class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>@endif
                @if($setting->twitter !=null)<a href="{{$setting->twitter}}" target="_blank" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>@endif
                @if($setting->youtube !=null)<a href="{{$setting->youtube}}" target="_blank" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>@endif
                <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>
        </div>

        <div class="container text-center pt-5">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{ $setting->company }}
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>


    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.slicknav.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/js/mixitup.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
