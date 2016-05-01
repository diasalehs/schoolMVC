<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 12:59 PM
 */

class teacherController extends Controller{

    public function getTeacherAction($action = null){
        if($action === null) {
            $teacheres=Teacher::all();
            $classes=Classes::all();
            return view('teacherAdmin')->with('teacheres',$teacheres);
        }
        else
        {
            return view(null);
        }
    }


    public function postTeacherAction($action,Request $request){
        $phone= $request['phone'];
        if(!isset($phone)){$phone = null;}
        $first= $request['firstName'];
        $second= $request['secondName'];
        $third= $request['thirdName'];
        $last= $request['lastName'];
        if($action == 'create'){
            $this->validate($request,[
                'phone' => 'integer', 'secondName|alpha' => 'required', 'lastName|alpha' => 'required|alpha',
                'firstName' => 'required|alpha', 'thirdName' => 'required|alpha'
            ]);
            $person =  Person::create(["religon"=>"hello"]);
            $person->create(['phone'=>$phone]);
            $person->name()->create(['first'=>$first]);
            $person->name()->create(['second'=>$second]);
            $person->name()->create(['third'=>$third]);
            $person->name()->create(['last'=>$last]);
            $person->employee()->create([]);
            $person->user()->create(['password'=>bcrypt($person->id())]);
            $person->employee->teacher()->create([]);             $teacheres=Teacher::all();
            $classes=Classes::all();
            return view('teacherAdmin')->with('teacheres',$teacheres);
        }
        else if($action == 'search'){
            DB::enableQueryLog();
            if(isset($request['firstName']) and !empty($request['firstName'])) {
                $name=Name::where('first',$first)->first();
                $t=($name->person->employee->teacher);
                $teachers=[$t];
                foreach($teachers as $ob){
                    echo $ob->id;
                }
                return view('teacherAdmin')->with('teacheres',$teachers);
            }
        }
    }

}