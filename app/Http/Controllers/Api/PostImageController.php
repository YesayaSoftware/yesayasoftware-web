<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PostImageController extends Controller
{
    /**
     * Store a new user avatar.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        request()->validate([
            'thumbnail' => ['required', 'image']
        ]);

        if (App::environment('production')) {
            $thumbnail_path = null;

            if (request()->hasFile('thumbnail')) {
                if (Storage::disk('s3')->exists($post->thumbnail)) {
                    Storage::disk('s3')->delete($post->thumbnail);
                }

                $thumbnail_path = Storage::disk('s3')
                    ->putFile('public/post-thumbnails', request()->file('thumbnail'), 'public');
            }

            $post->update([
                'thumbnail' => $thumbnail_path
            ]);
        } else {
            $post->update([
                'thumbnail' => request()->file('thumbnail')->store('post-images', 'public')
            ]);
        }

        return response([], 204);
    }
}
