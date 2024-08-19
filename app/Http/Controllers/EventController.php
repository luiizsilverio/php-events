<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $search = request('search');

        if ($search) {
            $events = Event::where([
                ['title', 'like', '%'. $search .'%']
                ])->get();
            } else {
            $events = Event::all();
        }
        return view('welcome', ['events' => $events, 'search' => $search]);
        // exibe a view que está em views/welcome.blade.php
    }

    public function show($id) {
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
        // exibe a view que está em views/events/show.blade.php
    }

    public function create() {
        return view('events.create'); // exibe a view que está em views/events/create.blade.php
    }

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->itens = $request->itens;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $reqimage = $request->image;
            $extension = $reqimage->extension();
            $imgName = md5($reqimage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/events'), $imgName);
            $event->image = $imgName;
        }

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

}
