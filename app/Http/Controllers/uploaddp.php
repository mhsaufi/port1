<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class uploaddp extends Controller
{
    //
    public function saveNewDp(Request $request){
        
        $file = $request->file('userdp');
        $id = $request->input('id');
        $original_name = $file->getClientOriginalName();
        $dp_storage = "img/dp";
        
        $newfilename = "img/dp/".$id."".$original_name;
        
        $file->move($dp_storage,$newfilename);
        
        DB::table('member')->where('id',$id)->update(['dp_url'=>$newfilename]);
        
        return Redirect('apps');
        
    }
    
    public function saveNewInfo(Request $request){
        
        $email = $request->input('email');
        $id = $request->input('id');
        $fullname = $request->input('fullname');
        $organization = $request->input('organization');
        $position = $request->input('position');
        $username = $request->input('username');
        
        DB::table('member')->where('id',$id)
                ->update(['name'=>$fullname,
                          'username'=>$username,
                          'organization'=>$organization,
                          'position'=>$position,
                          'email'=>$email]);
        
        return Redirect('apps');
    }
    
        
    public function changeBackground(Request $request){
        
        $file = $request->file('bgimage');
        $id = $request->input('id');
        $original_name = $file->getClientOriginalName();
        $dp_storage = "img/bgimage";
        
        $newfilename = "img/bgimage/".$id."".$original_name;
        
        $file->move($dp_storage,$newfilename);
        
        DB::table('member')->where('id',$id)->update(['bgimg'=>$newfilename]);
        
        return Redirect('apps');
        
    }
}
