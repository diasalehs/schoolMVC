<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:50 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class adminStudentController extends Controller{
    public function getStudent(){
        if(!Auth::check()){
            return redirect()->back();
        }
        return view('studentAdmin');
    }
}