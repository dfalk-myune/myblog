@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    {{-- <a href="{{ route('posts.create') }}" class="btn btn-primary" >Create Post</a>
     --}}
        
    <u1>
        @foreach ($users as $user)
        <li>
            <a href="{{ route('posts.show', $user->id) }}" >{{ $user->name }}</a>
        </li>
        @endforeach

    </ul>
    

@endsection
