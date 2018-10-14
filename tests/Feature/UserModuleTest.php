<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function testExample()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios');

    }

    function it_load_usuarios_detail()
    {
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee('Mostrando detalle del usuario: 5');
    }
}
