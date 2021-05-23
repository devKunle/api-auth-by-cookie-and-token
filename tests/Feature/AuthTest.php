<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register()
    {
        $response = $this->json('POST', '/auth/register', [
            'name' => 'Test',
            'email' => 'test@devrom.com',
            'password' => 'Password123!',
            'password_confirmation' => 'Password123!'
        ]);

        $response->dump();
        $response->assertStatus(200);
    }
}