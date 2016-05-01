<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Person;
use App\Name;
use App\Employee;
use App\Classes;
use App\Teacher;
use App\Course;
use App\Level;

use Illuminate\Http\Request ;


Route::group(['middleware' => ['web']],function(){

//-------------------------------------------------------------------------loginPAGE
Route::get('/', [
    'uses' => 'loginController@getLogin',
    'as' => 'loginPage'
]);

Route::post('/', [
    'uses' => 'loginController@postLogin',
    'as' => 'loginFunc'
]);

//-------------------------------------------------------------------------adminPAGE
Route::group(['prefix' => '/admin'] ,function() {

    Route::get('/', [
        'uses'=>'admin.adminController@getAdmin',
        'as'=>'admin'
    ]);

    Route::get('/first', [
        'uses'=>'admin.adminController@getAdminFirst',
        'as'=>'adminFirst'
    ]);

    //----------------------------------------------------------------student
    Route::group(['prefix' => '/student'] ,function() {
        Route::get('/', [
            'uses'=>'admin.adminStudentController@getStudent',
            'as'=>'adminStudent'
        ]);
    });

    //----------------------------------------------------------------subject
    Route::group(['prefix' => '/subject'] ,function() {
        Route::get('/', [
            'uses'=>'admin.adminSubjectController@getSubject',
            'as'=>'adminSubject'
        ]);
    });

    //----------------------------------------------------------------class
    Route::group(['prefix' => '/class'] ,function() {

        Route::get('/', [
            'uses'=>'admin.adminClassController@getClass',
            'as'=>'adminClass'
        ]);

        Route::post('/levels', [
            'uses'=>'admin.adminClassController@postLevels',
            'as'=>'levels'
        ]);

        Route::post('/create', [
            'uses'=>'admin.adminClassController@postCreate',
            'as'=>'create'
        ]);

    });

    //----------------------------------------------------------------messages
    Route::group(['prefix' => '/messages'] ,function() {
        Route::get('/', [
            'uses'=>'adminMessageController@getMessage',
            'as'=>'adminMessage'
        ]);
        Route::get('/show', [
            'uses'=>'adminMessageController@getShow',
            'as'=>'Show'
        ]);
    });


    //----------------------------------------------------------------Teacher
    Route::group(['prefix' => '/teacher'] ,function() {

        Route::get('/', [
            'uses'=>'adminTeacherController@getTeacher',
            'as'=>'teacher'
        ]);


        Route::post('/create', [
            'uses'=>'adminTeacherController@postCreate',
            'as'=>'create'
        ]);

        Event::listen('illuminate.query', function ($query) {
            echo($query);
        });

        Route::post('/search', [
            'uses'=>'adminTeacherController@postSearch',
            'as'=>'search'
        ]);
    });

});

//-------------------------------------------------------------------------TeacherPAGE
    Route::group(['prefix' => '/teacher'] ,function() {
        Route::get('/', function () {
            return view('teacher');
        });
        Route::get('/student', function () {
            return view('teacherStudent');
        });
    });

//-------------------------------------------------------------------------studentPAGE
Route::group(['prefix' => '/student'] ,function() {

    Route::get('/', function () {

        return view('student');
    });
});

});