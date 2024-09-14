<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response() -> json([
            'data' => $posts,
            'message' => 'success',
        ],200 );
    }

    public function getPost($id) {
        // Find the post by ID
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'message' => 'Post not found'
            ], 404);
        }

        return response()->json([
            'data' => $post,
            'message' => 'success',
        ], 200);
    }



}
