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

			<div class="col-md-3 feature-grid">
				<div class="frame">
					@if ($key<=10)
						<img src="{{ asset('images/new.png') }}" style="position: absolute; margin-left: -5px; margin-top: -2px">
					@endif

					@if ($product->orchardPlot->idPlotStatus == 1)
						<img src="{{ asset('images/gap.png') }}" style="position: absolute; margin-left: 2px; margin-top: 115px">
					@endif
					<img src="{{asset($product->picture1)}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
					<h5 class="space">{{$product->orchardPlot->fruitSpecie->specieName}}จาก {{$product->orchardPlot->orchard->nameOrchard}}</h5>						
					<p class="space">{{$product->description}}</p>
					<p class="space">จำนวนผลผลิต: {{$product->fruitNum}} กิโลกรัม</p>
					<p class="space">รอบการผลิต </p>
					<p class="space">ตั้งแต่:{{$product->startDate}} ถึง: {{$product->endDate}}</p>
					<div class="aaa">
					<a href="{{url('product', [$product->idProductSprint])}}" class="space">
						<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
					</a>
					</div>
				</div>
			</div>
			
			@if ((count($products)===$key+1) || $key%4 == 3)	
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			@endif
		@endforeach	
		<div class="text-center">
				{!! $products->Links(); !!}

			</div>
		<!--Featured Properties-->
	
@endsection