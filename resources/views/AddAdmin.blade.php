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

			<div class="feature-section">
				<div class="container">
					<h3>เพิ่มผู้ดูแลสวน</h3><br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>Email : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="กรอกอีเมล์ของผู้ดูแลสวน"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							 <a href="OrchardProfileAfterAdd.html">
								<button type="submit" class="btn btn-primary btn-lg btn-block" >
									เสร็จสิ้น
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>

			
@endsection