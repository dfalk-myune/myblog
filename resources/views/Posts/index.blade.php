@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary" >Create Post</a>
    
        
    <u1>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}" >{{ $post->title }}</a>
        </li>
        @endforeach

    </ul>
    

@endsection

