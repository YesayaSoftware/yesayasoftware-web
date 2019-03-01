<?php

namespace Tests\Feature;

use App\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_add_question()
    {
        $this->signIn();

        $question = raw(Question::class);

        $this->json('POST', route('question-create', $question))
            ->assertStatus(201);
    }
}
