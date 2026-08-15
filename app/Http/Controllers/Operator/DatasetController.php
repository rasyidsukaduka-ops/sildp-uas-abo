<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Dataset;
use Illuminate\Http\Request;

class DatasetController extends Controller
{
    public function index()
    {
        $datasets = Dataset::with('user')
            ->latest()
            ->get();

        return view('operator.datasets.index', compact('datasets'));
    }

    public function create()
    {
        return view('operator.datasets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'year' => ['required', 'digits:4'],
            'agency' => ['required', 'string', 'max:255'],
        ]);

        Dataset::create([
            'user_id' => auth()->id(),
            'name' => $validated['name'],
            'description' => $validated['description'],
            'year' => $validated['year'],
            'agency' => $validated['agency'],
            'status' => 'draft',
        ]);

        return redirect()
            ->route('operator.datasets.index')
            ->with('success', 'Dataset berhasil ditambahkan sebagai draft.');
    }
}
