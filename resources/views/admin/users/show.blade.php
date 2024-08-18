@extends('layouts.app')

@section('content')
    {{-- <h1>Post from: '@if($post->user_id && $post->user) 
        {{ $post->user->name }}
    @else
        Unknown User
    @endif</a>' (Content for Admin)</h1> --}}

    <h1>Profile of '{{ $user->name }}' (content for admin)</h1>
    <a href="{{ route('admin.users.index')}}"  style="margin-right: 10px;"> Back </a>
    
    
    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin-right: 10px;">Delete User</button>
    </form>

    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Edit</a>
    

    <u1>
        <li>Name: {{ $user->name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Role: '{{$user->role}}'</li>
        <li>ID: '{{$user->id}}'</li>
        
        <li>number of blogs: '{{ $user->posts->count() }}'</li>
        {{-- <li>is author: '{{ $user->isAuthor }}'</li>
        <li>User is of type: {{ get_class($user) }}</li>
        <li>user isWorking: {{ $user->isWorking }}</li> --}}
        
    </ul>
    
    
    

@endsection
