<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:43 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller{
    public function getAdmin(){
        if(!Auth::check()){
            return redirect()->route('admin');
        }
        return view('adminFirst');
    }
}