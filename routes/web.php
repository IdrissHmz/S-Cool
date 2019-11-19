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

Route::get('/', function () {
    return view('home');
});
Route::group(['prefix'=>'admin/dashboard','middleware'=>'is_admin'],function(){
    Route::view('/','pages.AdminDashboard')->name('admin.dashboard');
    Route::resource('/students','StudentController');
    Route::resource('/teachers','TeacherController');
    Route::resource('/groups','GroupController');
    Route::resource('/alerts','AlertController');
    Route::resource('/requests','RequestController');
    Route::resource('/sessions','SessionController');

    Route::get('/students/{id}',function(){
        return view('studentpage',compact('id'));
    });

});
Route::group(['prefix'=>'student/dashboard','middleware'=>'is_student'],function(){
    Route::view('/','pages.StudentDashboard')->name('student.dashboard');
    Route::get('/marks','StudentController@marks');
    Route::get('/sessions','StudentController@sessions');
    Route::get('/alerts','StudentController@alerts');
    Route::get('/requests','StudentController@rrequests');
});
Route::group(['prefix'=>'teacher/dashboard','middleware'=>'is_teacher'],function(){
    Route::view('/','pages.TeacherDashboard')->name('teacher.dashboard');
    Route::get('/students','TeacherController@students');
    Route::get('/sessions','TeacherController@sessions');
    Route::get('/requests','TeacherController@requests');

    Route::get('/students/{id}',function(){
        return view('studentpage',compact('id'));
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
