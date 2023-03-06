<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::post('/store/student', [App\Http\Controllers\LandingpageController::class, 'storeDataStudent'])->name('store.student');
Route::get('/ppdb/cetak/{student_id}', [App\Http\Controllers\LandingpageController::class, 'cetakPdf'])->name('ppdb.download');
Route::get('/ppdb/finish/{student_id}', [App\Http\Controllers\LandingpageController::class, 'finish'])->name('ppdb.finish');
