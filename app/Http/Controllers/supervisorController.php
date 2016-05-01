<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/2/2016
 * Time: 12:17 AM
 */


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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


}