<?php
use App\MemberController;

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


Route::get('/sun', function () {
    return view('sun');
});

Route::get('/sun1', function () {
    return "sun1";
});

Route::get('member/info', 'MemberController@info');

Route::get('member/{id}', 'MemberController2@info')
->where('id','[0-9]+');;

Route::get('student', 'StudentController@test1');