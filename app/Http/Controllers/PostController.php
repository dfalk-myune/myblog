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
        
        

        if (Auth::user()->isAdmin()){
            $posts = Post::all();
            return view('Posts.index', compact('posts'));
        }
        else{
            $posts = Auth::user()->posts;
            return view('Posts.index', compact('posts'));
        }

        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posts.create');

    }

        
    public function update(Request $request, string $id)
    
    {
        

        $post = Post::find($id);
        
        $validated = $request->validate(['title' => 'required','content' => 'required',]);

        $post->update($validated);

        return redirect()->route('posts.index');

        
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
             
            abort(403);
        }
        return view('posts.edit', compact('post'));
    }



    /**
     * Remove the specified resource from storage.
     *  
     * 
     * */
    public function destroy(string $id)
    {
        
        Post::destroy($id);
        return redirect()->route('posts.index');

    }

}
