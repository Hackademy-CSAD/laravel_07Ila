<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function create (){
        return view ('animal.create');
    }


public function store (Request $request){
    // la funz ha bisogno di tutto un parametro, l'array associativo è il suo parametro
    Animal::create([
        'name'=> $request -> name,
        'animal_age'=> $request -> name,
        'img'=> $request -> file('img')->store('public/media'),
        // il file verrà messo casulamente nella cartella app, allora devo far il percorso su dove deve memorizzare il file in public/media
    ]);

   return  redirect(route('animals.create'))->with('success', 'animale inserito con successo');
//    primo nome del mex success, secondo il contenuto del mex animale inserito con successo
}
}
public function index(){
   $animals = Animal::all();
    return view ('welcome',['animals => $animals']);
}