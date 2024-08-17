<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        if (!(Auth::user()->isAdmin())){
            abort(403);
        }
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(Request $request){
        $request->validate(['title'=>'required','content'=>'required',]);
        Post::create($request->all());
        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post){
        return view('admin.posts.edit',compact('post'));
    }

    public function update(Request $request, string $id){

        $post = Post::find($id);
        
        $validated = $request->validate(['title' => 'required','content' => 'required',]);

        $post->update($validated);

        return redirect()->route('admin.posts.index');
    }

    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
