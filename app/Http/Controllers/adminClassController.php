<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:52 PM
 */

namespace App\Http\Controllers;
use App\Level;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes;


class adminClassController extends Controller{
    public function getClass(){
        if(!Auth::check()){
            return redirect()->route('loginPage');
        }
        $levels = Level::all();
        $Classes = Classes::all();
        $teachers=Teacher::all();
        $students=Student::all();
        return view('classAdmin', ['levels' => $levels,'classes' => $Classes,'teachers'=>$teachers,'students'=>$students]);
    }

    public function  Create(Request $request){
        if(!Auth::check()){
            return redirect()->route('loginPage');
        }
        $name = $request->input('classId');
        $section = $request->input('section');
        $capacity = $request->input('capacity');
        Classes::create(['level_id' => $name, 'section' => $section, 'capacity' => $capacity]);
        return redirect()->route('adminClass');
    }

    public function  Level(Request $request){
        if(!Auth::check()){
            return redirect()->route('loginPage');
        }
        $id = $request['id'];
        $level = Level::find($id);
        $class = $level->classes;
        return response()->json($class->toJson());
    }
}