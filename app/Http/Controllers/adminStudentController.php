<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:50 PM
 */

namespace App\Http\Controllers;

class adminStudentController extends Controller{
    public function getStudent(){
        return view('studentAdmin');
    }
}