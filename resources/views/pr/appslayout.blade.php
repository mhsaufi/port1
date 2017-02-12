<?php
session_start();

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

    <body  style="background-image: url('img/frt.jpg');background-attachment: fixed;">
        
        <div class="container">
            <br/><br/>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#record">i-Panel</a></li>
                <li><a data-toggle="tab" href="#home">PROFILE</a></li>
                <li><a data-toggle="tab" href="#friend">FRIENDS</a></li>
                <li><a data-toggle="tab" href="#noti">NOTIFICATION</a></li>
                <div align="right">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateModal">
                        <span class="glyphicon glyphicon-edit"></span> Update Profile
                    </button>
                    
                    <a href="/logout" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>
                @include('pr.updateprofile')
            </ul>
            <div class="tab-content">
                <div id="record" class="tab-pane fade in active">
                    @include('pr.ipanel')
                </div>
                <div id="home" class="tab-pane fade">
                    @include('pr.profile')
                </div>
                <div id="friend" class="tab-pane fade">
                    @include('pr.friend')
                </div>
                <div id="noti" class="tab-pane fade">
                    <h3>Notification Panel</h3>
                    <p>No notification yet</p>
                </div>
            </div>
            
            
            
        </div>
        
    </body>

    
</HTML>
