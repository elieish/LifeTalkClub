@extends('layouts.default')
@section('content')
  <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>MEMBERSHIP REGISTRATION FORM</h2>
                <p class="lead"></p>
            </div>
            <div class="row contact-wrap">
                   @if(Session::has('success'))
                    <div class="status alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif


                    @if(Session::has('fail'))
                    <div class="status alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                <form id="msform" action='/members/save' method='POST'>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Introducer Details</li>
                        <li>Member Details</li>
                        <li>Login Details</li>
                        <li>Bank Details</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                    <h2 class="fs-title">Introducer Details</h2>
                    <h3 class="fs-subtitle">This is step 1</h3>
                     <div class="form-group">
                        {{ Form::label('*Introducer Names', 'Introducer Names *') }}
                        {{ Form::text('intronumber', Input::old('intronumber'), array('class' =>'form-control','id' =>'intronumber')) }}
                    </div>
                    <input type="button" id="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                    <h2 class="fs-title">Member Details</h2>
                    <h3 class="fs-subtitle">This is step 2</h3>
                        <div class="form-group">
                            {{ Form::label('Title', 'Title *') }}
                            {{ Form::select('title', array('Mr' => 'Mr', 'Mrs' => 'Mrs', 'Ms' => 'Ms'),null,array('class' => 'form-control')) }}
                            @if ($errors->has('title')) <p class="help-block red">*{{ $errors->first('title') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Cell Number', 'Cell Number *') }}
                            {{ Form::text('cell', Input::old('cell'), array('class' => 'form-control')) }}
                            @if ($errors->has('cell')) <p class="help-block red">*{{ $errors->first('cell') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Tel Number', 'Tel Number *') }}
                            {{ Form::text('tel', Input::old('tel'), array('class' => 'form-control')) }}
                            @if ($errors->has('tel')) <p class="help-block red">*{{ $errors->first('tel') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Date of Birth', 'Date of Birth *') }}
                            {{ Form::text('dob', null, array('type' => 'text', 'class' => 'form-control datepicker','placeholder' => 'eg. mm-dd-yyyy', 'id' => 'dob','data-date-viewmode' => 'years','data-date-format' => 'dd-mm-yyyy','readonly' => 'readonly')) }}
                            @if ($errors->has('dob')) <p class="help-block red">*{{ $errors->first('dob') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Initials', 'Initials *') }}
                            {{ Form::text('initials', Input::old('initials'), array('class' => 'form-control')) }}
                            @if ($errors->has('initials')) <p class="help-block red">*{{ $errors->first('initials') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Gender', 'Gender *') }}
                            {{ Form::select('gender', array('M' => 'Male', 'F' => 'Female'),null,array('class' => 'form-control')) }}
                            @if ($errors->has('gender')) <p class="help-block red">*{{ $errors->first('gender') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('First Names', 'First Names *') }}
                            {{ Form::text('firstname', Input::old('firstname'), array('class' => 'form-control')) }}
                            @if ($errors->has('firstname')) <p class="help-block red">*{{ $errors->first('firstname') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Surname', 'Surname *') }}
                            {{ Form::text('surname', Input::old('surname'), array('class' => 'form-control')) }}
                            @if ($errors->has('surname')) <p class="help-block red">*{{ $errors->first('surname') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('ID', 'ID *') }}
                            {{ Form::text('idnumber', Input::old('idnumber'), array('class' => 'form-control')) }}
                            @if ($errors->has('idnumber')) <p class="help-block red">*{{ $errors->first('idnumber') }}</p> @endif
                        </div>

                        <input type="button" id="previous" class="previous action-button" value="Previous" />
                        <input type="button" id="next" class="next action-button" value="Next" />

                    </fieldset>
                    <fieldset>
                    <h2 class="fs-title">Login Details</h2>
                    <h3 class="fs-subtitle">This is step 3</h3>

                        <div class='form-group'>
                            {{ Form::label('Email Address', 'Email Address *') }}
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
                            @if ($errors->has('username')) <p class="help-block red">*{{ $errors->first('username') }}</p> @endif
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Password', 'Password *') }}
                            {{ Form::password('password',array('class' => 'form-control')) }}
                            @if ($errors->has('password')) <p class="help-block red">*{{ $errors->first('password') }}</p> @endif
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Confirm Password', 'Confirm Password *') }}
                            {{ Form::password('password_confirmation',array('class' => 'form-control')) }}
                             @if ($errors->has('password_confirmation')) <p class="help-block red">*{{ $errors->first('password_confirmation') }}</p> @endif
                        </div>
                        <input type="button" id="previous" class="previous action-button" value="Previous" />
                        <input type="button" id="next" class="next action-button" value="Next" />


                    </fieldset>

                    <fieldset>
                    <h2 class="fs-title">Bank Details</h2>
                    <h3 class="fs-subtitle">This is step 4</h3>

                        <div class='form-group'>
                            {{ Form::label('Name of Bank', 'Name of Bank *') }}
                            {{ Form::text('bankname', Input::old('bankname'), array('class' => 'form-control')) }}
                            @if ($errors->has('bankname')) <p class="help-block red">*{{ $errors->first('bankname') }}</p> @endif
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Branch Name', 'Branch Name *') }}
                            {{ Form::text('branchname', Input::old('branchname'), array('class' => 'form-control')) }}
                            @if ($errors->has('branchname')) <p class="help-block red">*{{ $errors->first('branchname') }}</p> @endif
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Branch Code', 'Branch Code *') }}
                            {{ Form::text('branchcode', Input::old('branchcode'), array('class' => 'form-control')) }}
                            @if ($errors->has('branchcode')) <p class="help-block red">*{{ $errors->first('branchcode') }}</p> @endif
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Account Number', 'Account Number *') }}
                            {{ Form::text('accnumber', Input::old('accnumber'), array('class' => 'form-control')) }}
                            @if ($errors->has('accnumber')) <p class="help-block red">*{{ $errors->first('accnumber') }}</p> @endif
                        </div>

                        <input type="button" id="previous" class="previous action-button" value="Previous" />
                        {{ Form::submit('Submit', array('class' => 'submit action-button', 'value' => 'Submit')) }}
                    </fieldset>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@stop
