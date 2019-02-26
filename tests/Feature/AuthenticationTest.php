<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /** @test */
    public function it_redirects_guests_to_the_login_page()
    {
        $response = $this->assertGuest()->get(route('dashboard'));

        $response->assertRedirect('/login');
    }
}
