<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class loginWithWrongCredentials extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function loginWithWrongCredentials()
    {
        $this->visit('/')
            ->see('Login')
            ->type('unknown@example.org', 'email')
            ->type('invalid-password', 'password')
            ->check('remember')
            ->press('Login')
            ->seePageIs('/login')
            ->see('These credentials do not match our records');
    }
}
