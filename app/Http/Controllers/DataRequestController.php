<?php

namespace App\Http\Controllers;

use App\Models\DataRequest;
use Illuminate\Http\Request;

class DataRequestController extends Controller
{
    public function index()
    {
        $requests = DataRequest::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('requests.index', compact('requests'));
    }

    public function create()
    {
        return view('requests.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'data_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'purpose' => ['nullable', 'string'],
        ]);

        DataRequest::create([
            'user_id' => auth()->id(),
            'data_name' => $validated['data_name'],
            'description' => $validated['description'],
            'purpose' => $validated['purpose'] ?? null,
            'status' => 'diajukan',
        ]);

        return redirect()
            ->route('requests.index')
            ->with('success', 'Permintaan data berhasil diajukan.');
    }
}
