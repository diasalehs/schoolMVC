<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class adminSubjectController extends Controller{
    public function getSubject(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        return view('SubjectAdmin');
    }
}