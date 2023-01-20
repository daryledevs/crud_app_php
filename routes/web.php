<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyControllers\DownloadFile;
use App\Http\Controllers\DummyControllers\TwoParamsFunction;
use App\Http\Controllers\DummyControllers\DisplayDataFunction;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Main routes
Route::get('/', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);

// mock routes
Route::get('/two-params/{id}/{group}', [TwoParamsFunction::class, 'GetParams']);
Route::get('/download-file', [DownloadFile::class, 'downloadFile']);
Route::get('/display-data/{id}', [DisplayDataFunction::class, 'DisplayData']);
