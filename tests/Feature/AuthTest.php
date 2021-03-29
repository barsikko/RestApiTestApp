<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Tests\Traits\SetUpUser;

class AuthTest extends TestCase
{


    /**
     * Authentication test.
     *
     * @return void
     */
    public function test_token_generated()
    {


    $response = $this->postJson('/api/login', 
            [
                'email' => 'admin@email.com', 
                'password' => 'password',
            ]);

    $token = $response->json('token');

    $response->assertStatus(201);
    $response->assertJson(['token' => true]);
    }

     /**
     * Authentication test.
     *
     * @return void
     */
    public function test_wrong_auth_paramets()
    {


    $response = $this->postJson('/api/login', 
            [
                'email' => 'admin@email.com', 
                'password' => 'passwords',
            ]);

    $response->assertStatus(422);
    $this->assertEquals($response['message'], "The given data was invalid.");

    }

}

