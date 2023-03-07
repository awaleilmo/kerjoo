<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->json('GET', '/api/login', ['email' => 'test@test.com', 'password' => 'test1234']);

        $response->assertStatus(200);
    }
}
