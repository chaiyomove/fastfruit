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
				<div class="feature-section" style="padding-bottom:0em; padding-top:3em">
					<div class="container">
						<h3>สวนทั้งหมด</h3>
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนสิรภัทร</h5>
								<p></p>							
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนเปรม</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/o3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนนภัสสกร</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/o4.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนวศิน</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!--Featured Properties-->

		<!--Featured Properties-->
				<div class="feature-section" style="padding-bottom:0em; padding-top:2em">
					<div class="container">
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/o5.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนจำปาเงิน</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/o6.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนจำเริญ</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o7.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนลองดู</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o8.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนเสียสละ</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!--Featured Properties-->

		<!--Featured Properties-->
				<div class="feature-section" style="padding-bottom:5em; padding-top:2em">
					<div class="container">
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o9.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนปาณระวี</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/o10.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนขยันขาย</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/o11.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนกอไก่</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/o12.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สวนรักฝรั่ง</h5>
								<p></p>
								<a href="OrchardDetail.html">
									<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!--Featured Properties-->
		
@endsection