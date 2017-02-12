<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title> PostAc </title>
        <meta charset="utf-8">
        
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/localcss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body class='bgku' style="background-image: url('img/bg2.jpg');background-attachment: fixed;">
        
        <div class='header'>
            <nav class="navbar navbar-inverse">
                <div class="container" style="font-weight: bold">
                    <ul class="nav navbar-nav">
                        <li><a href="/">HOME</a></li>
                        <li><a href="/registration">MEMBERSHIP</a></li>
                        <li><a href="/aboutus">REACH US</a></li>
                        <li><a href="#">CAREER</a></li>
                    </ul>

                    <div class="navbar-brand navbar-right">
                        
                        <a href='/registration'><span class="glyphicon glyphicon-log-in"></span></a>&nbsp&nbsp&nbsp
                        <span id="logo">PostAc</span> </div>
                    </div>
                
            </nav>  
        </div>
        
        @yield('content')
    </body>
</html>
