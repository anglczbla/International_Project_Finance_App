<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data dari model jika diperlukan
        // $data = Model::all();

        return view('dashboard.index');
    }
}