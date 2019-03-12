@extends('layouts.admin')

@section('content')
    <h1>Create Skills</h1>

    {!! Form::open(['method' => 'POST','action'=>'SkillsController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('flow', 'Skills') !!}
        {!! Form::text('flow', null , ['class' => 'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::submit('Create Skills', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop