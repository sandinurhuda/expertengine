<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{   
    public function index()
    {
        $optionss = DB::table('gejalas')->get();

        return view('diagnosis', [
            'title' => 'Diagnosis',
            'optionss' => $optionss
        ]);
    }

    public function hasildiagnosis()
    {
        return view('hasildiagnosis');
    }
}
