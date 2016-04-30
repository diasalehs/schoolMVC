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
use Illuminate\Http\Request ;
Route::get('/admin',function(){

    return view('admin');
});
Route::get('/admin/first',function(){

    return view('adminFirst');
});
Route::get('/admin/teacher',function(){

    $teacheres=Teacher::all();
    $classes=Classes::all();
    return view('teacherAdmin')->with('teacheres',$teacheres)->with('classes',$classes);
});

Route::post('/admin/teacher/create',function(Request $request){

    if(isset($request['firstName']) and !empty($request['firstName'])) {

        $t=Teacher::findOrFail(8);
        echo $t->name;
//        $t->delete();
//        echo 'hi';
//        $name= $request['firstName'];
//
//        $person =  Person::create(["religon"=>"hello"]);
//        $person->name()->create(['first'=>$name]);
//        $person->employee()->create([]);
//        $person->employee->teacher()->create([]);
//        $teacheres=Teacher::all();
//        $classes=Classes::all();
////        return view('studentAdmin');
//        return view('teacherAdmin')->with('teacheres',$teacheres)->with('classes',$classes);
    }
//    return view('teacherAdmin')->with('teacheres',$teacheres);
});
//Route::get('/admin/teacher/create',function(){
//
//
//    $teacheres=Teacher::create(array('name' => 'John'));
//    return view('teacherAdmin')->with('teacheres',$teacheres);
//});
Route::post('/admin/teacher/search',function(Request $request){
    if(isset($request['name']) and !empty($request['name'])) {
        echo $request['name'];
        $t=Teacher::with(['employee'=>function($query){
            $query::where('person_id',8);
        }])->get();
        print_r($t);
//        $t->id;
    }


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
