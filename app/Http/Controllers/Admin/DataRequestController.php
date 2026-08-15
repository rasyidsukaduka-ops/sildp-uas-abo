<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataRequest;

class DataRequestController extends Controller
{
    public function index()
    {
        $requests = DataRequest::with('user')
            ->latest()
            ->get();

        return view('admin.requests.index', compact('requests'));
    }

    public function verify(DataRequest $dataRequest)
    {
        $dataRequest->update([
            'status' => 'diverifikasi',
        ]);

        return redirect()
            ->route('admin.requests.index')
            ->with('success', 'Permintaan data berhasil diverifikasi.');
    }

    public function reject(DataRequest $dataRequest)
    {
        $dataRequest->update([
            'status' => 'ditolak',
        ]);

        return redirect()
            ->route('admin.requests.index')
            ->with('success', 'Permintaan data berhasil ditolak.');
    }
}
