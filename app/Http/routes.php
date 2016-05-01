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

    Route::get('/logout',[
        'uses'=>'logoutController@getLogout',
        'as'=>'logout'
    ]);

//-------------------------------------------------------------------------adminPAGE
Route::group(['prefix' => '/admin'] ,function() {

    Route::get('/', [
        'uses'=>'adminController@getAdmin',
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

    //----------------------------------------------------------------levels
    Route::get('/admin/level',[
        'uses'=>'adminLevelController@getLevel',
        'as'=>'adminLevel'
    ]);


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
            'as'=>'adminTeacher'
        ]);


        Route::post('/create', [
            'uses'=>'adminTeacherController@postCreate',
            'as'=>'teacherCreate'
        ]);

        Event::listen('illuminate.query', function ($query) {
            echo($query);
        });

        Route::post('/search', [
            'uses'=>'adminTeacherController@postSearch',
            'as'=>'teacherSearch'
        ]);
        Route::post('/delete', [
            'uses'=>'adminTeacherController@delete',
            'as'=>'teacherDelete'
        ]);
    });

});

//-------------------------------------------------------------------------TeacherPAGE
    Route::group(['prefix' => '/teacher'] ,function() {
        Route::get('/', [
            'uses'=>'teacherController@getTeacherFirst',
            'as'=>'teacherFirst'
        ]);

        Route::get('/student', [
            'uses'=>'teacherController@getTeacherStudent',
            'as'=>'teacherStudent'
        ]);

        Route::get('/marks', [
            'uses'=>'teacherController@getTeacherMarks',
            'as'=>'teacherMarks'
        ]);

        Route::get('/messages', [
            'uses'=>'teacherController@getTeacherMessages',
            'as'=>'teacherMessages'
        ]);
    });

//-------------------------------------------------------------------------studentPAGE
Route::group(['prefix' => '/student'] ,function() {

    Route::get('/', function () {

        return view('studentFirst');
    });
    Route::get('/messages', function () {

        return view('studentMessages');
    });
    Route::get('/marks', function () {

        return view('studentMarks');
    });
});



//-------------------------------------------------------------------------supervisorPAGE
    Route::group(['prefix' => '/supervisor'] ,function() {

        Route::get('/', [
            'uses'=>'supervisorController@getSupervisor',
            'as'=>'supervisorFirst'
        ]);
        Route::get('/attendance', [
            'uses'=>'supervisorController@getAttendance',
            'as'=>'supervisorAttendance'
        ]);
        Route::get('/messages', [
            'uses'=>'supervisorController@getMessages',
            'as'=>'supervisorMessages'
        ]);
    });

});
