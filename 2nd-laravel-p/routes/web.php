<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ViewController;

//use App\Http\Controllers\Example;
use App\Http\Controllers\NameController;
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

//Route::get('/', function (){
//    return view('demo');
////    return "hello world";
//});

Route::get('/bitm', [
    'uses'  => 'App\Http\Controllers\Example@index',
    'as' => 'bssis',
]);

Route::get('/fName', 'App\Http\Controllers\NameController@index')->name('arif');

Route::get('/Fname', [NameController::class, 'fullNname']);
//Route::get('/', [ViewController::class, 'index']);

Route::get('/', [StudentController::class, 'home'])->name('home');
