@extends('layouts/master')
@section('content')

 <link rel="stylesheet" href="{{asset('css/main.css')}}">


	{{-- <h1>MAP</h1> --}}
	{{-- <div id="map"></div>
    <script>
       	function initMap() {
	        var uluru = {lat: {{App\Orchards::find(25)->lat}}, lng: {{App\Orchards::find(25)->lng}}};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 4,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWKPwTquIvNcVchkVTbdougmPk9xbOt38&callback=initMap&language=th" async defer>
	</script> --}}


	   
<div class="commerce-tabs">
    <ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
    <li><a href="#profile" data-toggle="tab">Map</a></li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="home">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
    </div>
    <div class="tab-pane fade" id="profile">
        <div id="largemap">12354</div>   
    </div>
    <div id="map_canvas" style="display:none;">
</div>

	    


	<script>
		var map;

		jQuery(function($) {
		    $(document).ready(function() {

		        var latlng = new google.maps.LatLng(-34.397, 150.644);
		        var myOptions = {
		            zoom: 8,
		            center: latlng,
		            mapTypeId: google.maps.MapTypeId.ROADMAP
		        };
		        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		        console.dir(map);
		        google.maps.event.trigger(map, 'resize');
		        document.getElementById("largemap").style.display="block";
		        $('a[href="#profile"]').on('click', function(e) {
		        	
		        	document.getElementById("largemap").style.display="none";		
		        	document.getElementById("map_canvas").style.display="block";		
	            	var center = map.getCenter();
	                google.maps.event.trigger(map, "resize");
	                map.setCenter(center);
		        });

		        $('a[href="#profile"]').on('click', function(e) {
		        	
		        	document.getElementById("largemap").style.display="none";		
		        	document.getElementById("map_canvas").style.display="block";		
	            	var center = map.getCenter();
	                google.maps.event.trigger(map, "resize");
	                map.setCenter(center);
		        });

		        $('a[href="#profile"]').on('blur', function(e) {
		        	
		        		
		        	document.getElementById("map_canvas").style.display="none";		
	            	var center = map.getCenter();
	                google.maps.event.trigger(map, "resize");
	                map.setCenter(center);
		        });

		        $("#map_canvas").css("width", 400).css("height", 400);



		    });
		});
	</script>
	{{-- 	<Map>	 --}}

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWKPwTquIvNcVchkVTbdougmPk9xbOt38&callback=initMap&language=th" async defer>
</script>

			
@endsection