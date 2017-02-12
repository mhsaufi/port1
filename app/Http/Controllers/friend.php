<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class friend extends Controller
{
    //
    public function suggestedFriend($curr){
        
        //$suggest = DB::select('select * from member')->where('id','!=',$curr);
        
        $suggest = \App\Members::where('id','!=',$curr)->get();
        
        //return view('pr/appslayout',['suggest'=>$rs]); 
        return $suggest;
        
    }
    
    public function viewFriend(Request $request){
        
        $to_view = $request->input('to_view');
        
        $friend = \App\Members::where('id',$to_view)->get();
        
        return view('pr/friendviewer',['result'=>$friend]);    
        
    }
    
    public function sendMessage(Request $request){
        
        $sender = $request->session()->get('curruse');
        $recipient = $request->input('recepeint');
        $subject = $request->input('subject');
        $message = $request->input('message');
        
        DB::table('mail')->insert(['mail_sender' => $sender,
                                   'mail_recepeint' => $recipient,
                                   'mail_subject' => $subject,
                                   'mail_message' => $message]);
        
        return Redirect('apps');
        
    }
    
}
