<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Juan',
            'José',
            'María',
            'Gustavo',
            'Florimar',
            '<script>alert("clic")</script>'
        ];

        $title = 'Listado de usuarios';

        return view('users', compact('users', 'title'));
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: $id";
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }

    public function edit($id)
    {
        return "Editar al usuario $id";
    }
}
