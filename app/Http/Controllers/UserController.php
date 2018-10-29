<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty'))
        {
            $user = [];
        } else {
            $users = [
                'JOE',
                'ITOX',
                'BENTA'

            ];
        }
        $title = 'Listado de usuarios';
        return view('users.index', compact('users','title'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }

    public function edit($id)
    {
        return view('users.edit', compact('id'));
    }
}
