<?php

namespace App\Http\Controllers;

use App\Models\Masakan;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $masakans = Masakan::where('status_masakan', 'tersedia')->get();
        return view('welcome', compact('masakans'));
    }
}
