<?php
session_start();

$var = session('state');
if($var != "in"){
    return Redirect('/registration');
}

?>


<html>
<head>
    
       <meta name="csrf-token" content="<?php echo csrf_token() ?>">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script src="js/postacform.js"></script>
       <link rel="stylesheet" href="css/localcss.css">
        
</head>
<body>
        
<br>

<form action='/postactivity' method='post'><input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <pre>
    <table>
        <tr><td id='header1'>Category</td><td id='form11'> <select onChange="getAction(this)" name="category" style="width: 95%"><option> </option>
         @foreach($category as $cat)<option value="{{ $cat->id }}"> {{ $cat->title }} </option>@endforeach
                </selet></td>
            <td id='header1'>
                Say something!
            </td>
            <td id='formta'><textarea name='caption' id='textarea' maxlength='100'></textarea>
            </td>
        </tr>
        <tr id='viewobject'></tr>
        <tr id='viewtool'></tr>
        <tr><td colspan="4" align='center'>
                <button type="submit" class="btn btn-success">
                Share Your Activity <span class="glyphicon glyphicon-send"></span></button>
                        
            </td>
        </tr>

    </table>
    </pre>
</form>

        
</body>
    
</html>
