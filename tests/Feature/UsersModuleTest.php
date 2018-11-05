<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{

    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios') //Simula una petición http a /usuarios
            ->assertStatus(200) //Comprueba que /usuarios cargue correctamente
            ->assertSee('Usuarios'); //Comprueba que se vea en el Código Fuente de la página el texto 'Usuarios'
        //$this->assertTrue(true);
    }

    /** @test */
    function it_loads_the_users_details_page()
    {
        //El parámetro de la URL es fijo
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
