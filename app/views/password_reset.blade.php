@extends('layouts.default')
@section('title')
    <title>Life Talk Club | Reset Password</title>
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
                    <h1>Password Reset</h1>

                    <ul class="breadcrumb">
                        <li><a href="home">Home</a></li>
                        <li class="active">Password Reset</li>
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
            <div class="row">
                    <div class="col-md-4">
                       <form action="/password/reset" method="POST">
                           <div class="row">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input class="form-control" placeholder='Email' type="email" name="email">
                                <input class="form-control" placeholder='New Password' type="password" name="password">
                                <input class="form-control" type="password" placeholder='Repeat Password' name="password_confirmation">
                           </div>
                           <br>
                           <input type="submit" class="btn btn-primary btn-lg" value="Reset Password">
                        </form>
                    </div>
            </div>

            </section>
</div>

@stop
