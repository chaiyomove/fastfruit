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


			<!--Add-->

			<div class="feature-section">
				<div class="container">
					<h3>ตรวจสอบ GAP</h3><br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-3">
							<label class="radio-inline"><input type="radio" name="optradio">ไม่มี GAP</label>
							<label class="radio-inline"><input type="radio" name="optradio">มี GAP</label>
							<br>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="กรุณาใส่เลขบัตรประชาชนเฉพาะผู้ที่มี GAP"></input>
						</div>
						<div class="col-md-3">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
							<a href="AddOrchard.html">
								<button type="button" class="btn btn-primary btn-lg btn-block" >
									ย้อนกลับ
								</button>
							</a>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							<a href="OrchardProfile.html">
								<button type="button" class="btn btn-success btn-lg btn-block">
									เสร็จสิ้น
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>


			<!--Add-->
			
@endsection