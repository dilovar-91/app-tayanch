<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::with(['category', 'pictures'])->orderby('created_at', 'DESC')->where('archived', 0)->whereNull('deleted_at')->get();
        return response()->json($posts);
    }


    public function detail($id)
    {

        $post = Post::with(['category', 'pictures'])->where('archived', 0)->whereNull('deleted_at')->findOrFail($id);
        return response()->json($post);
    }
}
