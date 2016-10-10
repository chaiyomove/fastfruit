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
								<h3>เงาะ</h3>
								<p>เงาะโรงเรียน</p>
								<a href="#" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner2">	
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>มะม่วง</h3>
								<p>มะม่วงหวานๆ</p>
								<a href="#" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner3">	
						<div class="caption" style="width:350px; height: 150px ">
							<h3>ทุเรียน</h3>
							<p>หวาน กรอบ อร่อย</p>
							<a href="#" class="button">อ่านเพิ่ม</a>
						</div>
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
						<form method="GET" action="{{url('/productdetail')}}">
							{{ csrf_field() }}
							<div class="col-md-3 feature-grid">
								<div class="frame">
									@if ($key<=10)
										<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
									@endif

									@if ($product->orchardPlot->idPlotStatus == 1)
										<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
									@endif
									<img src="{{$product->picture1}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
									<h5 class="space">{{$product->orchardPlot->fruitSpecie->specieName}}</h5>
									<p class="space">{{$product->description}}</p>
									{{-- <a href="products/{{$product->idProductSprint}}" class="space"> --}}
										<input type="hidden" name="idProductSprint" value="{{$product->idProductSprint}}">	
										<button type="submit" class="btn btn-link">
											<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
										</button>
									{{-- </a> --}}
								</div>
							</div>
						</form>
			@if ((count($latestProducts)===$key+1) || $key%4 == 3)	
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			@endif
		@endforeach	
		<!--Featured Properties-->
		
@endsection
			
			