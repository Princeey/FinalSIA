<?php

use App\Http\Controllers\SmartphoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/smartphone', function () {
    return view('smartphone');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/scanner', function () {
    return view('scanner');
})->name('scanner');

Route::get('/smartphone', [SmartphoneController::class, 'index'])->name('smartphone');
Route::get('/smartphones/csv-all', [SmartphoneController::class, 'generateCSV']);
Route::get('/smartphones/pdf', [SmartphoneController::class, 'pdf']);
Route::post('/smartphones/import', [SmartphoneController::class, 'importCsv'])->name('smartphone.import');
