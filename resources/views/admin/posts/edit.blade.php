@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post of @if($post->user_id && $post->user) 
        '{{ $post->user->name }}'
    @else
        'Unknown User'
    @endif</a>(Content for Admin)</h1>
    <a href="{{ url()-> previous()}}"  style="margin-right: 10px;"> Back </a>
    
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required></input>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection