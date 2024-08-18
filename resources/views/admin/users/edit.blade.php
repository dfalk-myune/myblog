@extends('layouts.app')

@section('content')
    <h1>Edit User : {{ $user->name }}</h1>
    <a href="{{ url()-> previous()}}"  style="margin-right: 10px;"> Back </a>
    
    
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <div>
                <label><input type="radio" name="role" value="admin" {{ $user->role == 'admin' ? 'checked' : '' }}> Admin</label>
                <label><input type="radio" name="role" value="author" {{ $user->role == 'author' ? 'checked' : '' }}> Author</label>
                <label><input type="radio" name="role" value="user" {{ $user->role == 'user' ? 'checked' : '' }}> User</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    

@endsection