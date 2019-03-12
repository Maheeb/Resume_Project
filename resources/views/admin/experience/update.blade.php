@extends('layouts.admin')

@section('content')
    <h1>Update Experiences</h1>

    {!! Form::model($exps,['method' => 'PATCH','action'=>['ExController@update',$exps->id]]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('des', 'Designation:') !!}
        {!! Form::text('des', null , ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('sh', 'Organizations:') !!}
        {!! Form::text('sh', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('ex_info', 'Organizations:') !!}
        {!! Form::textarea('ex_info', null , ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('period', 'Period:') !!}
        {!! Form::text('period', null , ['class' => 'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Update Experience', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop