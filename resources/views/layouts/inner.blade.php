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
<header class="innerHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{URL::asset('/img/web/padnell.png')}}" alt="padnell rovers">
                <h1>Padnell Rovers Football Club</h1>
            </div>
        </div>
    </div>
</header>
@include('partials.nav')

<!-- Content -->
@yield('content')
<!-- End of content -->

@include('partials.footer')
