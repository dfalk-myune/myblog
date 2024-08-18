@extends('layouts.app')

@section('content')
    <h1>Post from: '@if($post->user_id && $post->user) 
        {{ $post->user->name }}
    @else
        Unknown User
    @endif</a>' (Content for Admin)</h1>
    
    <a href="{{ route('admin.posts.index')}}"  style="margin-right: 10px;"> Back </a>
    
    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin-right: 10px;">Delete</button>
    </form>

    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">Edit</a>
    <ul>
        <li>ID: {{ $post->id}}</li>
        <li>Title: {{$post->title}}</li>
        <li>Content:{{$post->content}}</li>
        <li>Blogger:  
        @if($post->user_id && $post->user) 
                    {{ $post->user->name }}
                @else
                    Unknown User
                @endif</a>
        </li>

    </ul>
    

@endsection
