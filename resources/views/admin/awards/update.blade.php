@extends('layouts.admin')

@section('content')
    <h1>Update Prizes</h1>

    {!! Form::model($awards,['method' => 'PATCH','action'=>['AwardsController@update',$awards->id]]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('award_name', 'Award Name:') !!}
        {!! Form::text('award_name', null , ['class' => 'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Update Prize', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop