<?php

namespace App;

use Illuminate\Support\Facades\Redis;

class PostTrending
{
    /**
     * Fetch all trending posts.
     *
     * @return array
     */
    public function get()
    {
        return array_map('json_decode', Redis::zrevrange($this->cacheKey(), 0, 4));
    }

    /**
     * Push a new post to the trending list.
     *
     * @param Post $post
     */
    public function push($post)
    {
        Redis::zincrby($this->cacheKey(), 1, json_encode([
            'title' => $post->title,
            'path' => $post->path(),
            'category' => $post->category->name
        ]));
    }

    /**
     * Get the cache key name.
     *
     * @return string
     */
    public function cacheKey()
    {
        return app()->environment('testing')
            ? 'testing_trending_posts'
            : 'trending_posts';
    }

    /**
     * Reset all trending threads.
     */
    public function reset()
    {
        Redis::del($this->cacheKey());
    }
}