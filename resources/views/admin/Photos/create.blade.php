@extends('layouts.admin')

@section('content')
    <h1>Create Photo</h1>

    {!! Form::open(['method' => 'POST','action'=>'PhotoController@store','files'=>true]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('file', 'Photo:') !!}
        {!! Form::file('file', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Create Photos', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop