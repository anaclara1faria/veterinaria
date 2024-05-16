<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function relat()
    {
        return view('relat');
    }
    public function store(Request $request)
    {
        $request->validate([
            'pet_name' =>['required', 'max:255'],
            'race' =>['required', 'max:255'],
            'tutor_name' =>['required', 'max:255'],
            'age' =>['required', 'max:255'],
            'illnesses' =>['required', 'max:255'],
            'surgeries' =>['required', 'max:255'],
            'weight' =>['required', 'max:255'],
            'comments' =>['required', 'max:255'],
            'characteristcs1' =>['nullable'],
            'characteristcs2' =>['nullable'],
            'characteristcs3' =>['nullable'],
            'characteristcs4' =>['nullable'],
            'characteristcs5' =>['nullable']
        ]);


        $report = new Report();
         $report->pet_name = $request->pet_name;
         $report->race = $request->race;
         $report->tutor_name = $request->tutor_name;
         $report->age = $request->age;
         $report->illnesses = $request->illnesses;
         $report->surgeries = $request->surgeries;
         $report->weight = $request->weight;
         $report->comments = $request->comments;
        if($request->has('characteristics1')){
            $report->characteristics1 = true;
        }else{
            $report->characteristics1 = false;
        }
        if($request->has('characteristics2')){
            $report->characteristics2 = true;
        }else{
            $report->characteristics2 = false;
        }
        if($request->has('characteristics3')){
            $report->characteristics3 = true;
        }else{
            $report->characteristics3 = false;
        }
        if($request->has('characteristics4')){
            $report->characteristics4 = true;
        }else{
            $report->characteristics4 = false;
        }
        if($request->has('characteristics5')){
            $report->characteristics5 = true;
        }else{
            $report->characteristics5 = false;
        }

      



         $report->save();

         return redirect()->route('report.create')->with('success', 'categoria salva com sucesso');
    }
}
