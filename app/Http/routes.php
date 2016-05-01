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
Route::get('/admin',function(){

    return view('admin');
});
Route::get('/teacher',function(){

    return view('teacher');
});
Route::get('/teacher/student',function(){

    return view('teacherStudent');
});
Route::get('/admin/first',function(){

    return view('adminFirst');
});

Route::get('/admin/teacher',function(){

    $teacheres=Teacher::all();
    $classes=Classes::all();
    return view('teacherAdmin')->with('teacheres',$teacheres);
});

Route::get('/admin/messages',function(){
  

    return view('messagesAdmin');
});
Route::get('/admin/messages/show',function(){


    return view('showMA');
});

Route::post('/admin/teacher/create',function(Request $request){

    if(isset($request['firstName']) and !empty($request['firstName'])) {

//        $t=Teacher::findOrFail(8);
//        echo $t->name;
//        $t->delete();
//        echo 'hi';
        $name= $request['firstName'];
//
        $person =  Person::create(["religon"=>"hello"]);
        $person->name()->create(['first'=>$name]);
        $person->employee()->create([]);
        $person->employee->teacher()->create([]);
        $teacheres=Teacher::all();
        $classes=Classes::all();
////        return view('studentAdmin');
        return view('teacherAdmin')->with('teacheres',$teacheres);
    }
//    return view('teacherAdmin')->with('teacheres',$teacheres);
});
//Route::get('/admin/teacher/create',function(){
//
//
//    $teacheres=Teacher::create(array('name' => 'John'));
//    return view('teacherAdmin')->with('teacheres',$teacheres);
//});
Event::listen('illuminate.query', function($query)
{
    echo($query);
});
Route::post('/admin/teacher/search',function(Request $request){
    DB::enableQueryLog();
    if(isset($request['name']) and !empty($request['name'])) {
//        echo $request['name'];
//        $t=Name::with(['person.employee.teacher' ])->get()->where('first','mazen');
        $name=Name::where('first',$request['name'])->first();
//        print_r($name->first);
//        print_r($name->person->employee->teacher->id);
        $t=($name->person->employee->teacher);
//        dd(DB::getQueryLog());
//        $t->delete();

//        $teachers=new \Illuminate\Database\Eloquent\Collection();
        $teachers=[$t];
        foreach($teachers as $ob){
            echo $ob->id;
        }

        return view('teacherAdmin')->with('teacheres',$teachers);

//        $teachers= $t->find(1);
//        foreach ($teachers as $h){
//            echo $t->employee->person->name->first;
//        }
//        print_r($teachers->employee->person->name);

//        $t->id;
    }


});

Route::get('/admin/student',function(){

    return view('studentAdmin');
});
Route::post('/admin/subject',function(){

    return view('subjectAdmin');
});
Route::post('/admin/class/levels',function(Request $request){
    $id=$request['id'];
    $level=Level::find($id);
    $class=$level->classes;
    return  response()->json($class->toJson());
});
Route::get('/admin/class',function(){

    $levels=Level::all();
    return view('classAdmin',['levels'=>$levels]);
});
Route::post('/admin/class/create',function(Request $request){

   $name=$request->input('classname') ;
    $section=$request->input('section') ;
    $capacity=$request->input('capacity') ;
    Classes::create(['level_id'=>$name,'section'=>$section,'capacity'=>$capacity]);
    return redirect('/admin/class');
});
Route::get('/', function () {
    return view('login');

////    echo Name::where('person_id','3')->first()['first'];
//    $persons=(Person::all());
//    foreach ($persons as $person){
//        echo $person->nationality;
////        echo $person->pid;
////        echo $person->religon;
//        echo $person->name->first;
//        echo "\n";
////        $person->nationality="palestinane";
//
//        $person->name->first="dia";
//        $name=$person->name;
//        $person->name()->save($name,'person_id');
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
