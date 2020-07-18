@extends('inc.boardnavbar')

@section('content')

<h1 class="p-5">Dashboard</h1>
                <div class="card mr-4 ml-4 mb-3 p-3">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/create" class="btn btn-primary">Create Post</a></h3>
                            <h3>Your Blog Posts</h3>
                            @if(count($post) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($post as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right mr-5'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach 
                            </table>
                            @else
                                <p>You have no posts</p>
                            @endif
                        </div>
                    </div>
                </div>    
@endsection