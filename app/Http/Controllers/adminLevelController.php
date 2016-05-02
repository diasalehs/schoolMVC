<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 10:44 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use App\Level;


class adminLevelController extends Controller{
    public function getLevel()
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $levels=Level::all();
        return view('levelAdmin')->with('levels',$levels);
    }

    public function create(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }

        $name = $request['levelName'];
        if($name == 'الأول'or $name == 'الثاني'
        or  $name == 'الثالث'or $name == 'الرابع'
        or $name == 'الخامس'or $name == 'السادس'
        or $name == 'السابع'or $name == 'الثامن'
        or $name == 'التاسع'or $name == 'العاشر'){
        Level::create(["name"=>$name]);}

        return redirect()->route('adminLevel');
    }
    public function edit(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }

        $id = $request['levelId'];
        $name=$request['newName'];
        $level=Level::find($id);
        if($level!=null){
            $level->name=$name;
            $level->save();
        }


        return redirect()->route('adminLevel');
    }
    public function delete(Request $request)
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }

        $id = $request['levelId'];
        $level=Level::find($id);
        if($level!=null){
            $level->delete();
        }


        return redirect()->route('adminLevel');
    }

}