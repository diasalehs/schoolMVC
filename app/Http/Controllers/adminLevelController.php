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
        return view('levelAdmin');
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

}