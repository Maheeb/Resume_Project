@extends('layouts.admin')

@section('content')
    <h1>All Interests</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Update Interests</th>
            <th>Delete Interests</th>

        </tr>
        </thead>
        <tbody>
        @if ($inters)

            @foreach($inters as $inter)

                <tr>
                    <td>{{$inter->id}}</td>
                    <td>{{$inter->inter_des}}</td>
                    <td><a href="{{route('interests.edit',$inter->id)}}">Update Interests</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['InterestController@destroy',$inter->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete Interests', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>

                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop