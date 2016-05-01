<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 10:44 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class adminLevelController extends Controller{
    public function getLevel()
    {
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        return view('levelAdmin');
    }
}