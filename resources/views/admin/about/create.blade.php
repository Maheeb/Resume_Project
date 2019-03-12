@extends('layouts.admin')

@section('content')
    <h1>Create About</h1>

    {!! Form::open(['method' => 'POST','action'=>'AboutController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('fname', 'First Name:') !!}
        {!! Form::text('fname', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('lname', 'Last Name:') !!}
        {!! Form::text('lname', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null , ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('abinfo', 'Information:') !!}
        {!! Form::textarea('abinfo', null , ['class' => 'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create About', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop