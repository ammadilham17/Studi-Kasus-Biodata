<?php

use App\Http\Controllers\BiodataController;

// Route Public (Welcome Message)
Route::get('/', [BiodataController::class, 'index']);

// Route Management / Admin
Route::get('/admin', [BiodataController::class, 'admin']);
Route::post('/admin/update', [BiodataController::class, 'update']); 
