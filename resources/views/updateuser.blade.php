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
					<form method="POST" enctype="multipart/form-data" action="{{url('user',[Auth::user()->id])}}">
					<input type="hidden" name="_method" value="PATCH">
					{{ csrf_field() }}
						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
								<h4>ชื่อ : </h4>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" name="firstName" value="{{Auth::user()->firstName}}"></input>
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
								<input type="text" class="form-control" name="lastName" value="{{Auth::user()->lastName}}"></input>
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
							<div class="col-md-4">
								<input type="text" class="form-control" name="citizenId" value="{{Auth::user()->citizenId}}"></input>
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
								<h4>โทรศัพท์ : </h4>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="ตัวเลขเท่านั้น" name="phone" value="{{Auth::user()->phone}}"></input>
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
								<textarea class="form-control" style="resize: none;" rows="4" name="address">
									{{Auth::user()->address}}
								</textarea>
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
							 			@if ($province->idProvince == Auth::user()->idProvince)
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
								<h4>รูปโปรไฟล์ : </h4>
							</div>
							<div class="col-md-2">								
								<div class="form-group">				 
									<input id="exampleInputFile" type="file" name="picture">
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
							<div class="col-md-4">
							</div>
							<div class="col-md-4">
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-primary btn-lg btn-block" >
									บันทึก
								</button>	
							</div>
						</div>
					</form>
				</div>
			</div>


			<!--Add-->
			
@endsection

<div class="widget commerce widget_products">
	<h3 class="widget-title"></h3>
	<ul class="product_list_widget">
	@foreach ($orchards as $key => $orchardTmp)
	<?php $orchard = new App\Orchards($orchardTmp) ?>
		<li>

			<a href="{{'orchards/'.$orchard->idOrchard}}">
				<img style="width: 70px; height: 70px;" src="{{asset($orchard->picture1)}}" alt="" /> 
				<span class="product-title">{{$orchard->nameOrchard}}</span>
			</a>
			<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
		</li>
	@endforeach
	</ul>
</div>