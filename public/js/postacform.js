/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var csrf_token   =   $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                    headers: {"X-CSRF-TOKEN": csrf_token}
            });
            
function getchange(){
                $.ajax({
                 
                 type:'POST',
                 url:'/getform',
                 success:function(data){
                     $("#msg").html(data.msg);
                  }
                  
                });
 }
function getAction(stri){
                var str = stri.value;
                $.ajax({
                 
                 type:'POST',
                 url:'/getform',
                 data:{str : str},
                 success:function(response){
                     $("#viewobject").html(response);
                  }
                  
                });
                $.ajax({
                 
                 type:'POST',
                 url:'/getform2',
                 data:{str : str},
                 success:function(response){
                     $("#viewtool").html(response);
                  }
                  
                });
 }

