@extends('layout')
@section('content')

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class='container-fluid'>
    <div class='well'>
        @if(isset($pinned))
        <p style="color: red;font-style: italic;font-weight: bold"><small>{{ $pinned }}</small></p>
        @endif
        <form action="/validate" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="username">Username :</label>
                <input type='text' class="form-control" name='username' id='username'/>
            </div>
            <div class="form-group">
                <label for="pass">Password :</label>
                <input type='password' class="form-control" name='pass' id='pass'/>
            </div>
            <div class="form-group">
                <button type='submit' class="btn btn-warning">Log In</button>
            </div>
        </form>
        Not a member yet? <br/><br/>
        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-block">Become a Member for Free</button>
        @include('register')

    </div>
</div>
<div class="col-md-4"></div>
</div>
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
@include('footer')
@stop