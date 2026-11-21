<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Guests are redirected to login from the homepage.
     * "/" is the posts index (PostController@index), which redirects
     * guests to login. The duplicate welcome-closure "/" route was
     * removed during the Laravel 12 upgrade.
     */
    public function test_guests_are_redirected_to_login_from_homepage(): void
    {
        $response = $this->get("/");

        $response->assertRedirect("login");
    }
}
