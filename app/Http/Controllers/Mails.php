<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mails extends Controller
{
    //
    public function viewInbox($curr){
        
        //$suggest = DB::select('select * from member')->where('id','!=',$curr);
        
        $inbox = \App\Mail::where('mail_recepeint',$curr)->get();
        
        //return view('pr/appslayout',['suggest'=>$rs]); 
        return $suggest;
        
    }
}
