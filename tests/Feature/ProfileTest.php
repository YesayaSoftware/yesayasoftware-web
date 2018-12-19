<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_has_a_profile()
    {
        $user = create(User::class);

        $this->get(route('profile', $user->username))
            ->assertSee($user->name);
    }
}
