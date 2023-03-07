<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $users = $this->postJson( '/api/login', ['email' => 'test@test.com', 'password' => 'test1234']);

        $users->assertStatus(200);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->postJson( '/api/annual-leaves', [
                "keterangan" => null,
                "dari" => "2023-03-10",
                "sampai" => "2023-03-14",
            ]);

        $response->assertStatus(200);
    }
}
