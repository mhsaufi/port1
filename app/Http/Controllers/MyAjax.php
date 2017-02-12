<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAjax extends Controller
{
    //
//    public function getAction(Request $request){
//        
//        $msg2 = $request->input('str');
//        
//        $action = \App\action::where('cat_id','==',$msg2)->get();
//        
//        $print = "<td id='header1'>Action</td><td id='form1'> <select "
//                . " name='action' style='width: 40%'><option></option>";
//        
//        foreach($action as $act){
//            $print .= "<option value=".$act['act_id']."> ".$act['act_name']." </option>";
//        }
//        
//        $print .= "</select></td><td></td><td></td></tr>";
//    
//        return response()->json(array('msg'=>$print,200)); 
//    }
    
    public function getObject(Request $request){
        
        $msg2 = $request->input('str');
        
        $obj = \App\Object::where('cat_id',$msg2)->orderBy('ob_desc')->get();
        
        echo "<td id='header1'> Activity </td><td id='form1'> <select "
                . " name='object' style='width: 95%'><option></option>";
        
        foreach($obj as $ob){
            echo "<option value=".$ob['ob_id']."> ".$ob['ob_desc']." </option>";
        }
        
        echo "</select></td><td></td><td></td>";
    
    }
    public function getTool(Request $request){
        
        $msg2 = $request->input('str');
        
        $obj2 = \App\Tool::where('cat_id',$msg2)->orderBy('tool_name')->get();
        
        
            echo "<td id='header1'> Using </td><td id='form1'> <select "
                    . " name='tool' style='width: 95%'><option></option>";
        
            foreach($obj2 as $ob2){
                echo "<option value=".$ob2['tool_id']."> ".$ob2['tool_name']." </option>";
            }
        
            echo "</select></td><td></td><td></td>";
    
    }
}
