@extends('layouts/master')
@section('content')

<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<link href="css/jquery.datepicker.css" rel="stylesheet">

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

			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">จับคู่สวน</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce commerce-account noo-shop-main pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-12">
								<div id="matching">
	                				<div class="col-md-8">
	                					<h2>เลือกจับคู่</h2>
	                					<form class="login" method="post" action="{{url('/matching')}}">
	                						{{ csrf_field() }}
	                						<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกผลไม้
														<span class="required">*</span>
													</label>
													<select name="idFruit" id="idFruit" class="form-matching">
														<option value="0" selected='selected'>กรุณาเลือก</option>
														@foreach ($fruits as $fruit)
												 		<option value="{{$fruit->idFruit}}">{{$fruit->fruitName}}</option>				
											 			@endforeach
													</select>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกสายพันธุ์
														<span class="required">*</span>
													</label>
													<select name="idFruitSpecie" id="idFruitSpecie" class="form-matching">
														<option value="0" selected='selected'>กรุณาเลือก</option>
														@foreach ($fruitSpecies as $fruitSpecie)
													 		<option value="{{$fruitSpecie->idFruitSpecie}}">{{$fruitSpecie->specieName}}</option>		
												 		@endforeach		
													</select>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกจังหวัด
														<span class="required">*</span>
													</label>
													<select name="idProvince" id="idProvince" class="form-matching">
														<option value="0" selected='selected'>กรุณาเลือก</option>
														@foreach ($provinces as $province)
													 		<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
												 		@endforeach	
													</select>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกเดือนและปี
														<span class="required">*</span>
													</label>
													<div class='input-group date' id='datepickerstart'>
											            <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" />
											            <span class="input-group-addon datepicker" data-toggle="datepicker">
											            	<span class="fa fa-calendar"></span>
											            </span>
											        </div>
											    </div>
											    <div class="form-row form-row-wide">    
											        <div class='input-group date' id='datepickerend'>
											            <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง" />
											            <span class="input-group-addon datepicker" data-toggle="datepicker">
											                <span class="fa fa-calendar"></span>
											            </span>
											        </div>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														จำนวน
														<span class="required">*</span>
													</label>
													<input type="text" class="input-text" name="fruitNum" id="username" value=""/>
												</div>
												<div class="form-row form-row-wide">
													<label for="username">
														GAP
														<span class="required">*</span>
														<select name="idPlotStatus" class="form-matching" style="width: 60%; float: right;">
															<option value="1" selected='selected'>มี GAP</option>
									   						<option value="2">ไม่มี GAP</option>	
														</select>
													</label>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกหน่วย
														<span class="required">*</span>
													</label>
													<select name="unit" class="form-matching">
														<option value="0" selected='selected'>หน่วย</option>
														<option value="1">กิโลกรัม</option>
							   							<option value="2">ตัน</option>	
													</select>
												</div>
												<div class="form-row">
													<button type="submit" class="button" style="float: right;">
														เพิ่ม
													</button>
												</div>
											</div>
											<div class="form-row form-row-wide"></div>
										</form>
									</div>
								</div>
								<div id="matching">
	                				<div class="col-md-4">
	                					<h2>ผลไม้ที่สนใจ</h2>
	                					@if (Auth::check())
										@foreach ($matchings as $key => $matching)
											@if ($key % 2 == 0)
	                						<div class="form-row form-row-wide">
											@else

											@endif
											<form class="login" method="POST" action="{{url('/matching')}}" 
											style="padding: 5px 0px 5px 15px; margin:1em 0;">
											{{ csrf_field() }}
											<input name="_method" type="hidden" value="DELETE" />
											{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}
											<button type="submit" class="btn btn-link">
												
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
											
											</button>
											<input type="hidden" name="idMatching" value="{{$matching->idMatching}}">
											</form>
											@endforeach
											@endif
											</div>
											<form method="get" action="{{url('/matching')}}">
												{{ csrf_field() }}
											<div class="form-row">
											
												<button type="submit" class="button" style="float: right;">
													จับคู่
												</button>
												
											</div>
											</form>
											<div class="form-row form-row-wide"></div>
										
									</div>
								</div>
							</div>
						</div>
						
							<div class="pt-2 pb-4">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											<div class="noo-product-grid-wrap commerce product-style">
												<div class="noo-sh-title">
													<img width="40" height="39" src="images/organicfood-2.png" alt=""
													style="margin-bottom: 15px;" />
													<h2>ผลลัพธ์</h2> 
													<ul class="breadcrumb">
													@if (Auth::check())
														@foreach ($matchings as $key => $matching)
														<li>
															<a href="javascript:;">{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}</a>
														</li>
														@endforeach
													@endif
												</ul>
												</div>
												<div class="noo-product-filter masonry-filters" style="margin-top: 0px;">
													<ul class="noo-header-filter" data-option-key="filter">
														<li>
															<a data-option-value="*" href="#all" class="selected">
																<span>ทั้งหมด</span>
															</a>
														</li>
														<li>
															<a data-option-value=".fruit" href="#fruit">
																<span>ระยะทาง</span>
															</a>
														</li>
														<li>
															<a data-option-value=".vegetable" href="#vegetable">
																<span>จำนวน</span>
															</a>
														</li>
														<li>
															<a data-option-value=".bread" href="#bread">
																<span>ผลไม้</span>
															</a>
														</li>
														<li>
															<a data-option-value=".others" href="#others">
																<span>อื่น</span>
															</a>
														</li>
													</ul>
												</div>
												@foreach ($matchedOrcs as $key => $matchedOrc)
												@if ($key%4 == 0)	
												<div class="noo-product-grid products row product-grid noo-grid-4">
												@endif
													<div class="fruit organic-fruits masonry-item col-md-4 col-sm-6">
														<div class="noo-product-inner">
															<div class="noo-product-thumbnail">
																<a href="{{url('orchards/'.$matchedOrc->idOrchard)}}">
																@if ($key<=10)
																<img src="{{asset('images/new.png')}}" style="position: absolute; margin-left: -5px; margin-top: -2px">
															@endif
															@foreach ($matchedOrc->orchardPlots as $orchardPlot)
																@if ($orchardPlot->idPlotStatus == 1)
																	<img src="{{asset('images/gap.png')}}" style="position: absolute; margin-left: 2px; margin-top: 115px">
																@endif
															@endforeach
																	<img width="600" height="760" src="{{$matchedOrc->picture1}}" alt="" />
																</a>
																<!-- <div class="noo-rating">
																	<div class="star-rating">
																		<span style="width:0%"></span>
																	</div>
																</div> -->
															</div>
															<div class="noo-product-title"> 
																<h3><a href="{{url('orchards/'.$matchedOrc->idOrchard)}}">{{$matchedOrc->nameOrchard}}</a></h3>
																<span class="price"><span class="amount">&#36;3.95</span></span>
																<div class="noo-product-action">
																	<div class="noo-action">
																		<a href="{{url('orchards/'.$matchedOrc->idOrchard)}}" class="button product_type_simple info_circle_button">
																			<span>ดูรายละเอียด</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													@if ((count($matchedOrcs)===$key+1) || $key%4 == 3)
												</div>									
												@endif
											@endforeach			
											</div>
										</div>
									</div>
								</div>
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

<script src="js/jquery.datepicker.js"></script>

@endsection			