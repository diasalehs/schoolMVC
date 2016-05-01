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


Route::group(['middleware' => ['web']],function() {


    Route::get('/admin', function () {

        return view('admin');
    });


    Route::get('/admin/first', function () {

        return view('adminFirst');
    });

    Route::get('/admin/messages', function () {


        return view('messagesAdmin');
    });
    Route::get('/admin/messages/show', function () {


        return view('showMA');
    });


    Route::get('/admin/teacher', function () {

        $teacheres = Teacher::all();
        $classes = Classes::all();
        return view('teacherAdmin')->with('teacheres', $teacheres);
    });


    Route::post('/admin/teacher/create', function (Request $request) {

        if (isset($request['firstName']) and !empty($request['firstName'])) {

            $name = $request['firstName'];
            $person = Person::create(["religon" => "hello"]);
            $person->name()->create(['first' => $name]);
            $person->employee()->create([]);
            $person->employee->teacher()->create([]);
            $person->user()->create(['password' => bcrypt($person->id)]);
            $teacheres = Teacher::all();
            $classes = Classes::all();
            return view('teacherAdmin')->with('teacheres', $teacheres);
        }
    });

    Event::listen('illuminate.query', function ($query) {
        echo($query);
    });

    Route::post('/admin/teacher/search', function (Request $request) {
        DB::enableQueryLog();
        if (isset($request['name']) and !empty($request['name'])) {
            $name = Name::where('first', $request['name'])->first();
            $t = ($name->person->employee->teacher);
            $teachers = [$t];
            foreach ($teachers as $ob) {
                echo $ob->id;
            }
            return view('teacherAdmin')->with('teacheres', $teachers);
        }
    });

    Route::get('/admin/student', function () {

        return view('studentAdmin');
    });

    Route::post('/admin/subject', function () {

        return view('subjectAdmin');
    });

    Route::post('/admin/class/levels', function (Request $request) {
        $id = $request['id'];
        $level = Level::find($id);
        $class = $level->classes;
        return response()->json($class->toJson());
    });

    Route::get('/admin/class', function () {

        $levels = Level::all();
        return view('classAdmin', ['levels' => $levels]);
    });

    Route::post('/admin/class/create', function (Request $request) {
        $name = $request->input('classname');
        $section = $request->input('section');
        $capacity = $request->input('capacity');
        Classes::create(['level_id' => $name, 'section' => $section, 'capacity' => $capacity]);
        return redirect('/admin/class');
    });

    Route::get('/', [
        'uses' => 'loginController@getLogin',
        'as' => 'loginPage'
    ]);

    Route::post('/', [
        'uses' => 'loginController@postLogin',
        'as' => 'loginFunc'
    ]);


    Route::get('/teacher/student', function () {

        return view('teacherStudent');
    });

    Route::get('/teacher', function () {

        return view('teacher');
    });

});