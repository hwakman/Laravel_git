<?php

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

Route::any('member',"MemberController@indexAction");

Route::post('insert',"MemberController@insert");

Route::get('del',"MemberController@delete");

Route::get('update',"MemberController@updateView");

Route::post('updateCommit',"MemberController@update");
