<?php
use App\Http\Controllers\AlertController;
use App\Http\Controllers\BookingControler;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AlertMessageController;
use App\Http\Controllers\GuestController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::post('/bus/search', [BookingControler::class, 'search'])->name('bus.search');
Route::get('/location/{id}', [LocationController::class, 'locate'])->name('location.show');
Route::get('/local', [LocationController::class, 'local'])->name('local.show');


Route::post('/send-alert', [AlertMessageController::class, 'sendAlert'])->name('send-alert');
Route::get('/get-alerts', [AlertMessageController::class, 'getAlerts'])->name('get-alerts');

Route::get('/guest-only-page', function () {
    return view('guest');
})->middleware('checkguest')->name('guest');
// This page will only be accessible by guests