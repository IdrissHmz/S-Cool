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


use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin/dashboard','middleware'=>'is_admin'],function(){
    Route::resource('/','AdminController');
    Route::resource('/students','StudentController');
    Route::resource('/admins','AdminController');
    Route::resource('/teachers','TeacherController');
    Route::resource('/groups','GroupController');
    Route::resource('/alerts','AlertController');
    Route::resource('/demands','DemandController');
    Route::resource('/sessions','SessionController');

    Route::get('/students/{id}',function(){
        return view('studentpage',compact('id'));
    });

});
Route::group(['prefix'=>'student/dashboard','middleware'=>'is_student'],function(){
    Route::view('/','pages.StudentDashboard')->name('student.dashboard');
    Route::get('/marks','MarkController@marks');
    Route::get('/sessions','SessionController@sessions');
    Route::get('/alerts','AlertController@alerts');
    Route::get('/demands','DemandController@demands');
});
Route::group(['prefix'=>'teacher/dashboard','middleware'=>'is_teacher'],function(){
    Route::view('/','pages.TeacherDashboard')->name('teacher.dashboard');
    Route::get('/students','StudentController@students');
    Route::get('/sessions','SessionController@sessions');
    Route::get('/demands','DemandController@demands');

    Route::get('/students/{id}',function(){
        return view('studentpage',compact('id'));
    });
});



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
