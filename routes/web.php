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
    return view('homepage.home');
});

Route::resource('sms','StudentsController');

Route::get('studlist' , function(){
    return view ('student.index');
});

Route::resource('faculty','TeachersController');

Route::resource('fees','FeesController');

Route::get('classMont' , 'FeesController@showClassMont');
Route::get('classSrMont' , 'FeesController@showClassSrMont');
Route::get('classAdvMont' , 'FeesController@showClassAdvMont');
Route::get('class1' , 'FeesController@showClassOne');
Route::get('class2' , 'FeesController@showClassTwo');
Route::get('class3' , 'FeesController@showClassThree');
Route::get('class4' , 'FeesController@showClassFour');
Route::get('class5' , 'FeesController@showClassFive');
Route::get('class6' , 'FeesController@showClassSix');
Route::get('class7' , 'FeesController@showClassSeven');
Route::get('class8' , 'FeesController@showClassEight');
Route::get('class9' , 'FeesController@showClassNine');
Route::get('class10' , 'FeesController@showClassTen');


Route::get('stdclassMont' , 'StudentsController@showClassMont');
Route::get('stdclassSrMont' , 'StudentsController@showClassSrMont');
Route::get('stdclassAdvMont' , 'StudentsController@showClassAdvMont');
Route::get('stdclass1' , 'StudentsController@showClassOne');
Route::get('stdclass2' , 'StudentsController@showClassTwo');
Route::get('stdclass3' , 'StudentsController@showClassThree');
Route::get('stdclass4' , 'StudentsController@showClassFour');
Route::get('stdclass5' , 'StudentsController@showClassFive');
Route::get('stdclass6' , 'StudentsController@showClassSix');
Route::get('stdclass7' , 'StudentsController@showClassSeven');
Route::get('stdclass8' , 'StudentsController@showClassEight');
Route::get('stdclass9' , 'StudentsController@showClassNine');
Route::get('stdclass10' , 'StudentsController@showClassTen');

Route::resource('attendance' , 'AttendanceController');

Route::get('monthOne' , 'AttendanceController@monthOne');
Route::get('monthTwo' , 'AttendanceController@monthTwo');
Route::get('monthThree' , 'AttendanceController@monthThree');
Route::get('monthFour' , 'AttendanceController@monthFour');
Route::get('monthFive' , 'AttendanceController@monthFive');
Route::get('monthSix' , 'AttendanceController@monthSix');
Route::get('monthSeven' , 'AttendanceController@monthSeven');
Route::get('monthEight' , 'AttendanceController@monthEight');
Route::get('monthNine' , 'AttendanceController@monthNine');
Route::get('monthTen' , 'AttendanceController@monthTen');
Route::get('monthEleven' , 'AttendanceController@monthEleven');
Route::get('monthTwelve' , 'AttendanceController@monthTwelve');

Route::get('listteachers' , 'AttendanceController@showTeachers');
Route::get('monthlyatd' , 'AttendanceController@monthlyatd');




