@extends('layouts.app')

@section('content')
    <h1>Blog Posts  ({{Str::ucfirst(Auth::user()->role)  }})
        
        {{-- @if (Auth::check())
   User is logged in :  {{ Str::ucfirst(Auth::user()->role) }}
@else
    No user is logged in.
@endif

@if (Auth::check())
    Logged in as: {{ Auth::user()->name }} <br>
    Role: {{ Auth::user()->role }}
@endif
        
        
        @if (Auth::check())
        {{ Auth::user()->role ?? 'Role not found' }}
    @endif --}}

</h1>


    
    <a href="{{ route('posts.create') }}" class="btn btn-primary" >Create Post</a>
    
        
    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}" >{{ $post->title }} 
                {{-- @if($post->user_id && $post->user) 
                    ({{ $post->user->name }})
                @else
                    (Unknown User)
                @endif</a> --}}
        </li>
        @endforeach

    </ul>
    

@endsection

{{-- ({{ ucfirst(Auth::user()->role) }}) --}}