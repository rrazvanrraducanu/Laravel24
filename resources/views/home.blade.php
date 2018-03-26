@extends('master')

@section('content')

    <div class="well">

        {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

        <fieldset>

            <legend>Legend</legend>

            <!-- Email -->
            <div class="form-group">
                {!! Form::label('user', 'Username:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-4">
                    {!! Form::text('email', $value = null, ['class' => 'form-control', 'placeholder' => 'username']) !!}
                </div>
            </div>

            <!-- Password -->
            <div class="form-group">
                {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-4">
                    {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                    <div class="checkbox">
                        {!! Form::label('checkbox', 'Remember Me') !!}
                        {!! Form::checkbox('checkbox') !!}
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                </div>
            </div>

        </fieldset>

        {!! Form::close()  !!}

    </div>