@extends('layouts.admin')

@section('content')
    <h1>All Experiences</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Designation</th>
            <th>Organization</th>
            <th>Information</th>
            <th>period</th>
            <th>Update Experiences</th>
            <th>Delete Experiences</th>
        </tr>
        </thead>
        <tbody>
        @if ($exps)

            @foreach($exps as $exp)

                <tr>
                    <td>{{$exp->id}}</td>
                    <td>{{$exp->title}}</td>
                    <td>{{$exp->des}}</td>
                    <td>{{$exp->sh}}</td>
                    <td>{{$exp->ex_info}}</td>
                    <td>{{$exp->period}}</td>
                    <td><a href="{{route('experience.edit',$exp->id)}}">Update Experiences</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['ExController@destroy',$exp->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete Experience', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>

                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop