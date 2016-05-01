<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 1:43 PM
 */

namespace App\Http\Controllers;

class adminController extends Controller{
    public function getAdmin(){
        return view('admin');
    }
    public function getAdminFirst(){
        return view('adminFirst');
    }
}