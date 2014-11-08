@extends('layouts.default')
@section('content')
  <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Drop Your Message</h2>
                <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>

                {{ Form::open(array('url' => 'register_action','class' => 'contact-form', 'id' => 'main-contact-form')) }}
                    <!-- Introducor Details -->
                    <div class="panel panel-primary">
                      <div class="panel-heading">INTRODUCER DETAILS</div>
                      <div class="panel-body">
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    {{ Form::label('Intro Number', 'Intro Number *') }}
                                    {{ Form::text('intronumber', Input::old('intronumber'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Tel Number', 'Tel Number *') }}
                                    {{ Form::text('telnumber', Input::old('telnumber'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Surname', 'Surname *') }}
                                    {{ Form::text('surname', Input::old('surname'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Initials', 'Initials *') }}
                                    {{ Form::text('initials', Input::old('initials'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                            </div>
                      </div>
                    </div>
                     <!-- End Introducor Details -->

                    <!-- Particulars Details -->
                     <div class="panel panel-primary">
                      <div class="panel-heading">PARTICULARS OF MEMBERS</div>
                      <div class="panel-body">
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="form-group">
                                    {{ Form::label('Title', 'Title *') }}
                                    {{ Form::text('title', Input::old('title'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Tel Number', 'Tel Number *') }}
                                    {{ Form::text('telnumber', Input::old('telnumber'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Date of Birth', 'Date of Birth *') }}
                                    {{ Form::text('dob', Input::old('dob'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Initials', 'Initials *') }}
                                    {{ Form::text('initials', Input::old('initials'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('ID', 'ID *') }}
                                    {{ Form::text('id', Input::old('id'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('First Names', 'First Names *') }}
                                    {{ Form::text('firstname', Input::old('firstname'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('Surname', 'Surname *') }}
                                    {{ Form::text('surname', Input::old('surname'), array('class' => 'form-control','required' => 'required')) }}
                                </div>
                            </div>
                      </div>
                    </div>
                    <!-- End Particulars Details -->

                 <!-- Banking Details -->
                 <div class="panel panel-primary">
                  <div class="panel-heading">LOGIN DETAILS</div>
                  <div class="panel-body">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                {{ Form::label('Username', 'Username *') }}
                                {{ Form::text('username', Input::old('username'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Password', 'Password *') }}
                                {{ Form::text('password', Input::old('password'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Confirm Password', 'Confirm Password *') }}
                                {{ Form::text('cpassword', Input::old('cpassword'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                        </div>
                  </div>
                </div>
                <!-- End Banking Details -->

                 <!-- Login Details -->
                 <div class="panel panel-primary">
                  <div class="panel-heading">BANK DETAILS</div>
                  <div class="panel-body">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                {{ Form::label('Name of Bank', 'Name of Bank *') }}
                                {{ Form::text('bankname', Input::old('bankname'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Branch Name', 'Branch Name *') }}
                                {{ Form::text('branchname', Input::old('branchname'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Branch Name', 'Branch Name *') }}
                                {{ Form::text('branchname', Input::old('branchname'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Branch Code', 'Branch Code *') }}
                                {{ Form::text('branchcode', Input::old('branchcode'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Account Number', 'Account Number *') }}
                                {{ Form::text('accnumber', Input::old('accnumber'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('Account Holders Initials', 'Account Holders Initials *') }}
                                {{ Form::text('holderinitials', Input::old('holderinitials'), array('class' => 'form-control','required' => 'required')) }}
                            </div>
                        </div>
                  </div>
                </div>
                <!-- End Login Details -->
                {{ Form::close() }}
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@stop
