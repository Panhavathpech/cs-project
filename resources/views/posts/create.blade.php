@extends('inc.boardnavbar')

@section('content')
        <h1 class="p-5">Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
            <div class="form-group pl-5 pr-5">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group pl-5 pr-5">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group pl-5 pr-5">
                {{Form::file('cover_image')}}
            </div>
            <div class="pl-5 pr-5 pb-5">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}   
@endsection