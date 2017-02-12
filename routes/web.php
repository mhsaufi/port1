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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

//Route for registration page including log in form
Route::get('/registration','registermember@ViewForm');
Route::post('/register','registermember@RegisterMember');
Route::post('/validate','registermember@validateLogin');

//start inner profile
Route::get('/apps','viewprofile@profileView');
Route::post('/customizebg','uploaddp@changeBackground');
Route::post('/update','uploaddp@saveNewInfo');
Route::post('uploaddp','uploaddp@saveNewDp');

Route::get('/friend','friend@suggestedFriend');
Route::post('/friendprofile','friend@viewFriend');
Route::post('/messageuser','friend@sendMessage');
Route::get('/mailviewer','Mails@viewInbox');

Route::get('/postac','PostAct@loadCategory');



Route::get('/testajax', function () {
    return view('testajax');
});

Route::post('/getform','MyAjax@getObject');
Route::post('/getform2','MyAjax@getTool');
Route::post('/postactivity','PostAct@postActivity');

Route::get('/logout','registermember@logOut');