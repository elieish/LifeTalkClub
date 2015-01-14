@extends('layouts.default')
@section('title')
    <title>Life Talk Club | Password Remind</title>
@show
@section('content')
<div id="wrapper">

            <!-- PAGE TITLE -->
            <header id="page-title"> <!-- style="background-image:url('assets/images/demo/parallax_bg.jpg')" -->
                <!--
                    Enable only if bright background image used
                    <span class="overlay"></span>
                -->

                <div class="container">
                    <h1>Password Remind</h1>

                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Password Remind</li>
                    </ul>
                </div>
            </header>

            <section class="container">
            <div>
                        @if(Session::has('error'))
                            <div class="alert alert-warning">
                                {{ Session::get('error') }}
                            </div>
                        @elseif (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif


                        </div>
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <form action="/password/index" method="POST">
                               <input class="form-control" type="email" placeholder='Email' name="email">
                               <br>
                               <input type="submit" class="btn btn-primary btn-lg" value="Send Reminder">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
</div>

@stop
