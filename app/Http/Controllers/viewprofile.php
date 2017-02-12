<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\friend;
use App\Http\Controllers\PanelBoard;

class viewprofile extends Controller
{
    //
    public function profileView(Request $request, friend $friend, PanelBoard $listpost){
        
        $state = $request->session()->get('state');
        $pinned_alert = "";
        
        if($state == "in"){
            
            $curruser = $request->session()->get('curruse');
            
            $result = DB::select('select * from member where id = ?',[$curruser]);
            
            $suggest = $friend->suggestedFriend($curruser);
            $timeline = $listpost->viewPanelBoard();
            
           // return view('pr/appslayout',['result'=>$rs]);
            return view('pr/appslayout',compact('result','suggest','timeline','curruser'));
            
        }else{
            
            $pinned_alert = "Login to continue using the system";
            return view('/registration',['pinned'=>$pinned_alert]);
            
        }   
    }
    


}
