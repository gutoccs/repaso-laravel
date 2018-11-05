<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/gustavo/gutoccs')
            ->assertStatus(200)
            ->assertSee('Bievenido Gustavo, tu apodo es: gutoccs');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/gustavo')
            ->assertStatus(200)
            ->assertSee('Bievenido Gustavo');
    }
}
