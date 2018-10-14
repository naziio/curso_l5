<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    function it_users_edit()
    {
       $this->get('/usuarios/5/edit')
           ->assertStatus(200)
           ->assertSee('Usuario 5, sera editado');
    }
}
