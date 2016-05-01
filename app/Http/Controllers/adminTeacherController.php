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
        $this->validate($request,[
            'phone' => 'integer', 'secondName|alpha' => 'required', 'lastName|alpha' => 'required|alpha',
            'firstName' => 'required|alpha', 'thirdName' => 'required|alpha'
        ]);

        $phone= $request['phone'];
        if(!isset($phone)){$phone = null;}
        $first= $request['firstName'];
        $second= $request['secondName'];
        $third= $request['thirdName'];
        $last= $request['lastName'];

        $name = $request['firstName'];

        $person = Person::create(["religon" => "hello"]);
        $person->name()->create(['first' => $name]);
        $person->create(['phone'=>$phone]);
        $person->name()->create(['second'=>$second]);
        $person->name()->create(['third'=>$third]);
        $person->name()->create(['last'=>$last]);
        $person->employee()->create([]);
        $person->employee->teacher()->create([]);
        $person->user()->create(['password' => bcrypt($person->id)]);
        $teacheres = Teacher::all();
        $classes = Classes::all();
        return view('teacherAdmin')->with('teacheres', $teacheres);

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