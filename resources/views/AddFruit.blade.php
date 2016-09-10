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
					<h3>เพิ่มผลผลิต</h3><br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ชื่อผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="ส้มเขียวหวาน"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>รายละเอียดผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<textarea class="form-control" style="resize: none;" rows="6"></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>จำนวนผลผลิต : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder="หน่วยเป็นกิโลกรัม"></input>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>อัพโหลดรูป : </h4>
						</div>
						<div class="col-md-2">
							<form role="form">								
								<div class="form-group">				 
									<input id="exampleInputFile" type="file" />
									<input id="exampleInputFile" type="file" />
									<input id="exampleInputFile" type="file" />
								</div>							
							</form>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<a href="ShowProduct.html">
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
							 <a href="AfterLogin.html">
								<button type="button" class="btn btn-success btn-lg btn-block" >
									เสร็จสิ้น
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>


@endsection