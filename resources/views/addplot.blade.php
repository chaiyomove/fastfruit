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
					<h3>เพิ่มแปลง</h3><br>
					<form method="POST" enctype="multipart/form-data" action="{{url('/plot')}}">
					{{ csrf_field() }}
					<input type="hidden" name="idOrchard" value="{{$id}}">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="width:40%; float:left">
							 	<select class="form-control" name="fruit" >
							 		<option  value="0" selected >เลือกชนิดผลไม้</option>
							 		@foreach ($fruits as $fruit)
								 		<option value="{{$fruit->idFruit}}">{{$fruit->fruitName}}</option>				
							 		@endforeach
							  	</select>
							</div>
							<div class="form-group" style="width:50%; float:right">
								<select class="form-control" name="idFruitSpecie">
							 		<option value="0" selected>เลือกสายพันธุ์</option>
							 		{{-- <option value="78">มะม่วงมัน</option>	 --}}
							 		@foreach ($fruitSpecies as $fruitSpecie)
								 		<option value="{{$fruitSpecie->idFruitSpecie}}">{{$fruitSpecie->specieName}}</option>
							 		@endforeach				    	
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
							<h4>รหัสแปลง : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" name="plotNumber" class="form-control"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>	
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>รายละเอียดแปลง : </h4>
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
							<h4>พื้นที่แปลง : </h4>
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
							<div class="form-group">				 
								<input name="pictures[]" id="exampleInputFile" type="file" />
								<input name="pictures[]" id="exampleInputFile" type="file" />
								<input name="pictures[]" id="exampleInputFile" type="file" />
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
							<h4>ที่อยู่แปลง : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="address" class="form-control" style="resize: none;" rows="5">{{$orchard->address}}</textarea>
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
						 		<option value="" selected>กรุณาเลือก</option>	
						 		@foreach ($provinces as $province)
						 			@if ($orchard->idProvince == $province->idProvince)
								 		<option value="{{$province->idProvince}}" selected>{{$province->provinceName}}</option>				
						 			@else
								 		<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
						 			@endif	
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
							<h4>GAP : </h4>
						</div>
						<div class="col-md-4">
							<label class="radio-inline">
								<input type="radio" name="idPlotStatus" value="3">
								มี GAP
							</label>
							<label class="radio-inline">
								<input type="radio" name="idPlotStatus" value="2">
								ไม่มี GAP
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
							<button type="submit" class="btn btn-success btn-lg btn-block">
								เสร็จสิ้น
							</button>
						</div>
					</div>
					</form>
				</div>
			</div>


			<!--Add-->
			
@endsection