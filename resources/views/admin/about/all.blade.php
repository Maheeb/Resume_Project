@extends('layouts.admin')

@section('content')
    <h1>All About</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Information</th>
            <th>Update About</th>
            <th>Delete About</th>
        </tr>
        </thead>
        <tbody>
        @if ($alls)

            @foreach($alls as $all)

                <tr>
                    <td>{{$all->id}}</td>
                    <td>{{$all->fname}}</td>
                    <td>{{$all->lname}}</td>
                    <td>{{$all->address}}</td>
                    <td>{{$all->email}}</td>
                    <td>{{$all->abinfo}}</td>
                    <td><a href="{{route('about.edit',$all->id)}}">Update About</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['AboutController@destroy',$all->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete About', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>

                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop