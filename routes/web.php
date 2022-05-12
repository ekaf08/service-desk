<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\IncidentController;
use App\Models\Opd;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Finder\Iterator\FilecontentFilterIterator;

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

# Login
Route::redirect('/', '/login');
Route::get('/login', [AuthController::class, 'login'])->name('login');;
Route::post('/postLogin', [AuthController::class, 'postLogin']);

# Dashboard
Route::group(['middleware' => 'auth'], function(){
    Route::redirect('/', '/dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/insiden',[IncidentController::class, 'index']);
    Route::get('/insiden/buat-tiket', [IncidentController::class, 'buatTicket']);
    Route::get('/insiden/buat-monitoring', [IncidentController::class, 'buatMonitoring']);
    Route::post('/insiden/store', [IncidentController::class, 'store']);
    Route::post('/upload', [FileUploadController::class, 'store'])->name('upload');
    Route::any('/logout', [AuthController::class, 'logout']);
});
