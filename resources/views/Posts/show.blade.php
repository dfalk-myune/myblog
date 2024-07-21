@extends('layouts.app')

@section('content')
    <h1>Blog Posts Details</h1>
    
    <a href="{{ url()-> previous()}}"  style="margin-right: 10px;"> Back </a>
    
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
    </form>

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
    <u1>
        <li>ID: {{ $post->id}}</li>
        <li>Title: {{$post->title}}</li>
        <li>Content:{{$post->content}}</li>

    </ul>
    

@endsection

