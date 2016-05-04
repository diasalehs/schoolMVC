<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use App\Level;
use App\Classes;

class adminSubjectController extends Controller{
    public function getSubject(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $levels = Level::all();
        $subjects = Subject::all();
        return view('subjectAdmin',['levels' => $levels,'subjects'=>$subjects]);
    }

    public function create(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }

        $name = $request['subjectName'];
            Subject::create(["name"=>$name]);
        return redirect()->route('adminSubject');
    }

  public function edit(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $newName = $request['newSubjectName'];
        $id=$request->input('subjectId');
        $subject=Subject::find($id);
        if($subject!=null) {
            $subject->name =$newName;
            echo $subject->name;
            $subject->save();
        }
        return redirect()->route('adminSubject');
    }
    public function delete(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $id=$request->input('subjectId');
        $subject=Subject::find($id);
        if($subject!=null) {
            $subject->delete();
        }
        return redirect()->route('adminSubject');
    }
    public function getSubjects(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }        $this->validate($request,['classid'=>'integer|required']);

        $levelid=$request['classid'];
        $level=Level::find($levelid);
        if($level!=null) {
            $subjects = $level->subjects;
            if ($subjects != null && sizeof($subjects)>0) {
                return response()->json($subjects->toJson());
            }
        }

    }
    public function addToLevel(Request $request){
//        if (!Auth::check() or Auth::user()->type != 'admin') {
//            return redirect()->route('loginPage');
//        }        $this->validate($request,['levelId'=>'integer|required','subjectsId'=>'required']);
//
       $sentSubjects=json_decode($request['subjectsId']);
//        print_r( $sentSubjects);
        $levelId=$request['levelId'];
        $level=Level::find($levelId);
        $subjects=array();
//        $subjects[0]=1;

        for($i=0;$i<sizeof($sentSubjects);$i++){
           $subjects[$i]= Subject::find($sentSubjects[$i])->id;
        }
        print_r($sentSubjects);
         $level->subjects()->sync($subjects);
        return route('adminSubject');

    }
}