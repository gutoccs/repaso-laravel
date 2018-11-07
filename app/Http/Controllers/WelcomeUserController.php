<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function withoutNickName($name)
    {
        $name = ucfirst($name);

        return "Bievenido $name";
    }

    public function withNickName($name, $nickname)
    {
        $name = ucfirst($name);

        return "Bievenido $name, tu apodo es: $nickname";
    }
}
