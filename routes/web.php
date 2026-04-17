<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterController;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [DashboardController::class, 'loginForm'])->name('admin.login');
Route::post('/login', [DashboardController::class, 'login'])->name('admin.login.submit');

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
});
// Zid had l-route f routes/web.php
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