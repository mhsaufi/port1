<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostAct extends Controller
{
    //
    public function loadCategory(){
        
        $category = \App\category::all();
        
        return view('pr/postact',['category' => $category]);
        
    }
    
    public function postActivity(Request $request){
        
        $category = $request->input('category');
        $object = $request->input('object');
        $tool = $request->input('tool');
        $caption = $request->input('caption');
        $member_id = $request->session()->get('curruse');
        
        DB::table('post')->insert(['member_id' => $member_id,
                                   'cat_id' => $category,
                                   'obj_id' => $object,
                                   'tool_id' => $tool,
                                   'caption' => $caption]);
        
        
        
        return Redirect('apps');
        
    }
}
