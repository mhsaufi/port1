<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PanelBoard extends Controller
{
    //
    public function viewPanelBoard(){
        
        $listpost = DB::table('post')
                ->leftJoin('member','post.member_id','=','member.id')
                ->leftJoin('category','post.cat_id','=','category.id')
                ->leftJoin('object','post.obj_id','=','object.ob_id')
                ->leftJoin('tool','post.tool_id','=','tool.tool_id')
                ->select('post.post_id','member.dp_url','post.member_id','member.username','category.title','object.ob_desc','tool.tool_name','post.caption')
                ->orderBy('post.post_id','desc')
                ->get();
        
        return $listpost;
        
    }
    
}
