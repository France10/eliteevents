<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $nome = "Corinthians";
    $idade = 29;

    $arr = [10, 20, 30, 40, 50];

    return view(
        'welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr
        ]);
   
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
