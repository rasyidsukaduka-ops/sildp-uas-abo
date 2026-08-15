<?php

namespace App\Http\Controllers;

use App\Models\Dataset;

class DatasetController extends Controller
{
    public function index()
    {
        $datasets = Dataset::where('status', 'publik')
            ->latest()
            ->get();

        return view('datasets.index', compact('datasets'));
    }
}
