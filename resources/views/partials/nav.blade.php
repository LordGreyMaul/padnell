<!-- Navbar Start -->
<div class="container-fluid containNav">
    <div class="col-md-12">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">PRFC</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{URL::asset('/')}}">Home</a></li>
                        <li><a href="{{URL::asset('about')}}">About Padnell</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teams<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Under 9's</a></li>
                                <li><a href="#">Under 10's</a></li>
                                <li><a href="#">Under 11's</a></li>
                                <li><a href="#">Under 12's</a></li>
                            </ul>
                        </li>
                        <li><a href="{{URL::asset('rules')}}">Padnell Rovers Rules</a></li>
                        <li><a href="{{URL::asset('contact')}}">Contact the Club</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-google"></span></a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!-- Navbar End -->