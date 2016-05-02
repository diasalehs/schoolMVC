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
            'ni' => 'required',
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

        $person->user()->create(['password' => bcrypt($ni),'id'=>$ni, 'type'=>'student']);
        $students = Student::all();
        return view('studentAdmin')->with('students', $students);

    }

    public function postSearch(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        DB::enableQueryLog();
        if (isset($request['name']) and !empty($request['name'])) {
            $name = Name::where('first', $request['name'])->first();
            $s = ($name->person->student);
            $students = [$s];
            foreach ($students as $ob) {
                echo $ob->id;
            }
            return view('studentAdmin')->with('students', $students);
        }
    }
    public function delete(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }        $this->validate($request,['id'=>'integer|required']);
        $id=$request->input('id');
        $employee=Employee::find($id);
        if($employee!=null) {
            $p = $employee->person;
            $p->delete();
        }
        return redirect()->route('adminStudent');

    }

}