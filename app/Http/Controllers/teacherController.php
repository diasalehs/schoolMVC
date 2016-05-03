<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 10:15 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class teacherController extends Controller{
    public function getTeacherFirst(){
        if (!Auth::check() or Auth::user()->type != 'teacher') {
            return redirect()->route('loginPage');
        }
        return view('teacherFirst');
    }

    public function getTeacherStudent(){
        if (!Auth::check() or Auth::user()->type != 'teacher') {
            return redirect()->route('loginPage');
        }
        return view('teacherStudent');
    }

    public function getTeacherMarks(){
        if (!Auth::check() or Auth::user()->type != 'teacher') {
            return redirect()->route('loginPage');
        }
        return view('teacherMarks');
    }

    public function getTeacherMessages(){
        if (!Auth::check() or Auth::user()->type != 'teacher') {
            return redirect()->route('loginPage');
        }
        return view('teacherMessages');
    }

    public  function  changePassword(Request $request){
        if (!Auth::check() or Auth::user()->type != 'teacher') {
            return redirect()->route('loginPage');
        }

        if(!Auth::attempt(['id'=>Auth::user()->id,'password'=>$request['oldPass']])){
            return redirect()->back()->with(['fail'=>'Could not login you']);
        }
        Auth::user()->password=bcrypt($request['newPass']);
        Auth::user()->save();
        return redirect()->route('teacherFirst');
    }

}