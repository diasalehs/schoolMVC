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
use App\Http\Controllers;
use App\Http\Controllers\Admin;


Route::get('/admin/level',function(){

    return view('levelAdmin');
});

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
        'uses'=>'adminController@getAdmin',
        'as'=>'admin'
    ]);

    Route::get('/first', [
        'uses'=>'adminController@getAdminFirst',
        'as'=>'adminFirst'
    ]);

    //----------------------------------------------------------------student
    Route::group(['prefix' => '/student'] ,function() {
        Route::get('/', [
            'uses'=>'adminStudentController@getStudent',
            'as'=>'adminStudent'
        ]);
    });

    //----------------------------------------------------------------subject
    Route::group(['prefix' => '/subject'] ,function() {
        Route::get('/', [
            'uses'=>'adminSubjectController@getSubject',
            'as'=>'adminSubject'
        ]);
    });

    //----------------------------------------------------------------class
    Route::group(['prefix' => '/class'] ,function() {

        Route::get('/', [
            'uses'=>'adminClassController@getClass',
            'as'=>'adminClass'
        ]);

        Route::post('/levels', [
            'uses'=>'adminClassController@postLevels',
            'as'=>'levels'
        ]);

        Route::post('/create', [
            'uses'=>'adminClassController@postCreate',
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
            return view('teacherFirst');
        });
        Route::get('/student', function () {
            return view('teacherStudent');
        });
        Route::get('/marks', function () {
            return view('teacherMarks');
        });
        Route::get('/messages', function () {
            return view('teacherMessages');
        });
    });

//-------------------------------------------------------------------------studentPAGE
Route::group(['prefix' => '/student'] ,function() {

    Route::get('/', function () {

        return view('studentFirst');
    });
});

});