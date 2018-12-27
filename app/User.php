<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'thumbnail'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'confirmed' => 'boolean'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['thumbnail_path'];

    /**
     * Get the route key name for Laravel.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * User may have a number of Posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Determine if the user is an administrator.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return in_array($this->name, ['Yesaya R. Athuman', 'Dorah P. Ndazi']);
    }

    /**
     * Record that the user has read the given thread.
     *
     * @param Post $post
     */
    public function read($post)
    {
        cache()->forever(
            $this->visitedPostCacheKey($post),
            Carbon::now()
        );
    }

    /**
     * Get the path to the user's avatar.
     *
     * @return string
     */
    public function getThumbnailPathAttribute()
    {
        if (App::environment('production')) {
            return $this->thumbnail ? env('AWS_URL') . $this->thumbnail : asset('svg/logo.svg');
        } else {
            return asset($this->thumbnail ? '/storage/' . $this->thumbnail : 'svg/logo.svg');
        }
    }

    /**
     * Get the cache key for when a user reads a thread.
     *
     * @param  Post $post
     * @return string
     */
    public function visitedPostCacheKey($post)
    {
        return sprintf("users.%s.visits.%s", $this->id, $post->id);
    }

    /**
     * Set the proper slug attribute.
     *
     * @param string $value
     */
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($username = str_slug($value))->exists()) {
            $$username = "{$username}-{$this->id}";
        }

        $this->attributes['username'] = $username;
    }

    /**
     * Fetch the last published comment for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lastComment()
    {
        return $this->hasOne(Comment::class)->latest();
    }

}
