@extends('layouts.default')
@section('content')
  <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>MEMBERSHIP REGISTRATION FORM</h2>
                <p class="lead"></p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>

                <form id="msform" action='/members/save/' method='POST'>
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
                        {{ Form::label('*Introducer Number', 'Introducer Number *') }}
                        {{ Form::text('intronumber', Input::old('intronumber'), array('class' =>'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Tel Number', 'Tel Number *') }}
                        {{ Form::text('telnumber', Input::old('telnumber'), array('class' =>'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Surname', 'Surname *') }}
                        {{ Form::text('surname', Input::old('surname'), array('class' =>'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Initials', 'Initials *') }}
                        {{ Form::text('initials', Input::old('initials'), array('class' =>'form-control')) }}
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
                            {{ Form::text('dob', Input::old('dob'), array('class' => 'form-control')) }}
                            @if ($errors->has('dob')) <p class="help-block red">*{{ $errors->first('dob') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {{ Form::label('Initials', 'Initials *') }}
                            {{ Form::text('initials', Input::old('initials'), array('class' => 'form-control')) }}
                            @if ($errors->has('initials')) <p class="help-block red">*{{ $errors->first('initials') }}</p> @endif
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
                            {{ Form::label('Username', 'Username *') }}
                            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Password', 'Password *') }}
                            {{ Form::text('password', Input::old('password'), array('class' => 'form-control')) }}
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Confirm Password', 'Confirm Password *') }}
                            {{ Form::text('cpassword', Input::old('cpassword'), array('class' => 'form-control')) }}
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
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Branch Name', 'Branch Name *') }}
                            {{ Form::text('branchname', Input::old('branchname'), array('class' => 'form-control')) }}
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Branch Code', 'Branch Code *') }}
                            {{ Form::text('branchcode', Input::old('branchcode'), array('class' => 'form-control')) }}
                        </div>

                        <div class='form-group'>
                            {{ Form::label('Account Number', 'Account Number *') }}
                            {{ Form::text('accnumber', Input::old('accnumber'), array('class' => 'form-control')) }}
                        </div>

                        <input type="button" id="previous" class="previous action-button" value="Previous" />
                        {{ Form::submit('Submit', array('class' => 'submit action-button', 'value' => 'Submit')) }}
                    </fieldset>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@stop
