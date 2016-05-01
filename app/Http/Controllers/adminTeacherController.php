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
use Illuminate\Support\Facades\Auth;

class adminTeacherController extends Controller{

    public function getTeacher(){
        if(!Auth::check()){
            return redirect()->back();
        }
            $teacheres = Teacher::all();
            $classes = Classes::all();
            return view('teacherAdmin')->with('teacheres', $teacheres);
    }


    public function postCreate(Request $request){
        echo 'hi';
        $this->validate($request,[
            'phone' => 'integer',
            'secondName' => 'required|alpha',
            'lastName' => 'required|alpha|alpha',
            'firstName' => 'required|alpha',
            'thirdName' => 'required|alpha',
            'mobile' => 'integer',
            'nationality' => 'alpha',
            'placeOfBirth' => 'alpha',
            'religon' => 'alpha',
            'ni' => 'required',
            'idType' => 'required|alpha',
            'distanceFromSchool' => 'Numeric',
            'dateOfBirth' => 'Date',
            'married' => 'alpha',
            'numberOfChildren' => 'integer',
            'DoesPartnerWork' => 'Boolean',
            'childrenInSchool' => 'integer',
            'childrenOtherSchools' => 'integer',
            'job_con' => 'required|alpha',
            'job_type' => 'required|alpha',
            'experince_local' => 'integer',
            'experince_abroad' => 'integer'
        ]);

        //DB Name
        $first= $request['firstName'];
        $second= $request['secondName'];
        $third= $request['thirdName'];
        $last= $request['lastName'];
        $phone= $request['phone'];
        //DB person
        $nationality= $request['nationality'];
        $placeOfBirth= $request['placeOfBirth'];
        $religon= $request['religon'];
        $ni= $request['ni'];
        $idType= $request['idType'];
        $distanceFromSchool= $request['distanceFromSchool'];
        $dateOfBirth= $request['dateOfBirth'];
        //DB employee
        $married= $request['married'];
        $numberOfChildren= $request['numberOfChildren'];
        $DoesPartnerWork= $request['DoesPartnerWork'];
        $childrenInSchool= $request['childrenInSchool'];
        $childrenOtherSchools= $request['childrenOtherSchools'];
        $job_con= $request['job_con'];
        $job_type= $request['job_type'];
        $experince_local= $request['experince_local'];
        $experince_abroad= $request['experince_abroad'];
        $mobile= $request['mobile'];

        //DB Person
        $person = Person::create(["religon" => "Hello",'phone'=>$phone,'nationality'=>$nationality,'placeOfBirth'=>$placeOfBirth,'ni'=>$ni,'idType'=>$idType,'distanceFromSchool'=>$distanceFromSchool,'dateOfBirth'=>$dateOfBirth]);
        //DB Name
        $person->name()->create(['first' => $first,'second'=>$second,'third'=>$third,'last'=>$last]);
        //DB employee
        $person->employee()->create(["mobile" => $mobile, "married" => $married,
            "numberOfChildren" => $numberOfChildren,
            "DoesPartnerWork" => $DoesPartnerWork,
            "childrenInSchool" => $childrenInSchool,
            "childrenOtherSchools" => $childrenOtherSchools,
            "job_con" => $job_con,
            "job_type" => $job_type,
            "experince_local" => $experince_local,
            "experince_abroad" => $experince_abroad]);

        $person->employee->teacher()->create([]);
        $person->user()->create(['password' => bcrypt($person->id)]);
        $teacheres = Teacher::all();
        $classes = Classes::all();
        return view('teacherAdmin')->with('teacheres', $teacheres);

    }

    public function postSearch(Request $request){
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