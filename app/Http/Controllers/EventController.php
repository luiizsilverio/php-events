<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Luiz";
        $lista = [10, 20, 30, 40, 50];

        // exibe a view que está em views/welcome.blade.php
        return view('welcome', ['nome' => $nome, 'lista' => $lista]);
    }

    public function create() {
        // exibe a view que está em views/events/create.blade.php
        return view('events.create');
    }
}
