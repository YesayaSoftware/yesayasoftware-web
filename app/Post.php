<?php

namespace App;

use App\Filters\PostFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Stevebauman\Purify\Facades\Purify;

class Post extends Model
{
    use RecordsActivity;

    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'body',
        'thumbnail',
        'comment_count',
        'visits',
        'category_id',
        'user_id'
    ];

    /**
     * The relationships to always eager-load.
     *
     * @var array
     */
    protected $with = [
        'creator', 
        'category'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['thumbnail_path'];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->comments->each->delete();
        });

        static::created(function ($post) {
            $post->update(['slug' => $post->title]);
        });
    }

    /**
     * Get a string path for the post.
     *
     * @return string
     */
    public function path()
    {
        return "/posts/{$this->category->slug}/{$this->slug}";
    }

    /**
     * Get the path to the user's avatar.
     *
     * @return string
     */
    public function getThumbnailPathAttribute()
    {
        if (App::environment('production')) {
            return $this->thumbnail ? env('AWS_URL') . $this->thumbnail : asset('img/post-thumbnail.jpg');
        } else {
            return asset($this->thumbnail ? '/storage/' . $this->thumbnail : 'img/post-thumbnail.jpg');
        }
    }

    /**
     * A post belongs to a creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A thread is assigned a category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A thread may have many comments.blade.php.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Add a comment to the post.
     *
     * @param  array $comment
     * @return Model
     */
    public function addComment($comment)
    {
        $comment = $this->comments()->create($comment);

        //event(new PostReceivedNewComment($comment));

        return $comment;
    }

    /**
     * Apply all relevant $post filters.
     *
     * @param  Builder       $query
     * @param  PostFilters $filters
     *
     * @return Builder
     */
    public function scopeFilter($query, PostFilters $filters)
    {
        return $filters->apply($query);
    }

    /**
     * Determine if the post has been updated since the user last read it.
     *
     * @param  User $user
     * @return bool
     */
    public function hasUpdatesFor($user)
    {
        $key = $user->visitedPostCacheKey($this);

        return $this->updated_at > cache($key);
    }

    /**
     * Get the route key name.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Access the body attribute.
     *
     * @param  string $body
     *
     * @return string
     */
    public function getBodyAttribute($body)
    {
        return Purify::clean($body);
    }

    /**
     * Set the proper slug attribute.
     *
     * @param string $value
     */
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = str_slug($value))->exists()) {
            $slug = "{$slug}-{$this->id}";
        }

        $this->attributes['slug'] = $slug;
    }
}
