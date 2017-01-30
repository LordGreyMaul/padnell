@extends('layouts.frontend')

@section('content')
    <!-- Content Start-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="homeTitle">Welcome to Padnell Rovers <span>Football Club</span></h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <img src="{{URL::asset('/img/web/home1.PNG')}}" class="img-responsive" alt="Welcome to
                            Padnell Rovers">
                </div>
                <div class="col-md-6">
                    <h3 class="miniTitle">A Little bit about us</h3>
                    <p>Padnell Rovers were formed in the summer of 2014 starting out with 9 teams.</p>
                    <p>Padnell initially played all their home games at Padnell recreation ground before moving
                        to Paulsgrove where finally settling at Beacon View Academy school and Sevenoaks Playing
                        fields nearby.</p>
                    <p>The club boast of a mini soccer school which we see as the base of our club and we will
                        always look to produce new under 7 teams each season from our mini soccer school.</p>
                    <p>With this in mind, the club has had to meet various standards and pass certain criteria
                        in order for our club to exist, this includes ensuring the safeguarding of our children
                        which is paramount, ensuring all coaches are crc checked and FA level one qualified or
                        above, ensuring our club has a correct structure in place off the field. We are pleased
                        to say we meet all of the above and more.</p>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid backBox">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <img src="{{URL::asset('/img/web/home3.PNG')}}" alt="Padnell Rovers"
                         class="img-responsive center-block">
                </div>
            </div>
        </div>
    </div>
    <!-- End of content -->
@stop
