<?php
/**
 * Created by PhpStorm.
 * User: Mazen
 * Date: 5/1/2016
 * Time: 2:10 PM
 */

class adminMessageController extends Controller{
    public function getMessage(){
        return view('messagesAdmin');
    }

    public function getShow(){
        return view('showMA');
    }
}