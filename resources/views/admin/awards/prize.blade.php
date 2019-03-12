@extends('layouts.admin')

@section('content')
    <h1>All Awards</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Award Name</th>
            <th>Update Awards</th>
            <th>Delete Awards</th>

        </tr>
        </thead>
        <tbody>
        @if ($awards)

            @foreach($awards as $award)

                <tr>
                    <td>{{$award->id}}</td>
                    <td>{{$award->award_name}}</td>
                    <td><a href="{{route('awards.edit',$award->id)}}">Update Awards</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['AwardsController@destroy',$award->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete Awards', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop