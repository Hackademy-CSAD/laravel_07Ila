<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;

class AnimalController extends Controller
{
    public function create()
    {
        return view('animal.create');
    }


    public function store(Request $request)
    {
        // la funz ha bisogno di tutto un parametro, l'array associativo è il suo parametro
        Animal::create([
            'name' => $request->name,
            'animal_age' => $request->name,
            'img' => $request->file('img')->store('public/media'),
            // il file verrà messo casulamente nella cartella app, allora devo far il percorso su dove deve memorizzare il file in public/media
        ]);

        return  redirect(route('animals.create'))->with('success', 'animale inserito con successo');
        //    primo nome del mex success, secondo il contenuto del mex animale inserito con successo
    }

    public function index()
    {
        $animals = Animal::all();
        return view('welcome', ['animals => $animals']);
    }
    public function show(Animal $animal){
        return view('animals.show', compact('game'));
    }
    public function update(AnimalRequest $request, Animal $animal){
        $animal->update([
            "species"=> $request->species,
            "release_mammal"=>$request->release_mammal,
            "fish"=>$request->fish ? $request->file ('fish')->store('public/img'): $animal->fish
        ]);
      return redirect(route('animals.edit',compact('animal')))->with('success')

        
}
