<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/2/2016
 * Time: 12:17 AM
 */


namespace App\Http\Controllers;


class mainController extends Controller{
    public function getMain()
    {
        return view('main');
    }

    

}