<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){

    }

    public function edit(User $user){
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        // $user = User::find($id);
        // $validated = $request->validate(['name' => 'required','email' => 'required','role'=>'required',]);
        // $user->update($validated);    

        return redirect()->route('admin.users.index');

    }

    public function destroy(string $id)
    {

        // Find the user by ID
        
        $user = User::find($id); 
        $posts = $user->posts;
        $posts->each(function ($post) {
            $post->delete(); // Deletes each post
        });
        $user->delete();

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        
        return view('admin.users.show',compact('user'));

    }

}
