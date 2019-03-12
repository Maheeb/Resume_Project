@extends('layouts.admin')

@section('content')
    <h1>All Photos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Update Photo</th>
            <th>Delete Photo</th>
        </tr>
        </thead>
        <tbody>
        @if ($photos)

            @foreach($photos as $photo)

                <tr>
                    <td>{{$photo->id}}</td>
                    {{--<td><img height="50" src="{{$photo->file? $photo->file:'http://placehold.it/400x400'}}" alt=""></td>--}}
                    <td> <img height="60" width="60" src="{{ asset('images/' . $photo->file) }}" /> </td>
                    <td><a href="{{route('photos.edit',$photo->id)}}">Update Photos</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['PhotoController@destroy',$photo->id]]) !!}



                        <div class="form-group">

                            {!! Form::submit('Delete Photo', ['class' => 'btn btn-danger']) !!}

                        </div>



                        {!! Form::close() !!}



                    </td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@stop