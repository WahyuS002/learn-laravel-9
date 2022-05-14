<?php

use App\Http\Controllers\DashboardController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    DashboardController::class;
    return view('welcome');
});

Route::get('users', function () {
    // $users = DB::table('users')->get(); ==> db query builder
    $users = User::all(); // ==> Model

    return view('users', compact('users'));
});

// Route::get('dashboard', [DashboardController::class, 'index']);
