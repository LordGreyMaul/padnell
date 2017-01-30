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