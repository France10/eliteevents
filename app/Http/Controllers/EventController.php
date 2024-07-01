<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {

     $events = Event::all();

    return view('welcome',['events' => $events]);
   
    }

    public function create(){
        return view ('events.create');
        
    }

    public function enter(){
        return view ('events.enter');
    }
    
    public function contacts(){
        return view ('events.contacts');
    }
    
    public function resgister(){
        return view ('events.resgister');
    }
}
