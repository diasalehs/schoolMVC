<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/2/2016
 * Time: 12:17 AM
 */


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class supervisorController extends Controller{
    public function getSupervisor()
    {
        if (!Auth::check() or Auth::user()->type != 'supervisor') {
            return redirect()->route('loginPage');
        }
        return view('supervisorFirst');
    }

    public function getAttendance()
    {
        if (!Auth::check() or Auth::user()->type != 'supervisor') {
            return redirect()->route('loginPage');
        }
        return view('attendance');
    }

    public function getMessages()
    {
        if (!Auth::check() or Auth::user()->type != 'supervisor') {
            return redirect()->route('loginPage');
        }
        return view('supervisorMessages');
    }

    public  function  changePassword(Request $request){
        if (!Auth::check() or Auth::user()->type != 'supervisor') {
            return redirect()->route('loginPage');
        }

        if(!Auth::attempt(['id'=>Auth::user()->id,'password'=>$request['oldPass']])){
            return redirect()->back()->with(['fail'=>'Could not login you']);
        }
        Auth::user()->password=bcrypt($request['newPass']);
        Auth::user()->save();
        return redirect()->route('supervisorFirst');
    }
}