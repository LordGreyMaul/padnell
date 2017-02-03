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
                    <div class="col-md-6 fixturebox">
                        <h3>Latest Result</h3>
                        <div class="col-md-12 text-center">
                            <div class="col-md-5">
                                <img src="{{URL::asset('/img/web/padnell.png')}}" alt="Padnell Logo" width="70px"
                                     height="70px">
                                <h2>Padnell Under 12's</h2>
                                <ul>
                                    <li>Lennox (31)</li>
                                    <li>Bailey (44)</li>
                                    <li>Oakley (51)</li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h1>3-3</h1>
                            </div>
                            <div class="col-md-5">
                                <img src="{{URL::asset('/img/web/badge.png')}}" alt="Padnell Logo" width="70px"
                                     height="70px">
                                <h2>Stubbington Under 12's</h2>
                                <ul>
                                    <li>Rodgers (36)</li>
                                    <li>Morris (52)</li>
                                    <li>Bart (78)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fixtures">
                        <h3>Latest Fixtures</h3>
                        <div class="col-md-12 text-center">
                            <div class="col-md-5">
                                <h2>Padnell Under 12's</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>VS</h2>
                            </div>
                            <div class="col-md-5">

                                <h2>Stubbington Youth</h2>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="col-md-5">
                                <h2>Padnell Under 10's</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>VS</h2>
                            </div>
                            <div class="col-md-5">

                                <h2>Warshash Wasps</h2>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="col-md-5">
                                <h2>Padnell Under 12's</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>VS</h2>
                            </div>
                            <div class="col-md-5">

                                <h2>Boreham Wood</h2>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="col-md-5">
                                <h2>Padnell Under 9's</h2>
                            </div>
                            <div class="col-md-2">
                                <h2>VS</h2>
                            </div>
                            <div class="col-md-5">

                                <h2>Lee on solent</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container padnellBox">
        <div class="col-md-12">
            <h2 class="miniTitle">We are Padnell</h2>
            <p>Padnell Rovers FC› are currently registered and affiliated with   Hampshire FA, The Mid Solent Youth
                Football league, and the Portsmouth Youth football league for 2017/18 season.</p>
            <p>OUR AFFILIATION NUMBER FOR 2017/18 SEASON IS:</p>

                <p>We are proud to say that after a lot of hard work, our club has now obtained the expected charter standard status, we are looking to progress our club with this in mind.
                As a club we abide by the English FA's guidelines and follow and heavily promote the FA Respect campaign at all times around our club.
                We ask all involved with our club to take the time to read the clubs rule book in order to follow all the guidelines expected in youth football.
                Many Thanks </p>
        </div>
    </div>
    <!-- End of content -->
@stop
