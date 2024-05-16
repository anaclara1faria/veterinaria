<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function form()
    {
        return view('clinica-nova-categoria');
    }
    public function store(Request $request)
    {
        $request->validate([
            'race' =>['required', 'max:255'],
            'origin' =>['required', 'max:255'],
            'appearance' =>['required', 'max:255'],
            'colors' =>['required', 'max:255'],
            'personality' =>['required', 'max:255'],
            'skills' =>['required', 'max:255'],
            'health' =>['required', 'max:255'],
            'life_expectancy' =>['required', 'max:255']
        ]);
        $form = new Form();
         $form->race = $request->race;
         $form->origin = $request->origin;
         $form->appearance = $request->appearance;
         $form->colors = $request->colors;
         $form->personality = $request->personality;
         $form->skills = $request->skills;
         $form->health = $request->health;
         $form->life_expectancy = $request->life_expectancy;

         $form->save();

         return redirect()->route('form.create')->with('success', 'categoria salva com sucesso');






        return view('clinica-nova-categoria');
    }
}
