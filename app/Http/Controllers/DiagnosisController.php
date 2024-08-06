<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
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

    public function submitDiagnosis(Request $request)
    {
        $gejalasId = $request->input('gejala');

        if (empty($gejalasId)) {
            return redirect()->back()->with('error', 'Please select at least one symptom.');
        }

        $kerusakans = Kerusakan::whereHas('gejalas', function ($query) use ($gejalasId) {
            $query->whereIn('gejalas.id', $gejalasId);
        }, '=', count($gejalasId))->get('nama_kerusakan');

        $namaKerusakan = $kerusakans->pluck('nama_kerusakan');

        return view('hasildiagnosis', ['namaKerusakan' => $namaKerusakan]);
    }
}
