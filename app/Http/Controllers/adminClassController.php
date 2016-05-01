<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:52 PM
 */

namespace App\Http\Controllers;
use App\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminClassController extends Controller{
    public function getClass(){
        if(!Auth::check()){
            return redirect()->back();
        }
        $levels = Level::all();
        return view('classAdmin', ['levels' => $levels]);
    }

    public function  postCreate(Request $request){
        $name = $request->input('classname');
        $section = $request->input('section');
        $capacity = $request->input('capacity');
        Classes::create(['level_id' => $name, 'section' => $section, 'capacity' => $capacity]);
        return redirect('/admin/class');
    }

    public function  postLevels(Request $request){
        $id = $request['id'];
        $level = Level::find($id);
        $class = $level->classes;
        return response()->json($class->toJson());
    }
}