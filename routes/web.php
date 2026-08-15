<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataRequestController;
use App\Http\Controllers\Admin\DataRequestController as AdminDataRequestController;
use App\Http\Controllers\Operator\DataRequestController as OperatorDataRequestController;
use App\Http\Controllers\Operator\DatasetController as OperatorDatasetController;
use App\Http\Controllers\Admin\DatasetController as AdminDatasetController;
use App\Http\Controllers\DatasetController;
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth','role:admin,operator,pengguna'])
    ->name('dashboard');

Route::middleware(['auth', 'role:pengguna'])->group(function () {
    Route::get('/requests', [DataRequestController::class, 'index'])
        ->name('requests.index');

    Route::get('/requests/create', [DataRequestController::class, 'create'])
        ->name('requests.create');

    Route::post('/requests', [DataRequestController::class, 'store'])
        ->name('requests.store');
});

Route::middleware(['auth', 'role:pengguna'])->group(function () {
    Route::get('/datasets', [DatasetController::class, 'index'])
        ->name('datasets.index');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/requests', [AdminDataRequestController::class, 'index'])
        ->name('admin.requests.index');

    Route::post('/admin/requests/{dataRequest}/verify', [AdminDataRequestController::class, 'verify'])
        ->name('admin.requests.verify');

    Route::post('/admin/requests/{dataRequest}/reject', [AdminDataRequestController::class, 'reject'])
        ->name('admin.requests.reject');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/datasets', [AdminDatasetController::class, 'index'])
        ->name('admin.datasets.index');

    Route::post('/admin/datasets/{dataset}/publish', [AdminDatasetController::class, 'publish'])
        ->name('admin.datasets.publish');
});

Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::get('/operator/requests', [OperatorDataRequestController::class, 'index'])
        ->name('operator.requests.index');

    Route::post('/operator/requests/{dataRequest}/process', [OperatorDataRequestController::class, 'process'])
        ->name('operator.requests.process');

    Route::post('/operator/requests/{dataRequest}/complete', [OperatorDataRequestController::class, 'complete'])
        ->name('operator.requests.complete');
});

Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::get('/operator/datasets', [OperatorDatasetController::class, 'index'])
        ->name('operator.datasets.index');

    Route::get('/operator/datasets/create', [OperatorDatasetController::class, 'create'])
        ->name('operator.datasets.create');

    Route::post('/operator/datasets', [OperatorDatasetController::class, 'store'])
        ->name('operator.datasets.store');
});

