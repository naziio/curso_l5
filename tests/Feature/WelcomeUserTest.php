<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/ignacio/luna')
            ->assertStatus(200)
            ->assertSee('Bienvenido ignacio, tu apodo es luna');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/pia')
            ->assertStatus(200)
            ->assertSee('Bienvenido pia');
    }
}
