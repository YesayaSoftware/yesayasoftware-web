<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddPostImageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_user_can_add_post_image()
    {
        $this->withExceptionHandling();

        $post = create(Post::class);

        $this->json('POST', route('post-image', $post))
            ->assertStatus(401);
    }

    /** @test */
    public function a_valid_post_image_must_be_provided()
    {
        $this->withExceptionHandling()->signIn();

        $post = create(Post::class);

        $this->json('POST', route('post-image', $post), [
            'thumbnail' => 'not-an-image'
        ])->assertStatus(422);
    }

    /** @test */
    public function a_user_may_add_post_image()
    {
        $this->signIn();

        $post = create(Post::class);

        Storage::fake('public');

        $this->json('POST', route('post-image', $post), [
            'thumbnail' => $file = UploadedFile::fake()->image('avatar.jpg')
        ])->assertStatus(204);

        /*$this->assertEquals('post-images/' . $file->hashName(), $post->thumbnail);

        Storage::disk('public')->assertExists('post-images/' . $file->hashName());*/
    }
}
