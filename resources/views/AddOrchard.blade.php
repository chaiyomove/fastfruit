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
					<form method="POST" enctype="multipart/form-data" action="{{url('/addorchard')}}">
					{{ csrf_field() }}
					<input type="hidden" name="idUser" value="{{Auth::user()->id}}">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ชื่อสวน : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" name="nameOrchard" class="form-control" value="{{old('nameOrchard')}}"></input>
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
							<textarea name="description" class="form-control" style="resize: none;" rows="6">{{old('description')}}</textarea>
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
							<input type="text" name="area" class="form-control" placeholder="หน่วยเป็นไร่" value="{{old('area')}}"></input>
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
							<h4>ที่อยู่สวน : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="address" class="form-control" style="resize: none;" rows="2">{{old('address')}}</textarea>
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
						 			@if ($province->idProvince == old('idProvince'))
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