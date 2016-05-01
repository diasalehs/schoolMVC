<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 2:10 PM
 */
namespace App\Http\Controllers;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class adminMessageController extends Controller{
    public function getMessage(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        return view('messagesAdmin',['received'=>['']]);
    }

    public function getShow(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $user=Usere::find(1);
        $sent=$user->sentMessages;
        $receive=$user->receivedMessages;
        return view('showMA');
    }
    public function createMessage(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $user=Usere::find(1);
        $user->sentMessages()->create(['send_to'=>$request['sender'],'title'=>$request['subject'],'body'=>$request['message']]);
        return redirect('admin/messages');
    }
}