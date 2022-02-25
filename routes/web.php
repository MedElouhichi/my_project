<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use App\Http\Middleware\TestOne;
use App\Http\Middleware\TestTwo;


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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example/{id}',[ExampleController::class,'index'])->middleware([TestOne::class])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware([TestTwo::class])->group( function(){

    Route::get('m1/{id}', function(){
        return " page 1 avec middleware";
    });

    
    Route::get('m2/{id}', function(){
        return " page 2 avec middleware";
    });

    Route::get('m3/{id}', function(){

    });

});

Route::get('mgroup',function(){

})->middleware('web');



