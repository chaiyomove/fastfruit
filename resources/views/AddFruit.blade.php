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

<link href="css/jquery.datepicker.css" rel="stylesheet">


			<div class="feature-section">
				<div class="container">
					<h3>เพิ่มผลผลิต</h3><br><br>
					<form method="post" action="{{url('/useraddproduct')}}">
					{{ csrf_field() }}
					<input type="hidden" name="idOrchardPlot" value="35">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="width:40%; float:left">
							 	<select class="form-control" name="selectfruit">
							 		<option value="fruit" selected>เลือกผลไม้</option>
							   		<option value="orange">ส้ม</option>
							    	<option value="mango">มะม่วง</option>
							    	<option value="durian">ทุเรียน</option>
							    	<option value="rambutan">เงาะ</option>
							  	</select>
							</div>
							<div class="form-group" style="width:50%; float:right">
							 	<select class="form-control" name="fruitSpecie">
							 		<option value="species" selected>เลือกสายพันธุ์</option>
							   		<option value="78">มะม่วงมัน</option>					    	
							  	</select>
							</div>
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
							<h4>จำนวนผลผลิต : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" name="fruitNum" class="form-control" placeholder="หน่วยเป็นกิโลกรัม"></input>
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
							<h4>ตั้งแต่วันที่ : </h4>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class='input-group date' id='datepickerstart'>
					                <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" />
					                <span class="input-group-addon" data-toggle="datepicker">
					                    <span class="glyphicon glyphicon-calendar"></span>
					                </span>
					            </div>
							</div>
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
							<h4>ถึงวันที่ : </h4>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class='input-group date' id='datepickerend'>
					                <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง"/>
					                <span class="input-group-addon" data-toggle="datepicker">
					                    <span class="glyphicon glyphicon-calendar"></span>
					                </span>
					            </div>
							</div>	
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
							<h4>อัพโหลดรูป : </h4>
						</div>
						<div class="col-md-2">
														
								<div class="form-group">				 
									<input name="picture1" id="exampleInputFile" type="file" />
									<input name="picture2" id="exampleInputFile" type="file" />
									<input name="picture3" id="exampleInputFile" type="file" />
								</div>							
							
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<br><br>
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
								<button type="submit" class="btn btn-success btn-lg btn-block" >
									เสร็จสิ้น
								</button>
							</a>
						</div>
					</div>
					</form>
				</div>
			</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.datepicker.js"></script>


@endsection