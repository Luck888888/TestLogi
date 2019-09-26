<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('layouts.styles')

</head>

<body id="top">
<!-- header
================================================== -->
@include('layouts/header')

<!-- intro section
================================================== -->

@yield('content')

<!-- contact
================================================== -->
{{--@include('contact')--}}

<!-- footer
================================================== -->
@include('layouts/footer')

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->

@include('layouts/scripts')

</body>
</html>
