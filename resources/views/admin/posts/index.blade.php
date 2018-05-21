@extends('layouts.admin')


@section('content')


    <h1>Post</h1>

    <table class ="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Category</th>
               
                <th>Title</th>
                <th>body</th>
                <th>created</th>
                <th>updated</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)

            @foreach($posts as $post)
        
        <tr>
        
            <td>{{$post->id}}</td>
            <td><img  height="50" src="{{$post->photo ? $post->photo->file: 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
          
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForhumans()}}</td>
            <td>{{$post->updated_at->diffForhumans()}}</td>
        </tr>
            @endforeach

            @endif
        </tbody>
    </table>

@stop