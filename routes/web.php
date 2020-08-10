<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/model', function () {
    // $user = \App\User::find(40);
    // $user = $user->update([
    //     'name'=> 'teste atualizando',
    // ]);

    // $user->name = 'usuario teste';
    // $user->last_name = 'tete';
    // $user->email = 'email@mail.com';
    // $user->password = bcrypt('12345678');
    // return $user->save();
    // dd($user);
    return \App\User::all();
});