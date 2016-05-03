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
//        $class=Classes::find(4);
//        $lectures=$class->lectures;
//        print_r($lectures);
//        $app=app();
//        $lectureMap=$app->make  ('stdClass');
//        foreach ($lectures as $lecture){
//            echo $lecture->lectureTime->time;
//            $lectureMap=$this->scheduleTim($lecture,$lectureMap);
//            print_r($lectureMap->day[0]->lecture[1]);
//        }
//        print_r($lectureMap);
//        foreach ($lectureMap->day as $day){
//            echo 'lecture: ';
//            foreach ($day->lecture as $l){
//                echo $l->teacher->name;
//               echo '</br>';
//            }
//            echo '</br>';
//        }
//        for($i=0;$i<6;$i++){
//            $day=$lectureMap->day[$i];
//            if(isset($day)) {
//                for ($i = 1; $i < 9; $i++){
//                    $lecture=$day->lecture[$i];
//                    if(isset($lecture)){
//                        echo $lecture->teacher->name;
//                    }
//
//                }
//            }
//        }
//       $t=Lecture::find(2);
//        $w=$t->lectureTimes->first();
//        $temp=$this->scheduleTim($w);
//        print_r($temp->day[0]->hi[0]);
        if(Auth::check()){
            $user= Auth::user();
            if($user->type=='admin'){
                return redirect()->route('adminFirst');
            }
            if($user->type=='teacher') {
                return redirect()->route('teacherFirst');
            }
            if($user->type=='student'){
                return redirect()->route('studentFirst');
            }
            if($user->type=='supervisor'){
                return redirect()->route('supervisorFirst');
            }
        }
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