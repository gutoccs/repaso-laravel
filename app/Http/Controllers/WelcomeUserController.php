<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function users_without_nickname($name)
    {
        $name = ucfirst($name);

        return "Bievenido $name";
    }

    public function users_with_nickname($name, $nickname)
    {
        $name = ucfirst($name);

        return "Bievenido $name, tu apodo es: $nickname";
    }
}
