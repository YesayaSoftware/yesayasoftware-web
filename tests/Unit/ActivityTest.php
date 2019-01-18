<?php

namespace Tests\Feature;

use App\Activity;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_records_activity_when_a_post_is_created()
    {
        $this->signIn();

        $post = create(Post::class);

        $this->assertDatabaseHas('activities', [
            'type' => 'created_post',
            'user_id' => auth()->id(),
            'subject_id' => $post->id,
            'subject_type' => Post::class
        ]);

        $activity = Activity::first();

        $this->assertEquals($activity->subject->id, $post->id);
    }

    
}