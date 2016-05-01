<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;

class adminSubjectController extends Controller{
    public function getSubject(){
        return view('SubjectAdmin');
    }
}