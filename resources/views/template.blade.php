@extends('layouts.index')

@section('content')

    <section id="intro">

        <div class="intro-overlay"></div>

        <div class="intro-content">
            <div class="row">

                <div class="col-twelve">

                    <h5>Hello!</h5>
                    <h1>Hello!</h1>

{{--                    <ul>--}}
{{--                       @foreach($kard as $kard)--}}
{{--                          <li>{{$kard->fullname}}</li>--}}
{{--                            @endforeach--}}
{{--                    </ul>--}}

                    <p class="intro-position">
                        <span>Backend Developer</span>
                        <span>UI/UX Designer</span>
                    </p>

                    <a class="button stroke smoothscroll" title="" href="{{ url('resume') }}" target="_blank">More About Me</a>
                </div>

            </div>
        </div> <!-- /intro-content -->

        <ul class="intro-social">
            <li><a href= "https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul> <!-- /intro-social -->

    </section> <!-- /intro -->

    <!-- CTA Section
    ================================================== -->
    <section id="cta" class="grey-section">

        <div class="row cta-content">

            <div class="col-twelve section-ads">

                <h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" target="_blank">Styleshout Recommends
                        Dreamhost.</a></h2>

                <p class="lead">
                    Looking for an awesome and reliable webhosting? Try <a
                            href="https://www.google.com/search?q=cats+foto&tbm=isch&source=univ&sa=X&ved=2ahUKEwj9so3gu6rkAhXG-6QKHSHdDMEQsAR6BAgIEAE&biw=1617&bih=941" target="_blank"><span>DreamHost</span></a>.
                    Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
                    <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
                </p>

                <div class="action">
                    <a class="button button-primary large" href="https://www.independent.co.uk/news/science/crazy-cat-lady-dogs-mental-health-depression-anxiety-a9074461.html"target="_blank">Sign
                        Up Now</a>
                </div>

            </div>

        </div> <!-- /cta-content -->

    </section> <!-- /cta -->
@stop


