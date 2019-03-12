@extends('layouts.admin')

@section('content')
    <h1>Create Education</h1>

    {!! Form::open(['method' => 'POST','action'=>'EducationController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('uni', 'University:') !!}
        {!! Form::text('uni', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('degree', 'Degree:') !!}
        {!! Form::text('degree', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('sub', 'Subject:') !!}
        {!! Form::text('sub', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('cgpa', 'CGPA:') !!}
        {!! Form::text('cgpa', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('period', 'Period:') !!}
        {!! Form::text('period', null , ['class' => 'form-control']) !!}

    </div>




    <div class="form-group">

        {!! Form::submit('Create Education', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop