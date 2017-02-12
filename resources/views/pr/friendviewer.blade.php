<?php
session_start();

$var = session('state');
if($var != "in"){
    return Redirect('/registration');
}

?>

<!DOCTYPE HTML>
<HTML lang="en">
    
    <HEAD>
        <TITLE> PostAc </TITLE>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/localcss.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </HEAD>
    <BODY>
        
        <br/><br/>
        <div class="row">
            <div class="col-md-10">
                <h4 class="text-muted">---ICCS FRIEND</h4>
            </div>
            <div class="col-md-2">
                <a type="button" href="/apps" class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-backward"></span> Return
                </a>
                <a href="/registration" class="btn btn-warning btn-sm" align="right">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
            </div>
        </div>
        <hr/>
        @include('pr.frienddetail');
        
        
    </BODY>
    
</HTML>
