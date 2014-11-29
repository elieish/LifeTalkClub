@extends('layouts.default')
@section('content')
    <section id="contact-info">
        <div class="center">
            <h2>How to Reach Us?</h2>

        </div>
         @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

         @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+357 Che Guevara Road, Berea, South Africa&amp;aq=0&amp;oq=&amp;sll=-29.855257,30.99873100000002&amp;sspn=-29.855257,30.99873100000002&amp;ie=UTF8&amp;hq=&amp;+357 Che Guevara Road, Berea, South Africa&amp;ll=-29.855257,30.99873100000002&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>357 Che Guevara Road<br>
                                    Glenwood, Durban 4001</p>
                                    <p>Phone:031-201-0287/031-201-744 <br>
                                    <p>Cell:+27-613-861-287 <br>
                                    Email Address:info@lifetalkclub.com</p>
                                </address>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Drop Your Message</h2>

            </div><br><br>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="" class="contact-form" name="contact-form" method="post" action="/contact/submit">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <div class="@if ($errors->has('name')) has-error @endif">
                                <label>Name *</label>
                                {{ Form::text('name',null, array('class' =>'form-control','id' =>'name')) }}
                                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                            </div>

                        </div>
                        <div class="form-group @if ($errors->has('email')) has-error @endif">
                            <label>Email *</label>
                            {{ Form::text('email',null, array('class' =>'form-control','id' =>'email')) }}
                            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('phone')) has-error @endif">
                            <label>Phone</label>
                            {{ Form::text('phone',null, array('class' =>'form-control','id' =>'phone')) }}
                            @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('company')) has-error @endif">
                            <label>Company Name</label>
                            {{ Form::text('company',null, array('class' =>'form-control','id' =>'company')) }}
                            @if ($errors->has('company')) <p class="help-block">{{ $errors->first('company') }}</p> @endif
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="@if ($errors->has('subject')) has-error @endif form-group">
                            <label>Subject *</label>
                            {{ Form::text('subject',null, array('class' =>'form-control','id' =>'subject')) }}
                            @if ($errors->has('subject')) <p class="help-block">{{ $errors->first('subject') }}</p> @endif
                        </div>
                        <div class="form-group @if ($errors->has('message')) has-error @endif">
                            <label>Message *</label>
                            {{ Form::textarea('message',null,array('class' =>'form-control','id' =>'message')) }}
                            @if ($errors->has('message')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
                        </div>
                        <div class="form-group">
                             <input type="submit" value="Submit Message" class="btn btn-primary btn-lg">
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    @stop
