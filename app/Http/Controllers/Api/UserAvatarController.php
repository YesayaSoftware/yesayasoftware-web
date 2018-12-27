<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class UserAvatarController extends Controller
{
    /**
     * Store a new user avatar.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'avatar' => ['required', 'image']
        ]);

        if (App::environment('production')) {
            $thumbnail_path = null;

            if (request()->hasFile('avatar')) {
                if (Storage::disk('s3')->exists(auth()->user()->thumbnail)) {
                    Storage::disk('s3')->delete(auth()->user()->thumbnail);
                }

                $thumbnail_path = Storage::disk('s3')
                    ->putFile('public/avatar-thumbnails', request()->file('avatar'), 'public');
            }

            auth()->user()->update([
                'thumbnail' => $thumbnail_path
            ]);
        } else {
            auth()->user()->update([
                'thumbnail' => request()->file('avatar')->store('avatars', 'public')
            ]);
        }

        return response([], 204);
    }
}
