@extends('layouts.inner')
@section('content')
    <div class="container-fluid backBox">
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 subpage-header">
                            Contact the Club
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding: 50px;">
                <div class="col-md-10 col-md-offset-1">
                    <img src="/img/web/padnell.png" alt="Padnell Rovers Contact Us" width="30%" class="center-block">
                    <hr>
                    <p>Should you wish to contact the club, please do so by using the form below or
                    using one of the many social networks we have running.</p>
                    <p>Padnell Rovers FC are currently registered and affiliated with Hampshire FA, The Mid Solent Youth
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email Address</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="text-area">Your Message</label>
                            <textarea class="form-control" name="text-area" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


@stop