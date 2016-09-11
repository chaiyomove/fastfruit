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
					<h3>เพิ่มสวน</h3><br>
					<form method="post" action="{{url('/addorchard')}}">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ชื่อสวน : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" name="nameOrchard" class="form-control" placeholder="สวนเบ็ญจวรรณ"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>รายละเอียดสวน : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="description" class="form-control" style="resize: none;" rows="6"></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>พื้นที่สวน : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" name="area" class="form-control" placeholder="หน่วยเป็นไร่"></input>
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
									<input name="picture1" id="exampleInputFile" type="file" />
									<input name="picture2" id="exampleInputFile" type="file" />
									<input name="picture3" id="exampleInputFile" type="file" />
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
						</div>
						<div class="col-md-2">
							<h4>ที่อยู่สวน : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="address" class="form-control" style="resize: none;" rows="3"></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>GAP : </h4>
						</div>
						<div class="col-md-4">
							<label class="radio-inline">
								<input type="radio" name="GAP" value="1">มี GAP
							</label>
							<label class="radio-inline">
								<input type="radio" name="noGAP" value="2">ไม่มี GAP
							</label>							
						</div>
						<div class="col-md-4">
						</div>
					</div>					
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							<a href="OrchardProfile.html">
								<button type="submit" class="btn btn-success btn-lg btn-block">
									เสร็จสิ้น
								</button>
							</a>
						</div>
					</div>
					</form>
				</div>
			</div>


			<!--Add-->
			
@endsection