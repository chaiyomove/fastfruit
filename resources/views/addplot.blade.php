@extends('layouts/master')
@section('content')

<!-- fruitspecies-dropdown -->
<script>
	$(document).ready(function(){
		$('#idFruit').on('change', function(e){
	    	var idFruit = e.target.value;

	        //ajax
	        $.get('{{url('api/fruitspecies')}}/'+idFruit, function(data){ 

		        //success data
	            $('#idFruitSpecie').empty();

	            // $('#idFruitSpecie').append('<option value="0" selected>กรุณาเลือก</option>');

	            $.each(data, function(index, fruitSpecie){

	            	if(index==0){
		            	$('#idFruitSpecie').append('<option value="' + fruitSpecie.idFruitSpecie + '"selected>' +  fruitSpecie.specieName + '</option>');

	            	} else {
		            	$('#idFruitSpecie').append('<option value="' + fruitSpecie.idFruitSpecie + '">' +  fruitSpecie.specieName + '</option>');            		
	            	}


	           });



	       });


	   });
	});
</script>
<!-- fruitspecies-dropdown -->

			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">แก้ไขข้อมูลแปลง</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce commerce-account noo-shop-main pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-12">
								<div class="col-md-3"></div>
								<div id="addOrchard">
	                				<div class="col-md-6">
	                					<h2>แก้ไขข้อมูลแปลง</h2>
	                					<form class="login" method="POST" enctype="multipart/form-data" action="{{url('plot')}}">
											{{ csrf_field() }}
											<input type="hidden" name="idOrchard" value="{{$id}}">
	                						<div class="form-row form-row-wide">
												<label for="username">
													ผลผลิต :
													<span class="required">*</span>
													<div style="float: right; width: 70%">
														<select  name="idFruit" id="idFruit" class="form-matching" style="width: 50%; float: left;">
															
														@foreach ($fruits as $fruit)	
															@if($fruit->idFruit == old('idFruit'))								
													 			<option value="{{$fruit->idFruit}}" selected>{{$fruit->fruitName}}</option>	
												 			@else	
													 			<option value="{{$fruit->idFruit}}">{{$fruit->fruitName}}</option>	
												 			@endif			
												 		@endforeach

														</select>

														<select name="idFruitSpecie" id="idFruitSpecie" class="form-matching" style="width: 50%; float: left;">
															
														@foreach ($fruitSpecies as $fruitSpecie)
															@if($fruitSpecie->idFruitSpecie == old('idFruitSpecie'))	
													 			<option value="{{$fruitSpecie->idFruitSpecie}}" selected>{{$fruitSpecie->specieName}}</option>
													 		@else
													 			<option value="{{$fruitSpecie->idFruitSpecie}}">{{$fruitSpecie->specieName}}</option>
															@endif													 			
												 		@endforeach			

														</select>
													</div>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													รหัสแปลง :
													<span class="required">*</span>
													<input type="text" class="input-text" name="plotNumber" id="" value="{{old('plotNumber')}}" style="width: 70%; float: right;" />
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													รายละเอียดแปลง :
													<span class="required">*</span>
													<textarea name="description" class="input-text" style="resize: none; width: 70%; float: right;">{{old('description')}}</textarea>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													พื้นที่แปลง :
													<span class="required">*</span>
													<input type="text" class="input-text" name="area" id="username" placeholder="หน่วยเป็นไร่" value="{{old('area')}}" style="width: 70%; float: right;" />
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													ที่อยู่แปลง :
													<span class="required">*</span>
													<textarea name="address" class="input-text" style="resize: none; width: 70%; float: right;">{{old('address')}}</textarea>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													จังหวัด :
													<span class="required">*</span>
													<select name="idProvince" id="idProvince" class="form-matching" style="width: 70%; float: right;">
														<option value="">กรุณาเลือก</option>													
														@foreach ($provinces as $province)
											 			@if ($province->idProvince == old('idProvince') || $province->idProvince == $orchard->idProvince)
											 				<option value="{{$province->idProvince}}" selected>{{$province->provinceName}}</option>
											 			@else
												 			<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
											 			@endif
											 		@endforeach	
													</select>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													GAP
													<span class="required">*</span>
													<select name="idPlotStatus" class="form-matching" style="width: 70%; float: right;">
														<option value="">กรุณาเลือก</option>
														@foreach($plotstatus as $statusplot)
														@if($statusplot->idPlotStatus == old('idPlotStatus'))
															<option value="{{$statusplot->idPlotStatus}}" selected>{{$statusplot->status}}</option>
									   					@else
									   						<option value="{{$statusplot->idPlotStatus}}">{{$statusplot->status}}</option>
									   					@endif
									   					@endforeach
													</select>
												</label>
											</div>
											<div class="form-row">
												<button type="submit" class="button" style="float: right;">
													บันทึก
												</button>
											</div>
	                						<div class="form-row form-row-wide"></div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>-  -</h4>
							<h3></h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>
@endsection