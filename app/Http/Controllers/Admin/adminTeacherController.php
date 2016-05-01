<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 12:59 PM
 */

class adminTeacherController extends Controller{

    public function getTeacherAction($action = null){
        if($action === null) {
            $teacheres = Teacher::all();
            $classes = Classes::all();
            return view('teacherAdmin')->with('teacheres', $teacheres);
        }
        else
        {
            return view(null);
        }
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