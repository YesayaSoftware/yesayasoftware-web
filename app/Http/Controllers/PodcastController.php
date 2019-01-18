<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostTrending;
use App\User;
use Illuminate\Support\Facades\Cache;
use Zttp\Zttp;

class PodcastController extends Controller
{
    public function index(PostTrending $trending)
    {
        $podcast_info = $this->fetchPodcastInfo();
        $feed = $this->fetchFeed();

        $users = User::limit(10)->get();
        $posts = Post::limit(6)->get();
        $trending = $trending->get();

        return view('podcasts.index', [
            'feed' => $feed,
            'podcast_info' => $podcast_info,
            'users' => $users,
            'posts' => $posts,
            'trending' => $trending
        ]);
    }

    public function fetchFeed()
    {
        $endpoint = 'https://api.simplecast.com/v1/podcasts/8750/episodes.json';

        $response = Zttp::get($endpoint, [
            'api_key' => config('services.simplecast.key')
        ]);

        return json_decode($response);

        //For caching podcast
        /*return Cache::remember('podcast', 60 * 24 * 3, function() use ($endpoint) {
            $response = Zttp::get($endpoint, [
                'api_key' => config('services.simplecast.key')
            ]);

            return json_decode($response);
        });*/
    }

    public function fetchPodcastInfo()
    {
        $endpoint = 'https://api.simplecast.com/v1/podcasts/8750.json';

        $response = Zttp::get($endpoint, [
            'api_key' => config('services.simplecast.key')
        ]);

        return json_decode($response);
        
        // return Cache::rememberForever('podcast-info', function() use ($endpoint) {
        //     $response = Zttp::get($endpoint, [
        //         'api_key' => config('services.simplecast.key')
        //     ]);

        //     return json_decode($response);
        // });
    }
}
