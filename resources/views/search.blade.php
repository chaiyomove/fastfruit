@extends('layouts/master')
@section('content')

<!-- pop-up -->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<!-- pop-up -->


		<!--banner-->
		<div class="banner-section">
			<div class="container">
			</div>
		</div>
		<!--banner-->
		

		<div class="feature-section" style="padding-bottom:0em; padding-top:2em">
			<div class="container">			
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="alert alert-success alert-dismissable" style="text-align: center;">
						<p style="font-size:20px">ผลลัพธ์การค้นหา</p>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			</div>
		</div>


	<!--Featured Properties-->
				@foreach ($orchards as $key => $orchard)
					@if ($key%4 == 0)		
						<div class="feature-section" style="padding:0em 0em 3em 0em;">
							<div class="container">
								<div class="feature-grids">
					@endif
									<div class="col-md-3 feature-grid">
										<img src="images/f1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
										<h5>{{$orchard->nameOrchard}}</h5>
										<p>{{$orchard->description}}</p>
										<a href="ProductDetail1.html">
											<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
										</a>
									</div>
					@if (($orchards->last()===$orchard) || $key%4 == 3)
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					@endif
				@endforeach				
	<!--Featured Properties-->
@endsection