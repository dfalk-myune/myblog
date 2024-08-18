@extends('layouts.app')

@section('content')
    <h1>Posts (content for admin)</h1>
    

    <a href="{{ route('welcome')}}"  style="margin-right: 10px;"> Back </a>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary" >Create Post</a>

    <u1>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('admin.posts.show', $post->id) }}" >{{ $post->title }} 
                @if($post->user_id && $post->user) 
                    ({{ $post->user->name }})
                @else
                    (Unknown User)
                @endif</a>
        </li>
        @endforeach

    </ul>
    

@endsection
