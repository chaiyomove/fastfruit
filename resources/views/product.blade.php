@extends('layouts/master')
@section('content')

<!-- FlexSlider -->
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
				<h3>ผลผลิตทั้งหมด</h3>
			</div>
		</div>
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
									<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
									<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
									<img src="{{$product->picture}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
									<h5 class="space">{{$product->description}}</h5>
									<p></p>
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
		<!--Featured Properties-->
	
@endsection