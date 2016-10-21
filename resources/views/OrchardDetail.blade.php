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
	<script>

		function open_map() 
		{
			if (document.getElementById('map').style.visibility == "hidden"){
				document.getElementById('map').style.visibility = "visible";	
			} else {
				document.getElementById('map').style.visibility = "hidden";					
			}
			
		}
		
	</script>
	<script>
		jQuery(function ($) {

    $('#swapFollow').on('click', function () {
        var $el = $(this),
            textNode = this.lastChild;
        $el.find('i').toggleClass('glyphicon-ok glyphicon-plus');
        textNode.nodeValue = ($el.hasClass('follow') ? 'กำลังติดตาม' : 'ติดตาม')
        $el.toggleClass('follow');
    });
});
	</script>
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >


			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3>{{$orchard->nameOrchard}}</h3>
					<div id="owl-demo" class="owl-carousel">
						<div class="item">		
							<div class="testmonial-text" style="width: 55%; margin: auto; float: left;">
								<div class="carousel slide" id="carousel-824332" 	>
									<ol class="carousel-indicators" >
										<li class="active" data-slide-to="0" data-target="#carousel-824332">
										</li>

										@if (!str_contains($orchard->picture2, "no11"))
											<li data-slide-to="1" data-target="#carousel-824332">
											</li>
										@endif
										@if (!str_contains($orchard->picture3, "no11"))
											<li data-slide-to="2" data-target="#carousel-824332">
											</li>
										@endif

									</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="{{ asset($orchard->picture1)}}" style="height: 300px; width: 850px;" />
									</div>

									@if (!str_contains($orchard->picture2, "no11"))
									<div class="item">
										<img src="{{ asset($orchard->picture2)}}" style="height: 300px; width: 850px;" />										
									</div>
									@endif
									@if (!str_contains($orchard->picture3, "no11"))
									<div class="item">
										<img src="{{ asset($orchard->picture3)}}" style="height: 300px; width: 850px;" />
									</div>
									@endif

								</div> 
								<a class="left carousel-control" href="#carousel-824332" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-824332" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
							<div style="margin-top: 15px">
							<table>
								<tr>
									<!--<td>
										<button type="button" class="btn btn-info btn-sm"> 
											<h5>
											<i class="glyphicon glyphicon-user"> </i>
											<i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท
											</h5>
							            </button>
									</td>-->
									<td>
										<a href="{{url('productofrochard',[25])}}">
											<button type="button" class="btn btn-danger btn-sm" > 
												
												<i class="glyphicon glyphicon-eye-open">&nbsp;</i>ผลผลิต
												
							                </button>														
										</a>
									</td>
									<td>
										<button type="button" class="btn btn-warning btn-sm" id="openmap" onclick="open_map()"> 
										    
											<i class="glyphicon glyphicon-globe">&nbsp;</i>
											แผนที่
						                </button>
									</td>
									<td>
										<button type="button" class="btn btn-success btn-sm follow"
										 id="swapFollow"> 
									        
										    <i class="glyphicon glyphicon-plus" >&nbsp;</i>
										    ติดตาม
										    
					                    </button>
									</td>									
								</tr>
								<tr>
									<td>
										<a href="{{url('plots',[$orchard->idOrchard])}}">
										<button type="button" class="btn btn-info btn-sm" style="margin-top: 10px"> 
									        
										    <i class="glyphicon glyphicon-eye-open">&nbsp;</i>
										    ดูแปลง
					                    </button>
					                    </a>
									</td>
									<td>
										<a href="{{url('plot/' .$orchard->idOrchard. '/create')}}">
											<button type="button" class="btn btn-primary btn-sm" style="margin-top: 10px"> 
										        
											    <i class="glyphicon glyphicon-plus">&nbsp;</i>
											    เพิ่มแปลง
						                    </button>
					                    </a>
									</td>
								</tr>
							</table>
								
					            
							</div>
						</div>

								<!--Gentelela_table-->
									<div class="col-md-12 col-sm-12 col-xs-12" style="width: 45%; margin: auto; float: right;">
									    <div class="x_panel">
									    <div class="x_title">
									        <h4>ข้อมูล {{$orchard->nameOrchard}}</h4>
									        <div class="clearfix"></div>
									    </div>
									        <div class="x_content" style="font-size: 16px">

									            <table class="table table-striped">
									                <tbody>
									                <tr>
									                    <th scope="row" width="40%">รายละเอียด</th>
									                    <td colspan="2" align="left">
									                    {{$orchard->description}}	
									                    </td>
									                    <td></td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">ที่อยู่</th>
									                    <td colspan="2" align="left">{{$orchard->address}}               	
									                    </td>
									                    <td></td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">จังหวัด</th>
									                    <td colspan="2" align="left">{{$orchard->province->provinceName}}</td>
									                    <td></td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">พื้นที่</th>
									                    <td align="left" width="5%">{{$orchard->area}}</td>
									                    <td align="left">ไร่</td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">ติดต่อผู้ขาย</th>
									                    <td colspan="2" align="left">{{$orchard->phone}}</td>
									                    <td></td>
									                </tr>							                
									                </tbody>
									            </table>

									        </div>
										</div>
									</div>

										{{-- <h1>MAP</h1> --}}
										    <script>
										       function initMap() {
										        var uluru = {lat: {{App\Orchards::find($orchard->idOrchard)->lat}}, lng: {{App\Orchards::find($orchard->idOrchard)->lng}} };
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
										    
										    <div id="map" style="visibility: hidden;"">
										    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3gEIaUeZYIfOeIDdjhQDtobPsFl_raoc&callback=initMap&language=th" async defer></script>
										   
											</div>
											
										
										{{-- 	<Map>	 --}}
									
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>

			<!--profile-->
			
@endsection