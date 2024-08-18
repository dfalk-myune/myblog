@extends('layouts.app')

@section('content')
    <h1>Users (content for admin)</h1>
    {{-- <a href="{{ route('posts.create') }}" class="btn btn-primary" >Create Post</a>
     --}}

     <a href="{{ route('welcome')}}"  style="margin-right: 10px;"> Back </a>
        
    <u1>
        @foreach ($users as $user)
        <li>
            <a href="{{ route('admin.users.show', $user->id) }}" >{{ $user->name }}</a>
        </li>
        @endforeach

    </ul>
    

@endsection
