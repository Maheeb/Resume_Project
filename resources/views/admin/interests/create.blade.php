@extends('layouts.admin')

@section('content')
    <h1>Create Interests</h1>

    {!! Form::open(['method' => 'POST','action'=>'InterestController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('inter_des', 'Description:') !!}
        {!! Form::textarea('inter_des', null , ['class' => 'form-control']) !!}

    </div>




    <div class="form-group">

        {!! Form::submit('Create Interests', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop