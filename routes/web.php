<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionController;

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
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('sections', SectionController::class)->except(['show']);
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
    Route::resource('user-roles', \App\Http\Controllers\UserRoleController::class);
    Route::delete('user-roles-d/{user}/{role}',  [App\Http\Controllers\UserRoleController::class, 'destroy'])->name('user-roles-d.destroy');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});


