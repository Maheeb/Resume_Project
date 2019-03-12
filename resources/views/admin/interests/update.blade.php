@extends('layouts.admin')

@section('content')
    <h1>Update Interests</h1>

    {!! Form::model($inters,['method' => 'PATCH','action'=>['InterestController@update',$inters->id]]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('inter_des', 'Description:') !!}
        {!! Form::textarea('inter_des', null , ['class' => 'form-control']) !!}

    </div>




    <div class="form-group">

        {!! Form::submit('Update Interests', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop