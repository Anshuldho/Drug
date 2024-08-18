<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drug', [DrugController::class, 'drug']);
Route::get('/verify-drug', [DrugController::class, 'verifyDrug']);
Route::post('/addDrug', [DrugController::class, 'store'])->name('addDrug');
Route::get('/listDrugs', [DrugController::class, 'listDrugs'])->name('listDrugs');

Route::post('/update-drug-distributor', [DrugController::class, 'updateDrugDistributor']);
Route::post('/delete-drug', [DrugController::class, 'deleteDrug']);

Route::get('/success-page', function () {
    return view('success');
});
