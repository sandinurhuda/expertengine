<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class DataKerusakanController extends Controller
{   
    public function index()
    {
        $data = new Penyakit;
        $penyakits = $data->all();

        return view('datakerusakan', [
            'title' => 'Data Kerusakan',
            'penyakits' => $penyakits
        ]);
    }
}
