<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;

class DataKerusakanController extends Controller
{   
    public function index()
    {
        $data = new Kerusakan;
        $kerusakans = $data->all();

        return view('datakerusakan', [
            'title' => 'Data Kerusakan',
            'kerusakans' => $kerusakans
        ]);
    }
}
