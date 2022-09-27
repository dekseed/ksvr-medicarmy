<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;


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
    // return view('pages.home');
    return redirect()->route('login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {

    Route::controller(HomeController::class)->group(function () {
        // Route::get('/home/{id}', 'show');
        Route::get('/home', 'index')->name('home');
    });

});

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:superadministrator|administrator|manager']], function () {

    Route::controller(ManageController::class)->group(function () {
        Route::get('/', 'index')->name('manage.home');
        Route::get('/dashboard', 'dashboard')->name('manage.dashboard');
    });


    Route::controller(UserController::class)->group(function () {

        Route::get('/user', 'index')->name('user.index');
        Route::post('/user/store', 'store')->name('user.store');
        Route::get('/user/{id}', 'show')->name('user.show');
        Route::put('/user/{id}', 'update')->name('user.update');
   });

    Route::controller(PermissionController::class)->group(function () {

        Route::get('/permission', 'index')->name('permission.index');
        Route::post('/permission/store', 'store')->name('permission.store');
        Route::delete('/permission/{id}', 'destroy')->name('permission.destroy');
    });
    Route::controller(RoleController::class)->group(function () {

        Route::get('/role', 'index')->name('role.index');
        Route::post('/role/store', 'store')->name('role.store');
        Route::get('/role/{id}', 'show')->name('role.show');
        Route::put('/role/{id}', 'update')->name('role.update');
        Route::delete('/role/{id}', 'destroy')->name('role.destroy');
    });
});
