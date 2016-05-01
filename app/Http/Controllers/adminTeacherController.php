<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 12:59 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Teacher;
use App\Person;
use App\Name;
use App\Classes;

class adminTeacherController extends Controller{

    public function getTeacher(){
            $teacheres = Teacher::all();
            $classes = Classes::all();
            return view('teacherAdmin')->with('teacheres', $teacheres);
    }


    public function postCreate($action,Request $request){
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
    }

    public function postSearch($action,Request $request){
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
    }


}