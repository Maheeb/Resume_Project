@extends('layouts.admin')

@section('content')
    <h1>Update Photo</h1>

    {!! Form::model($photos,['method' => 'PATCH','action'=>['PhotoController@update',$photos->id],'files'=>true]) !!}
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