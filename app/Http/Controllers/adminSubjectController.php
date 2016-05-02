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

 /*   public function edit(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $newName = $request['newSubjectName'];
        $name=$request->input('oldSubjectName');
        $subject=Subject::find($name);
        if($subject!=null) {
            $subject->name =$newName;
//            $p->put('name',$newName);
        }
        return redirect()->route('adminSubject');
    }*/
}