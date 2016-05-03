<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 4/30/2016
 * Time: 11:55 PM
 */

namespace App\Http\Controllers;

use App\Lecture;
use App\Subject;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Usere;
use App\Teacher;
use App\Classes;

class loginController extends Controller implements  \Illuminate\Contracts\Auth\Authenticatable{
    use Authenticatable;
    public function getLogin(){
        $class=Classes::find(4);
//        echo $class->subjects->first()->id;
        $subject=Subject::find(1);
//        echo $subject->teachers->first()->pivot->lecturetime_id;
        $teacher=Teacher::find(1);
        echo $teacher->classes->first()->id;
//        $lecture=Lecture::all()->first();
//        echo $lecture->teacher->id;
//        print_r($teacher->lectures);
//        foreach($teacher->lectures as $lecture){
//            echo $lecture->lecturetime_id;
//        }
//        if(Auth::check()){
//            $user= Auth::user();
//            if($user->type=='admin'){
//                return redirect()->route('adminFirst');
//            }
//            if($user->type=='teacher') {
//                return redirect()->route('teacherFirst');
//            }
//            if($user->type=='student'){
//                return redirect()->route('studentFirst');
//            }
//            if($user->type=='supervisor'){
//                return redirect()->route('supervisorFirst');
//            }
//        }
//        return view('login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'inputName' => 'required', 'inputPassword' => 'required'
        ]);

        if(!Auth::attempt(['id'=>$request['inputName'],'password'=>$request['inputPassword']])){
          return redirect()->back()->with(['fail'=>'Could not login you']);
        }
        $user= Auth::user();
        if($user->type=='admin'){
            return redirect()->route('adminFirst');
        }
        if($user->type=='teacher'){
            return redirect()->route('teacherFirst');
        }
        if($user->type=='student'){
            return redirect()->route('studentFirst');
        }
        if($user->type=='supervisor') {
            return redirect()->route('supervisorFirst');
        }
    }
}