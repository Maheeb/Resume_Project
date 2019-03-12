@extends('layouts.admin')

@section('content')
    <h1>Update Skills</h1>

    {!! Form::model($skills,['method' => 'PATCH','action'=>['SkillsController@update',$skills->id]]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('flow', 'Skills') !!}
        {!! Form::text('flow', null , ['class' => 'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::submit('Update Skills', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop