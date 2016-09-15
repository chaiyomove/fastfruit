@extends('layouts/master')
@section('content')

	 <script src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			<script>
			// Can also be used with $(document).ready()
				$(window).load(function() {
				$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
				});
				});
			</script>
			<!-- //FlexSlider-->

								
		<!--banner-->
		<div class="banner-section">
			<div class="container">
			</div>
		</div>
		<!--banner-->
	

		<!--Featured Properties-->
		<div class="feature-section" style="padding:2em 0em 0em 0em;">
				<div class="container">
					<h3>สวนทั้งหมด</h3>
				</div>
		</div>
			@foreach ($orchards as $key => $orchard)
				@if ($key%4 == 0)	
				<div class="feature-section" style="padding:0em 0em 3em 0em;">
					<div class="container">
						
						<div class="feature-grids">
				@endif
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>{{$orchard->nameOrchard}}</h5>
								<p>{{$orchard->description}}</p>
								<p></p>							
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							
					@if (($orchards->last()===$orchard) || $key%4 == 3)
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

		@endif
	@endforeach	
		
		
@endsection