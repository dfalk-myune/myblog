
@extends('layouts.app')

@section('content')
    <h1>Blog Posts Create</h1>
    
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required></input>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" required ></textarea>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
    

@endsection

