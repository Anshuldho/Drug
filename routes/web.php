<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drug', [DrugController::class, 'drug']);
Route::get('/verifyDrug', [DrugController::class, 'verifyDrug'])->name('verifyDrug');
Route::get('/verification-result/{result}', function ($result) {
    return view('verificationResult', ['result' => $result]);
})->name('verificationResult');

Route::post('/addDrug', [DrugController::class, 'store'])->name('addDrug');
Route::get('/listDrugs', [DrugController::class, 'listDrugs'])->name('listDrugs');

Route::post('/updateDistributor', [DrugController::class, 'updateDrugDistributor'])->name('updateDistributor');
//Route::post('/delete-drug', [DrugController::class, 'deleteDrug']);

Route::delete('/delete-drug/{id}', [DrugController::class, 'deleteDrug'])->name('deleteDrug');
Route::get('/success-page', function () {
    return view('success');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
