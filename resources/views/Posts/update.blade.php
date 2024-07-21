@extends('layouts.app')

@section('content')
    <h1>Blog Post Updating</h1>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}" required></input>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" required >{{ $post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
    

@endsection

