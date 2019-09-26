
@extends('layouts.index')

<!-- about section
   ================================================== -->
@section('content')
<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">

                <img src="images/profile-pic.jpg" alt="Profile Picture">

                <p class="lead">
{{--                   @foreach($kard as $kard)--}}
                        {{$kard->about}}
{{--                    @endforeach</p>--}}

{{--                <a href="{{route('about.show')}}"> About </a>--}}
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <p>  {{$kard->profile}}  </p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span> {{$kard->fullname}} </span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span> {{$kard->birth_date}} </span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span> {{$kard->job}} </span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span> {{$kard->email}} </span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>
            <p> {{$kard->skills}} </p>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                </li>
                <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>PHP</strong>
                </li>
                <li>

                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Wordpress</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">

            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="#" title="Download CV" class="button button-primary">Download CV</a>
        </div>
    </div>

</section> <!-- /process-->
@stop

