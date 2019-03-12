@extends('layouts.admin')

@section('content')
    <h1>Create Prizes</h1>

    {!! Form::open(['method' => 'POST','action'=>'AwardsController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('award_name', 'Award Name:') !!}
        {!! Form::text('award_name', null , ['class' => 'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Prize', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop