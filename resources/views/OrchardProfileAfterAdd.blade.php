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
					<h3>สวนของคุณ</h3>				
					<br>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-3">
								</div>
								<div class="col-md-3">
									<div class="testmonial-img">
										<img src="images/t1.png" width="70%" alt=""/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="testmonial-text">
										<p style="font-size: 22px">สวนเบ็ญจวรรณ</p>
										<br>
										<p style="font-size: 18px">
											ผู้ดูแลร่วม : กุลภัสร์ พุดทรัพย์
										</p>																				 
									</div>
								</div>
								<div class="col-md-3">
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
									<div class="testmonial-text">
										<a href="AfterLogin.html" class="btn btn-info btn-sm">
	          								<h4><span class="glyphicon glyphicon-info-sign"></span> ดูผลผลิต</h4>
	       		 						</a>
       		 						</div>
								</div>
								<div class="col-md-2">
									<div class="testmonial-text">
										<a href="EditOrchard.html" class="btn btn-info btn-sm">
					          				<h4><span class="glyphicon glyphicon-cog"></span> แก้ไขข้อมูลสวน</h4>
					        			</a>      					
									</div>	
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
								</div>
							</div>
						</div>
				</div>
			</div>

			<!--profile-->
			
@endsection