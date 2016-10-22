<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('layouts/master')
@section('content')

<script src="js/responsiveslides.min.js"></script>
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
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
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


		
	
		<!--banner-->
		<div class="slider" style="height: 500px ">
			<div class="callbacks_container" >
				<ul class="rslides" id="slider">
					<div class="slid banner1" >
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>สวนอุดมสิน</h3>
								<p>สวนเรามีผลไม้หลากหลาย</p>
								<a href="{{'orchards/6'}}" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner2">	
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>สวนมนตรีขายกล้วย</h3>
								<p>กล้วยหลากหลายชนิด</p>
								<a href="{{'orchards/10'}}" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner3">	
						{{-- <div class="caption" style="width:350px; height: 150px ">
							
						</div> --}}
					</div>
				</ul>
			</div>
		</div>

		<!--Featured Properties-->
		@foreach ($latestProducts as $key => $product)
			@if ($key%4 == 0)	
				<div class="feature-section">
					<div class="container">
						<h3>ผลผลิตที่ลงใหม่</h3>
						<div class="feature-grids">
			@endif			
			<div class="col-md-3 feature-grid">
				<div class="frame">
					@if ($key<=10)
						<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
					@endif

					@if ($product->orchardPlot->idPlotStatus == 1)
						<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
					@endif
					<img src="{{$product->picture1}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
					{{-- <h5 class="space">{{$product->orchardPlot->fruitSpecie->specieName}}</h5>						 --}}
					<h5 class="space">{{$product->orchardPlot->fruitSpecie->specieName}}</h5>	
					<p class="space">{{$product->description}}</p>
					<a href="products/{{$product->idProductSprint}}" class="space">
						<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
					</a>
				</div>
			</div>
			@if ((count($latestProducts)===$key+1) || $key%4 == 3)	
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			@endif
		@endforeach	
		<!--Featured Properties-->
		
@endsection
			
			