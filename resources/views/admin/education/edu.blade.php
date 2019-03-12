@extends('layouts.admin')

@section('content')
    <h1>All Education</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>University</th>
            <th>Degree</th>
            <th>Subject</th>
            <th>Cgpa</th>
            <th>period</th>
            <th>Update Education</th>
            <th>Delete Education</th>
        </tr>
        </thead>
        <tbody>
        @if ($edus)

            @foreach($edus as $edu)

                <tr>
                    <td>{{$edu->id}}</td>
                    <td>{{$edu->uni}}</td>
                    <td>{{$edu->degree}}</td>
                    <td>{{$edu->sub}}</td>
                    <td>{{$edu->cgpa}}</td>
                    <td>{{$edu->period}}</td>
                    <td><a href="{{route('education.edit',$edu->id)}}">Update Education</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['EducationController@destroy',$edu->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete Education', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>

                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop