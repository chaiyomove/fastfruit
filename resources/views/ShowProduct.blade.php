@extends('layouts/master')
@section('content')

<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
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


			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3>ไม่มีผลผลิต</h3>
					<div id="owl-demo" class="owl-carousel">
						@foreach ($products as $key => $product)
							@if ($key%4 == 0)	
								<div class="feature-section" style="padding:0em 0em 3em 0em;">
									<div class="container">
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
													<img src="{{$product->picture}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
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
							@if ((count($products)===$key+1) || $key%4 == 3)	
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endif
						@endforeach	
						<div class="item">				
							<div class="testmonial-text">
								<a href="{{url('addorchard')}}" class="btn btn-info btn-sm">
          							<h4><span class="glyphicon glyphicon-plus-sign"></span> เพิ่มผลผลิต</h4>
       		 					</a> 					
							<br><br>
								<a href="{{url('updateorchard')}}" class="btn btn-info btn-sm">
          							<h4><span class="glyphicon glyphicon-cog"></span> แก้ไขข้อมูลสวน</h4>
        						</a>
        					</div>
									
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<!--profile-->
			
@endsection