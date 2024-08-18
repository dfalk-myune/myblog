@extends('layouts.app')

@section('content')
    <h1>Users (content for admin)</h1>
    

     <a href="{{ route('welcome')}}"  style="margin-right: 10px;"> Back </a>
     <a href="{{ route('admin.users.create') }}" class="btn btn-primary" >Create User</a>

        
    <ul>
        @foreach ($users as $user)
        <li>
            <a href="{{ route('admin.users.show', $user->id) }}" >{{ $user->name }}</a>
        </li>
        @endforeach

    </ul>
    

@endsection
