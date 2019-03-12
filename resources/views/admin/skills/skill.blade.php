@extends('layouts.admin')

@section('content')
    <h1>All Skills</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Work Flow</th>
            <th>Update Skills</th>
            <th>Delete Skills</th>

        </tr>
        </thead>
        <tbody>
        @if ($skills)

            @foreach($skills as $skill)

                <tr>
                    <td>{{$skill->id}}</td>
                    <td>{{$skill->flow}}</td>
                    <td><a href="{{route('skills.edit',$skill->id)}}">Update Skills</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['SkillsController@destroy',$skill->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete Skills', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>

                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop