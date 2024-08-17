<?php

namespace App\Http\Controllers;
//namespace App\Http\Models;


use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   


    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        
        // //$posts = Post::all();
        // //dd(Auth::user());
        // $posts = Auth::user()->posts;
        
        // dd($posts);

        // if (Auth::check()) {
            
            
            //dd('user is logged in ', Auth::user() );
        // } else {
        //     dd('No user is logged in');
        // }

        $posts = Auth::user()->posts;
 
        //dd($posts);

        return view('Posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posts.create');

    }

        /**
     * Update the specified resource in storage.
     */
    //public function update( string $id)
    public function update(Request $request, string $id)
    
    {
        //$request->validate(['title' => 'required','content' => 'required',]);

        //Post::updateOrCreate($request->all());

        $post = Post::find($id);
        
        $validated = $request->validate(['title' => 'required','content' => 'required',]);

        $post->update($validated);

        return redirect()->route('posts.index');

        //return redirect()->route('posts.show', $post->id)
        //    ->with('success', 'Post updated successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate(['title'=>'required','content'=>'required',]);
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if (Auth::id() != $post->user_id){
            //dd(Auth::id(),$post->user_id);
            abort(403);
        }
        return view('Posts.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    //public function edit(string $id)
    public function edit(Post $post)
    {
        if (Auth::id() != $post->user_id){
            //dd(Auth::id(),$post->user_id);
            abort(403);
        }
        return view('posts.edit', compact('post'));
    }



    /**
     * Remove the specified resource from storage.
     * <a href="{{ route('posts.destroy',$post->id)}}"  style="margin-right: 10px;" class="btn btn-primary"> Delete </a>
     */
    public function destroy(string $id)
    {
        // if (Auth::id() != $post->user_id){
        //     //dd(Auth::id(),$post->user_id);
        //     abort(403);
        // }
        //return view('Posts.index');
        Post::destroy($id);
        return redirect()->route('posts.index');

    }

}
