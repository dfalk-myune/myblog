@extends('layouts.app')

@section('content')
    <h1>Create User </h1>
    <a href="{{ url()-> previous()}}"  style="margin-right: 10px;"> Back </a>
    
    
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control"   required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control"   required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control"   required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <div>
                <label><input type="radio" name="role" value="admin"  > Admin</label>
                <label><input type="radio" name="role" value="author"  > Author</label>
                <label><input type="radio" name="role" value="user" checked> User</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    

@endsection