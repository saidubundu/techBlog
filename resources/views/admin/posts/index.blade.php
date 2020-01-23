@extends('layouts.admin')

@section('content')

    <h1>Post </h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Author</th>
            <th>Photo</th>
            <th>Category</th>
            <th>Tile</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @if($posts)
                @foreach($posts as $post)
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><img height="50" width="50" src="{{$post->photo_id ? $post->photo->file : 'No Photo'}}" alt=""></td>
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