<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 5:49 PM
 */
namespace App\Http\Controllers;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Usere;

class logoutController extends Controller implements  \Illuminate\Contracts\Auth\Authenticatable{
    use Authenticatable;
    public function getLogout(){
        Auth::logout();
        return redirect()->route('loginPage');
    }
}