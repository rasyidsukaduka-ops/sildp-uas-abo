<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dataset;

class DatasetController extends Controller
{
    public function index()
    {
        $datasets = Dataset::with('user')
            ->latest()
            ->get();

        return view('admin.datasets.index', compact('datasets'));
    }

    public function publish(Dataset $dataset)
    {
        $dataset->update([
            'status' => 'publik',
        ]);

        return redirect()
            ->route('admin.datasets.index')
            ->with('success', 'Dataset berhasil dipublikasikan.');
    }
}
