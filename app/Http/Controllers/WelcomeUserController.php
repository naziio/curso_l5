<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname)
    {
         return "Bienvenido {$name}, tu apodo es {$nickname}";

    }

    public function withoutNickname($name)
    {
        return "Bienvenido {$name}";
    }
}
