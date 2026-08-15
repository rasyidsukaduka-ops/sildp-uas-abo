<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\DataRequest;

class DataRequestController extends Controller
{
    public function index()
    {
        $requests = DataRequest::with('user')
            ->whereIn('status', ['diverifikasi', 'diproses'])
            ->latest()
            ->get();

        return view('operator.requests.index', compact('requests'));
    }

    public function process(DataRequest $dataRequest)
    {
        $dataRequest->update([
            'status' => 'diproses',
            'operator_id' => auth()->id(),
        ]);

        return redirect()
            ->route('operator.requests.index')
            ->with('success', 'Permintaan data berhasil diproses.');
    }

    public function complete(DataRequest $dataRequest)
    {
        $dataRequest->update([
            'status' => 'selesai',
            'operator_id' => auth()->id(),
        ]);

        return redirect()
            ->route('operator.requests.index')
            ->with('success', 'Permintaan data berhasil diselesaikan.');
    }
}
