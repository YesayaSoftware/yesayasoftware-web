<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Create a new PostController instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return response()->json($posts, 200, [], JSON_NUMERIC_CHECK);
    }
}
