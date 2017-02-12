@extends('layout')
@section('content')

<h2 id='whatarewe'> How to Reach Us? </h2>
<br>

<div id="map" align='center'>
    
</div>

<script>
      function initMap() {
        var uluru = {lat: 3.192185, lng: 101.742606};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqhYniyJAsaBfO6FlkZ4kVyJLT3057rBc&callback=initMap">
    </script>
    <hr>
    <p id='desc'>Mail to us : postac@ineoc.net / Fax : 010-3453 66722 / 010-3453 66743 </p>
    
<br><br>
@include('footer')

@stop
