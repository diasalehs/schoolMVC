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
    Route::group(['middleware' => ['auth']],function(){
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

                Route::post('/create', [
                    'uses'=>'adminStudentController@postCreate',
                    'as'=>'studentCreate'
                ]);

                Event::listen('illuminate.query', function ($query) {
                    echo($query);
                });

                Route::post('/search', [
                    'uses'=>'adminStudentController@postSearch',
                    'as'=>'studentSearch'
                ]);

                Route::post('/delete', [
                    'uses'=>'adminStudentController@delete',
                    'as'=>'studentDelete'
                ]);

            });

            //----------------------------------------------------------------message
            Route::group(['prefix' => '/messages'] ,function() {
                Route::get('/', [
                    'uses'=>'adminMessageController@getMessage',
                    'as'=>'adminMessage'
                ]);

                Route::post('/send', [
                    'uses'=>'adminMessageController@createMessage',
                    'as'=>'createMessage'
                ]);
            });

            //----------------------------------------------------------------subject
            Route::group(['prefix' => '/subject'] ,function() {
                Route::get('/', [
                    'uses'=>'adminSubjectController@getSubject',
                    'as'=>'adminSubject'
                ]);

                Route::post('/create', [
                    'uses' => 'adminSubjectController@create',
                    'as' => 'subjectCreate'
                ]);

                Route::post('/edit', [
                    'uses' => 'adminSubjectController@edit',
                    'as' => 'subjectEdit'
                ]);
                Route::post('/delete', [
                    'uses' => 'adminSubjectController@delete',
                    'as' => 'subjectDelete'
                ]);
            });

            //----------------------------------------------------------------levels
            Route::group(['prefix' => '/level'] ,function() {
                Route::get('/', [
                    'uses' => 'adminLevelController@getLevel',
                    'as' => 'adminLevel'
                ]);

                Route::post('/create', [
                    'uses' => 'adminLevelController@create',
                    'as' => 'levelCreate'
                ]);
                Route::post('/edit', [
                    'uses' => 'adminLevelController@edit',
                    'as' => 'levelEdit'
                ]);
                Route::post('/delete', [
                    'uses' => 'adminLevelController@delete',
                    'as' => 'levelDelete'
                ]);
            });



            //----------------------------------------------------------------class
            Route::group(['prefix' => '/class'] ,function() {

                Route::get('/', [
                    'uses'=>'adminClassController@getClass',
                    'as'=>'adminClass'
                ]);

                Route::post('/levels', [
                    'uses'=>'adminClassController@level',
                    'as'=>'classLevel'
                ]);

                Route::post('/create', [
                    'uses'=>'adminClassController@create',
                    'as'=>'classCreate'
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

                Route::post('/getEmployee', [
                    'uses'=>'adminTeacherController@getEmployee',
                    'as'=>'getEmployee'
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

            Route::get('/', [
                'uses'=>'studentController@getStudent',
                'as'=>'studentFirst'
            ]);
            Route::get('/messages', [
                'uses'=>'studentController@getMessages',
                'as'=>'studentMessages'
            ]);
            Route::get('/marks', [
                'uses'=>'studentController@getMarks',
                'as'=>'studentMarks'
            ]);
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




//-------------------------------------------------------------------------parentPAGE
        Route::group(['prefix' => '/parent'] ,function() {

            Route::get('/', [
                'uses'=>'parentController@getParentMarks',
                'as'=>'parentMarks'
            ]);
            Route::get('/marks', [
                'uses'=>'supervisorController@getParentMarks',
                'as'=>'parentMarks'
            ]);
            Route::get('/messages', [
                'uses'=>'supervisorController@getParentMessages',
                'as'=>'parentMessages'
            ]);
        });


//-------------------------------------------------------------------------mainPAGE
        Route::group(['prefix' => '/main'] ,function() {

            Route::get('/', [
                'uses'=>'mainController@getMain',
                'as'=>'main'
            ]);
    });
});
});
