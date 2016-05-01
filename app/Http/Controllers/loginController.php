<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 4/30/2016
 * Time: 11:55 PM
 */

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller implements  \Illuminate\Contracts\Auth\Authenticatable{
    use Authenticatable;
    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'inputName' => 'required|integer', 'inputPassword' => 'required|string'
        ]);

        if(!Auth::attempt(['id'=>$request['inputName'],'password'=>$request['inputPassword']])){
          return redirect()->back()->with(['fail'=>'Could not login you']);
        }
        return redirect('admin');
    }
}