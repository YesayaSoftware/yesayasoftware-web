<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use App\Http\Requests\CreateCommentRequest;

class CommentController extends Controller
{
    /**
     * Create a new RepliesController instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'users', 'comments']);
    }

    /**
     * Fetch all relevant comments.
     *
     * @param int $categoryId
     * @param Post $post
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index($categoryId, Post $post)
    {
        return $post->comments()->paginate(20);
    }

    /**
     * Persist a new comment.
     *
     * @param $categoryId
     * @param Post $post
     * @param CreateCommentRequest $commentRequest
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store($categoryId, Post $post, CreateCommentRequest $commentRequest)
    {
        return $post->addComment([
            'body' => request('body'),
            'user_id' => auth()->id()
        ])->load('owner');
    }

    /**
     * Update an existing reply.
     *
     * @param Comment $comment
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Comment $comment)
    {
        $this->authorize('update', $comment);

        $comment->update(request()->validate(['body' => 'required|spamfree']));
    }

    /**
     * Delete the given comment.
     *
     * @param  Comment $comment
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('update', $comment);

        $comment->delete();

        if (request()->expectsJson()) {
            return response(['status' => 'Comment deleted']);
        }

        return back();
    }
}
