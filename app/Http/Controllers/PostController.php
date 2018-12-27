<?php

namespace App\Http\Controllers;

use App\Category;
use App\Filters\PostFilters;
use App\Post;
use App\PostTrending;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new ThreadsController instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'welcome']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @param PostFilters $filters
     * @param PostTrending $trending
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category, PostFilters $filters, PostTrending $trending)
    {
        $posts = $this->getPosts($category, $filters);

        if (request()->wantsJson()) {
            return response()->json(['data' => $posts], 200, [], JSON_NUMERIC_CHECK);
        }

        $users = User::limit(10)->get();

        return view('posts.index', [
            'posts' => $posts,
            'trending' => $trending->get(),
            'users' => $users
        ]);
    }



    /**
     * Display a listing of the resource.
     *
     * @param Category $category
     * @param PostFilters $filters
     * @param PostTrending $trending
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome(Category $category, PostFilters $filters, PostTrending $trending)
    {
        $posts = $this->getPosts($category, $filters);

        if (request()->wantsJson()) {
            return response()->json(['data' => $posts], 200, [], JSON_NUMERIC_CHECK);
        }

        $users = User::limit(10)->get();

        return view('welcome', [
            'posts' => $posts,
            'trending' => $trending->get(),
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostTrending $trending)
    {
        if (! auth()->user()->isAdmin())
            return redirect()->route("posts");

        $categories = Category::orderBy('name')->get();

        $trending = $trending->get();
        $posts = Post::limit(6)->get();

        return view('posts.create', ['categories' => $categories, 'posts' => $posts, 'trending' => $trending]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $post = Post::create([
            'slug' => str_slug(request('title')),
            'title' => request('title'),
            'body' => request('body'),
            'thumbnail' => request('thumbnail'),
            'category_id' => request('category_id'),
            'user_id' => auth()->id()
        ]);


        if (request()->wantsJson()) {
            return response($post, 200);
        }

        return redirect($post->path())
            ->with('flash', 'Your post has been published!');
    }


    /**
     * Display the specified resource.
     *
     *
     * @param $category
     * @param Post $post
     * @param PostTrending $trending
     *
     * @return \Illuminate\Http\Response
     */
    public function show($category, Post $post, PostTrending $trending)
    {
        if (auth()->check()) {
            auth()->user()->read($post);
        }

        $trending->push($post);


        $post->increment('visits');

        $trending = $trending->get();
        $posts = Post::limit(6)->get();
        $users = User::limit(10)->get();


        return view('posts.show', compact(['post', 'posts', 'trending', 'users']));
    }

    /**
     * Update the given post.
     *
     * @param string $category
     * @param Post $post
     *
     * @return Post
     */
    public function update($category, Post $post)
    {
        $this->authorize('update', $post);

        $post->update(request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]));

        return $post;
    }

    /**
     * Delete the given post.
     *
     * @param $category
     * @param Post $post
     *
     * @return mixed
     */
    public function destroy($category, Post $post)
    {
        $this->authorize('update', $post);

        $post->delete();

        if (request()->wantsJson()) {
            return response([], 204);
        }

        return redirect('/posts');
    }

    /**
     * Fetch all relevant posts.
     *
     *
     * @param Category $category
     * @param PostFilters $filters
     *
     * @return mixed
     */
    protected function getPosts(Category $category, PostFilters $filters)
    {
        $posts = Post::latest()->filter($filters);

        if ($category->exists) {
            $posts->where('category_id', $category->id);
        }

        return $posts->paginate(25);
    }
}
