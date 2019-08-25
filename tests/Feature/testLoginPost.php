<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testLoginPost extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginPost(){
        Session::start();
        $response = $this->call('POST', '/login', [
            'email' => 'dmiguler@gmail.com',
            'password' => 'asd123fgh456',
            '_token' => csrf_token()
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('auth.login', $response->original->name());
    }
}
