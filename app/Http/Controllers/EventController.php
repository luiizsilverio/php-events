<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();

        // exibe a view que está em views/welcome.blade.php
        return view('welcome', ['events' => $events]);
    }

    public function create() {
        // exibe a view que está em views/events/create.blade.php
        return view('events.create');
    }
}
