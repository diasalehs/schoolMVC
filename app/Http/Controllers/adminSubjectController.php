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

class adminSubjectController extends Controller{
    public function getSubject(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        return view('SubjectAdmin');
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
}