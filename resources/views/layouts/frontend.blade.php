<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('font-awesome-4.7.0/css/font-awesome.css')}}">
    <title>Padnell Rovers Football Club</title>
</head>
<body>
@include('partials.splash')
<!-- Content Wrapper -->
<div class='content'>
    @include('partials.nav')
    @yield('content')
</div>
<!-- End of content wrapper -->
@include('partials.footer')
