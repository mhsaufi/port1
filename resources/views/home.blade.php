@extends('layout')
@section('content')
<div id="pagecr" class="carousel slide" data-ride="carousel" data-interval="3000" align="right">
  <div class="carousel-inner" role="listbox">
      <div class="carousel-caption">
          <div class="row">
              <div class="col-lg-9">
            <h3 id="bannerhead">PostAc</h3>
            <p  id="bannercontent">Because we belong to some groups<br>
                                And groups belong under some topics<br>
                                Here we make the whole world smaller for everyone</p>
            <a href="/registration" class="btn btn-danger btn-lg" align="right"> Explore your true resources now! </a>
              </div>
              <div class="col-lg-3" align='left'><br><br>
                   <form action="/validate" method="post">
                       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                       <div class="form-group">
                       Username : <input type='text' name='username' id='username' class="form-control">
                       </div>
                       <div class="form-group">
                       Password : <input type='password' name='pass' id='pass' class="form-control">
                       </div>
                       <button type='submit' class="btn btn-primary btn-sm">Log In</button>
                   </form>
                  
              </div>
           </div>
       </div>
    <div class="item active">
        <img class="img-responsive" src="img/homecr/1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img class="img-responsive" src="img/homecr/2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img class="img-responsive" src="img/homecr/3.jpg" alt="Flower">
    </div>

    <div class="item">
      <img class="img-responsive" src="img/homecr/4.jpg" alt="Flower">
    </div>
  </div>

</div>
<br><br>


  <h3 id="whatarewe">What are we?</h3>
  <p id="desc">We unite people based on their same main interest.
  Aside from main interest, we want to make sure everyone are connected with the real
  source of what they had been looking for. <br>No jokes anymore, make friends and together we contribute for each other!</p>

<hr>
<br/><br/><br/><br/>
@include('footer')
@stop
