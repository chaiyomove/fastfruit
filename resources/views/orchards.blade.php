@extends('layouts/master')
@section('content')

	 <script src="{{asset('js/jquery.flexslider.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
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
				
				<div class="col-md-3 feature-grid" >
					<div class="frame">
					@if ($key<=10)
						<img src="{{asset('images/new.png')}}" style="position: absolute; margin-left: -5px; margin-top: -2px">
					@endif
					@foreach ($orchard->orchardPlots as $orchardPlot)
						@if ($orchardPlot->idPlotStatus == 1)
							<img src="{{asset('images/gap.png')}}" style="position: absolute; margin-left: 2px; margin-top: 115px">
						@endif
					@endforeach
						<img src="{{asset($orchard->picture1)}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
						<h5 class="space">{{$orchard->nameOrchard}}</h5>
						<p class="space">{{$orchard->description}}</p>		
						<a href="{{'orchards/'.$orchard->idOrchard}}" class="space">
							<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
						</a>
					</div>
				</div>

				@if ((count($orchards)===$key+1) || $key%4 == 3)
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				@endif
			@endforeach	
			<div class="text-center">
				{!! $orchards->Links(); !!}
			</div>
		
		
@endsection