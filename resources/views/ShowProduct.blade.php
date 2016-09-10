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
						<div class="item">				
							<div class="testmonial-text">
								<a href="AddFruit.html" class="btn btn-info btn-sm">
          							<h4><span class="glyphicon glyphicon-plus-sign"></span> เพิ่มผลผลิต</h4>
       		 					</a> 					
							<br><br>
								<a href="EditOrchard.html" class="btn btn-info btn-sm">
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