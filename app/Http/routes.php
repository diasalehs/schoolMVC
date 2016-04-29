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
Route::get('/admin',function(){

    return view('admin');
//    return view ('teacherAdmin');
});
Route::get('/admin/first',function(){

    return view('adminFirst');
});
Route::get('/admin/teacher',function(){

    return view('teacherAdmin');
});
Route::get('/admin/student',function(){

    return view('studentAdmin');
});
Route::get('/admin/subject',function(){

    return view('subjectAdmin');
});
Route::get('/admin/class',function(){

    return view('classAdmin');
});
Route::get('/', function () {
//    echo Name::where('person_id','3')->first()['first'];
    $persons=(Person::all());
    foreach ($persons as $person){
        echo $person->nationality;
//        echo $person->pid;
//        echo $person->religon;
        echo $person->name->first;
        echo "\n";
//        $person->nationality="palestinane";

        $person->name->first="dia";
        $name=$person->name;
        $person->name()->save($name,'person_id');
//        $person->save();
//        echo $person->name->person_id;
//        $name=$person->name->first="dia";
//        $name->first="dia";
//        $person->push();
//        echo $person->name->second;
//        echo "\n";
//        echo $person->name->second;
//        echo "\n";
//        echo $person->name->last;
    }
//    echo "\n";
//    $employees=Employee::all();
//    foreach ($employees as $employee){
//       dd( $employee->person->name->first);
//    }
//    return view('welcome');
//    $c=Classes::where('id',1)->first();
//    foreach ($c->teachers as $class){
//        echo $class->id;
//    }
//    $courses=Course::where('id',1)->first();
//    foreach ($courses->klasses as $class){
//        echo $class->id;
//    }
//    $class=Classes::where('id',1)->first();
//    foreach ($class->courses as $course){
//        echo $course->coursename;
//    }

//    $course=Course::where('id',1)->first();
//    foreach ($course->teachers as $teacher){
//        echo $teacher->employee->person->name->first;
//    }
//    $teacher=Teacher::where('id',0)->first();
//    foreach ($teacher->courses as $course){
//        echo $course->coursename;
//    }

});
