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
use App\Usere;
class adminMessageController extends Controller{
    public function getMessage(){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $user=Usere::find(1);
        $sent=$user->sentMessages;
        $received=$user->receivedMessages;
//        return view('messagesAdmin',['received'=>$received,'sent'=>$sent]);
    }

    public function createMessage(Request $request){
        if (!Auth::check() or Auth::user()->type != 'admin') {
            return redirect()->route('loginPage');
        }
        $user=Usere::find(Auth::user()->id);
        $user->sentMessages()->create(['send_to'=>$request['sender'],'title'=>$request['subject'],'body'=>$request['message']
        ,'send_from'=>Auth::user()->id]);
//        return redirect('admin/messages');
    }
}