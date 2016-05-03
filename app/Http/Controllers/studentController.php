<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/2/2016
 * Time: 12:38 AM
 */


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class studentController extends Controller{
    public function getStudent()
    {
        if (!Auth::check() or Auth::user()->type != 'student') {
            return redirect()->route('loginPage');
        }
        $user=Auth::user();
//        echo $user->person->name->first;
        return view('studentFirst')->with('user',$user);
    }

    public function getMessages()
    {
        if (!Auth::check() or Auth::user()->type != 'student') {
            return redirect()->route('loginPage');
        }
        return view('studentMessages');
    }

    public function getMarks()
    {
        if (!Auth::check() or Auth::user()->type != 'student') {
            return redirect()->route('loginPage');
        }
        return view('studentMarks');
    }

    public  function  changePassword(Request $request){
        if (!Auth::check() or Auth::user()->type != 'student') {
            return redirect()->route('loginPage');
        }

        if(!Auth::attempt(['id'=>Auth::user()->id,'password'=>$request['oldPass']])){
            return redirect()->back()->with(['fail'=>'Could not login you']);
        }
        Auth::user()->password=bcrypt($request['newPass']);
        Auth::user()->save();
        return redirect()->route('studentFirst');
    }
}