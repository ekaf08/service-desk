<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\IncidentController;
use App\Models\Opd;
use Carbon\Carbon;
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
Route::redirect('/', 'login');
Route::get('/login', function () {
    return view('auth.login', ['title' => 'Log In']);
}) -> named('login');
Route::view('/register', 'auth.register', ['title' => 'Register']);

# Dashboard
Route::view('/dashboard', 'dashboard.index', ['title' => 'Dashboard']);
Route::get('/insiden/',[IncidentController::class, 'index']);
Route::get('/insiden/buat-tiket/', [IncidentController::class, 'buatTicket']);
Route::get('/insiden/buat-monitoring/', [IncidentController::class, 'buatMonitoring']);
Route::post('/insiden/postTicket', [IncidentController::class, 'postTicket'])->named('postTicket');
Route::post('/upload', [FileUploadController::class, 'store'])->name('upload');