@extends('layouts.app')

@section('content')
    

    <h1>Profile of '{{ $user->name }}' (content for admin)</h1>
    <a href="{{ route('admin.users.index')}}"  style="margin-right: 10px;"> Back </a>
    
    
    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin-right: 10px;">Delete User</button>
    </form>

    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Edit</a>
    

    <ul>
        <li>Name: {{ $user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Role: '{{$user->role}}'</li>
        <li>ID: '{{$user->id}}'</li>
        
        <li>number of blogs: '{{ $user->posts->count() }}'</li>
        
        
    </ul>
    
    
    

@endsection
