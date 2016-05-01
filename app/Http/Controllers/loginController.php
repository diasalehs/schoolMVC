<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 4/30/2016
 * Time: 11:55 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller{
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        $this->valdiate($request,[
            'inputEmail' => 'required|integer', 'inputPassword' => 'required|string'
        ]);

        if(Auth::attempt(['name'=>$request['inputName'],'password'=>$request['inputPassword']])){
            return redirect()->back()->with(['fail'=>'Could not login you']);
        }
        return redirect()->route('admin.blade');
    }
}