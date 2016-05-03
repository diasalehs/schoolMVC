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
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes;
use App\Lecture;


class adminClassController extends Controller{
    public function getClass(){
        if(!Auth::check()){
            return redirect()->route('loginPage');
        }
        $levels = Level::all();
        $classes = Classes::all();
        $teachers=Teacher::all();
        $students=Student::all();
        $found = [];
        foreach ($classes as $class) {
            array_push($found, $class->section);
        }
        $results = array_unique($found);
        return view('classAdmin', ['levels' => $levels,'classes' => $classes,
            'teachers'=>$teachers,'students'=>$students,'results'=>$results]);
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
    public function  schedule(Request $request){
        if(!Auth::check()){
            return redirect()->route('loginPage');
        }
//        $levelid=request['levelid'];
        $classid=$request['classid'];
        $class=Classes::find($classid);
//        $level=Level::find($levelid);
//        $subjects=$level->subjects;
        $lectures=$class->lectures;
        $app=app();
        $schedule=$app->make('stdClass');
        foreach ($lectures as $lecture){
            $schedule=$this->scheduleTim($lecture,$schedule);
        }
        return response()->json(json_encode($schedule));
    }
    private function scheduleTim($lecture,$lectureMap){
        $app=app();
        $time=$lecture->lectureTime;
        $index=(int)($time->time);
        $name=$lecture->teacher->employee->person->name->fullName();
        $id=$lecture->teacher->id;

        if($time->day=='السبت'){
            if(!isset($lectureMap->day[0]))
                $lectureMap->day[0]=$app->make('stdClass');
            if(!isset($lectureMap->day[0]->lecture[$index]))
                $lectureMap->day[0]->lecture[$index]=$app->make('stdClass');
            if(!isset($lectureMap->day[0]->lecture[$index]->teacher))
                $lectureMap->day[0]->lecture[$index]->teacher=$app->make('stdClass');
            $lectureMap->day[0]->lecture[$index]->teacher->id=$id;
            $lectureMap->day[0]->lecture[$index]->teacher->name=$name;
            $lectureMap->day[0]->lecture[$index]->subject=$lecture->subject;

        }
        elseif ($time->day=='الاحد'){
            if(!isset($lectureMap->day[1]))
                $lectureMap->day[1]=$app->make('stdClass');
            if(!isset($lectureMap->day[1]->lecture[$index]))
                $lectureMap->day[1]->lecture[$index]=$app->make('stdClass');
            if(!isset($lectureMap->day[1]->lecture[$index]->teacher))
                $lectureMap->day[1]->lecture[$index]->teacher=$app->make('stdClass');
            $lectureMap->day[1]->lecture[$index]->teacher->id=$id;
            $lectureMap->day[1]->lecture[$index]->teacher->name=$name;
            $lectureMap->day[1]->lecture[$index]->subject=$lecture->subject;

        }
        elseif ($time->day=='الاثنين'){
            if(!isset($lectureMap->day[2]))
                $lectureMap->day[2]=$app->make('stdClass');
            if(!isset($lectureMap->day[2]->lecture[$index]))
                $lectureMap->day[2]->lecture[$index]=$app->make('stdClass');
            if(!isset($lectureMap->day[2]->lecture[$index]->teacher))
                $lectureMap->day[2]->lecture[$index]->teacher=$app->make('stdClass');
            $lectureMap->day[2]->lecture[$index]->teacher->id=$id;
            $lectureMap->day[2]->lecture[$index]->teacher->name=$name;
            $lectureMap->day[2]->lecture[$index]->subject=$lecture->subject;

        }
        elseif ($time->day=='الثلاثاء'){
            if(!isset($lectureMap->day[3]))
                $lectureMap->day[3]=$app->make('stdClass');
            if(!isset($lectureMap->day[3]->lecture[$index]))
                $lectureMap->day[3]->lecture[$index]=$app->make('stdClass');
            if(!isset($lectureMap->day[3]->lecture[$index]->teacher))
                $lectureMap->day[3]->lecture[$index]->teacher=$app->make('stdClass');
            $lectureMap->day[3]->lecture[$index]->teacher->id=$id;
            $lectureMap->day[3]->lecture[$index]->teacher->name=$name;
            $lectureMap->day[3]->lecture[$index]->subject=$lecture->subject;

        }
        elseif ($time->day=='الاربعاء'){
            if(!isset($lectureMap->day[4]))
                $lectureMap->day[4]=$app->make('stdClass');
            if(!isset($lectureMap->day[4]->lecture[$index]))
                $lectureMap->day[4]->lecture[$index]=$app->make('stdClass');
            if(!isset($lectureMap->day[4]->lecture[$index]->teacher))
                $lectureMap->day[4]->lecture[$index]->teacher=$app->make('stdClass');
            $lectureMap->day[4]->lecture[$index]->teacher->id=$id;
            $lectureMap->day[4]->lecture[$index]->teacher->name=$name;
            $lectureMap->day[4]->lecture[$index]->subject=$lecture->subject;

        }
        elseif ($time->day=='الخميس'){
            if(!isset($lectureMap->day[5]))
                $lectureMap->day[5]=$app->make('stdClass');
            if(!isset($lectureMap->day[5]->lecture[$index]))
                $lectureMap->day[5]->lecture[$index]=$app->make('stdClass');
            if(!isset($lectureMap->day[5]->lecture[$index]->teacher))
                $lectureMap->day[5]->lecture[$index]->teacher=$app->make('stdClass');
            $lectureMap->day[5]->lecture[$index]->teacher->id=$id;
            $lectureMap->day[5]->lecture[$index]->teacher->name=$name;
            $lectureMap->day[5]->lecture[$index]->subject=$lecture->subject;

        }

        return $lectureMap;
    }
}