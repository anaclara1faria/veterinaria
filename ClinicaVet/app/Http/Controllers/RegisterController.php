<?php

namespace App\Http\Controllers;

use App\Models\Registers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        $register = new Registers();
        $register->registration = '999';
        $register->breed_name = 'lais';
        $register->origin = 'brasil';
        $register->appearance = 'medio';
        $register->colors = 'branco';
        $register->personality = 'inteligente';
        $register->skills = 'obediencia';
        $register->health = true;
        $register->expectancy = '5';



        $register->save();
    }
}
