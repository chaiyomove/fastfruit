@extends('layouts/master')
@section('content')

 <link rel="stylesheet" href="{{asset('css/main.css')}}">

	<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
		 <script>
			$(function () {
			  $("#slider").responsiveSlides({
				auto:true,
				nav: false,
				speed: 1000,
				namespace: "callbacks",
				pager:true,
			  });
			});
		</script>
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >



										{{-- <h1>MAP</h1> --}}
										<div id="map"></div>
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
										    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3gEIaUeZYIfOeIDdjhQDtobPsFl_raoc&callback=initMap&language=th" async defer></script>

										{{-- 	<Map>	 --}}

			
@endsection