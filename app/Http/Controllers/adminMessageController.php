<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 2:10 PM
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class adminMessageController extends Controller{
    public function getMessage(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        return view('messagesAdmin');
    }

    public function getShow(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        return view('showMA');
    }
}