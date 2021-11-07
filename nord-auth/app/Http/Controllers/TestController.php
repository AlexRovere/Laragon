<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Vérifie que l'utilisateur soit connecté pour accèder a toutes les vues du controller sinon renvoi vers la page login sauf pour { bar }
    public function __construct()
    {
        $this->middleware('auth')->except('bar');
    }

    public function foo()
    {
        return view('test.foo');
    }

    public function bar()
    {
        return view('test.bar');
    }
}
