<?php

use App\Http\Controllers\Api\JournalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/journals', [JournalController::class, 'index'])->name('apiHome');
Route::delete('/journals/{id}', [JournalController::class, 'destroy'])->name('apiDestroy');
Route::post('/journals', [JournalController::class, 'store'])->name('apiStore');
Route::put('/journals/{id}', [JournalController::class, 'update'])->name('apiUpdate');