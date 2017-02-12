<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registermember extends Controller
{
    //
    
    

    public function ViewForm (){
        return view('registration');
    }
    
    //register first time member
    public function RegisterMember(Request $request){
        
        $email = $request->input('email');
        $fullname = $request->input('fullname');
        $username = $request->input('username');
        $pass = $request->input('pass');
        $organization = $request->input('organization');
        $position = $request->input('position');
        
//        DB::insert('insert into member (name,username,password,email,organization,position) '
//                . 'values(?)',[$fullname,$username,$pass,$email,$organization,$position]);
        
        DB::table('member')->insert(['name' => $fullname,
                                     'username' => $username,
                                     'password' => $pass,
                                     'email' => $email,
                                     'organization' => $organization,
                                     'position' => $position]);
        
        return view('registration');
     
    }
    
    public function validateLogin(Request $request){
        
        $username = $request->input('username');
        $pass = $request->input('pass');
        $pinned_alert = "";
        
        $rs = DB::select('select * from member where username = ?',[$username]);
        $obj = "registration";
        
        if($rs != null){
        foreach($rs as $data){
        
           $val = $data->password; 
           $id = $data->id;
           
            if($val == $pass){
                
                
                $request -> session() -> put('curruse',$id);
                $request -> session() -> put('state','in');
                $obj = "apps";
                return Redirect($obj);
                
            }else{
                
                $pinned_alert = "Sorry, you might mistype the password";
                return view($obj,['pinned'=>$pinned_alert]);
            }
            
        }
        }else{
            $pinned_alert = "Sorry, the username is not registered";
            return view($obj,['pinned'=>$pinned_alert]);
        }
        
    }
    
    public function logOut(Request $request){
        
        $request -> session() -> put('state','out');
        
        return Redirect('/registration');
        
        
    }
}
