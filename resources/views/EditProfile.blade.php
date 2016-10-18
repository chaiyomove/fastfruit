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
					<h3>แก้ไขข้อมูลของคุณ</h3><br>
					<form method="post" action="{{url('/addorchard')}}">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ชื่อ : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>นามสกุล : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>รหัสบัตรประชาชน : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control"></input>
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
							<h4>รหัสผ่าน : </h4>
						</div>
						<div class="col-md-4">
							<input type="password" class="form-control"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>โทรศัพท์ : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder="ตัวเลขเท่านั้น"></input>
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
							<h4>ที่อยู่ : </h4>
						</div>
						<div class="col-md-4">
							<textarea class="form-control" style="resize: none;" rows="2"></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>จังหวัด : </h4>
						</div>
						<div class="col-md-2">
							<select class="form-control" name="idProvince">
						 		<option value="0" selected>กรุณาเลือก</option>	
						 		@foreach ($provinces as $province)
							 		<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
						 		@endforeach		 			 	   	
							</select>
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
							<h4>รูปโปรไฟล์ : </h4>
						</div>
						<div class="col-md-2">
							<form role="form">								
								<div class="form-group">				 
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
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							 <a href="{{url('/userprofile')}}">
								<button type="button" class="btn btn-primary btn-lg btn-block" >
									บันทึก
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>


			<!--Add-->
			
@endsection