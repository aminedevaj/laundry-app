<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ReservationController;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\DB;
use App\Models\Reservation;
Route::get('/', function () {
    return view('welcome');
});


// redirect default Laravel login
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin login
Route::get('/admin/login', [AuthController::class,'loginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class,'login'])->name('admin.login.submit');

// Dashboard (protected)
Route::get('/admin/dashboard', [AuthController::class,'dashboard'])
    ->middleware('auth:admin')
    ->name('admin.dashboard');

// Logout
Route::post('/admin/logout', [AuthController::class,'logout'])->name('admin.logout');
Route::get('/reservations', [ReservationController::class, 'index']);
Route::post('/reserve', [ReservationController::class, 'store'])->name('reservation.store');


Route::post('/reserve', [ReservationController::class, 'store']);



Route::get('/migrate', function () {
    try {
        // Force closing current connection to ensure SQLite is fresh
        DB::disconnect();
        
        Artisan::call('migrate:fresh', [
            '--force' => true,
        ]);
        
        return "✅ L-migrations dazo mzyan! Dabba t-qder t-khdem b l-app.";
    } catch (\Exception $e) {
        return "❌ Error: " . $e->getMessage();
    }
});