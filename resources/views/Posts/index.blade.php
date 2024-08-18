@extends('layouts.app')

@section('content')
    <h1>Blog Posts  ({{Str::ucfirst(Auth::user()->role)  }})</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary" >Create Post</a>
    
        
    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}" >{{ $post->title }} 
                {{-- @if($post->user_id && $post->user) 
                    ({{ $post->user->name }})
                @else
                    (Unknown User)
                @endif</a> --}}
        </li>
        @endforeach

    </ul>
    

@endsection

{{-- ({{ ucfirst(Auth::user()->role) }}) --}}