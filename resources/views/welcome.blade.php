{{-- <!DOCTYPE html>
<html>
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;url={{ route('posts.index') }}">
    <title>Redirecting...</title>

    </head>

    <body>
        
    <a href="wwww.google.com">google</a>

    </body>

</html>
 --}}
 @extends('layouts.app')

 @section('content')
 <!DOCTYPE html>
<html>
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- @if(!Auth::check() || Auth::user()->role !== 'admin')
        <meta http-equiv="refresh" content="0;url={{ route('posts.index') }}">
    @endif --}}

    @if (!Auth::check() )
    <meta http-equiv="refresh" content="0;url={{ route('login') }}">

    @endif
    {{-- @else
        @if( Auth::user()->role !== 'admin')
            <meta http-equiv="refresh" content="0;url={{ route('posts.index') }}">
        @endif
        
    @endif --}}

    @if( Auth::check() && Auth::user()->role !== 'admin')
            <meta http-equiv="refresh" content="0;url={{ route('posts.index') }}">
    @endif


    

    <title>Welcome</title>

    </head>

    <body>
        
    @if(Auth::check() && Auth::user()->role === 'admin')
    <h1>Admin Dashboard (content for admin) </h1>
    <ul>
        <li><a href="{{ route('admin.posts.index') }}">Manage Blog Posts</a></li>
        <li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
    </ul>
    @else
        <p>Redirecting...</p>
    @endif

    </body>

</html>
@endsection
