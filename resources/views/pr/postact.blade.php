<?php

$var = session('state');
if($var != "in"){
    return Redirect('/registration');
}

?>

<!DOCTYPE HTML>
<HTML lang="en">
    <head>
        <title>PostAc</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/localcss.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

        
    </head>
    <body>
        <div class="container">
            <br/><br/>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#record">i-Panel</a></li>
                <li><a href="/apps">MAIN PANEL</a></li>
                <div align="right">
                    <a href="/registration" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>
            </ul>
            <div class="tab-content">
                <div>
                    
                    <h3 id="header">Post Activity</h3>
                    
                    @include('pr.postform')
                    
                </div>
            </div>
            
            
            
        </div>
        
    </body>
</HTML>