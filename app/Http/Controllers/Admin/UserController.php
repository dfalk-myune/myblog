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
        $request->validate();
        User::create($request->all(['name' => 'required','email' => 'required','role'=>'required',]));
        return redirect()->route('admin.users.index');
    }

    public function edit(User $user){
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if (!$user) {
            \Log::error("User not found with ID: $id");
            return redirect()->back()->with('error', 'User not found.');
        }
    
        \Log::info('User before update:', $user->toArray());
    
        $validated = $request->only(['name', 'email', 'role']);
    
        // Log validated data
        \Log::info('Incoming request data:', $validated);
    
        $updated = $user->update($validated);
    
        // Log result of update operation
        \Log::info('Update successful:', ['updated' => $updated]);
    
        // Verify if update was successful
        \Log::info('User after update:', $user->fresh()->toArray());
    
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
