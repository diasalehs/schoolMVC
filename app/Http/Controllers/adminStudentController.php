<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:50 PM
 */

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;
use App\Student;
use App\Person;
use App\Name;
use App\Classes;
use Illuminate\Support\Facades\Auth;
class adminStudentController extends Controller{
    public function getStudent(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $students = Student::all();
       return view('studentAdmin')->with('students', $students);
    }

    public function postCreate(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $this->validate($request,[
//            'phone' => 'integer',
            //'secondName' => 'required|alpha',
            //      'lastName' => 'required|alpha',
            'firstName' => 'required|alpha',
//            'thirdName' => 'required|alpha',
//           'mobile' => 'integer'
//            'nationality' => 'alpha',
//            'placeOfBirth' => 'alpha',
//            'religon' => 'alpha',
            'ni' => 'required|Numeric',
//            'idType' => 'required|alpha',
//            'distanceFromSchool' => 'Numeric',
//            'dateOfBirth' => 'Date',
//            'transMorning' => 'alpha',
//            'transAfternoon' => 'integer',
//            'numberBrothers' => 'Boolean',
//            'numberSisters' => 'integer',
//            'numberPartMemorize' => 'integer',
//            'diseases' => 'required',
//            'surgeries' => 'required',

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
        //DB student
        $transMorning= $request['transMorning'];
        $transAfternoon= $request['transAfternoon'];
        $numberBrothers= $request['numberBrothers'];
        $numberSisters= $request['numberSisters'];
        $numberPartMemorize= $request['numberPartMemorize'];
        $diseases= $request['diseases'];
        $surgeries= $request['surgeries'];
        $mobile= $request['mobile'];

        //DB Person
        $person = Person::create(["religon" => $religon,
            'phone'=>$phone,
            'nationality'=>$nationality,
            'placeOfBirth'=>$placeOfBirth,
            'ni'=>$ni,
            'idType'=>$idType,
            'distanceFromSchool'=>$distanceFromSchool,
            'dateOfBirth'=>$dateOfBirth]);
        //DB Name
        $person->name()->create(['first' => $first,
            'second'=>$second,
            'third'=>$third,
            'last'=>$last]);
        //DB employee
        $person->student()->create(["mobile" => $mobile,
            "transMorning" => $transMorning,
            "transAfternoon" => $transAfternoon,
            "numberBrothers" => $numberBrothers,
            "numberSisters" => $numberSisters,
            "numberPartMemorize" => $numberPartMemorize,
            "diseases" => $diseases,
            "surgeries" => $surgeries,
            ]);


        $person->user()->create(['password' => bcrypt($ni),'id'=> $person->id, 'type'=>'student']);
        $students = Student::all();
        return redirect()->route('adminStudent')->with('students', $students);

    }

    public function postSearch(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $searchName=$request['name'];
        $names = Name::all();
//        echo $searchName;
        $found = [];
        $students=[];
        foreach($names as $name) {
            if (strstr($name->fullName(), $searchName)) {
                array_push($found,$name->person);
            }
        }
        foreach($found as $person){
            $temp=$person->student;
            if($temp){
                array_push($students,$temp) ;
            }
        }

        return redirect()->route('adminStudent')->with('students', $students);
    }
    public function delete(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }        $this->validate($request,['id'=>'integer|required']);

        $id=$request['id'];
        $student=Student::find($id);
        if($student!=null) {
            $p = $student->person;
            $p->delete();
        }
//        $students = Student::all();
//        return redirect()->route('adminStudent')->with('students', $students);

    }
}