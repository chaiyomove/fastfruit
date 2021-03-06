@extends('layouts/master')
@section('content')

{{-- <link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
	jQuery(function($) {
		$(".swipebox").swipebox();
	});
</script>
 --}}
<link href="{{asset('css/jquery.datepicker.css')}}" rel="stylesheet">


<script>
	$(document).ready(function(){
		// var idMatching = 0;

		//fruitspecies dropdown
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

		//Add matching record
		$('#matching_form').on('submit', function(e){
			e.preventDefault();
			var formData = $('#matching_form').serializeArray();
			console.log(formData);
	   //  	var formData = {
	   //          '_token'           	: $('input[name=_token]').val(),
				// "idFruit"			: $('input[name=idFruit]').val(),
				// "idFruitSpecie"		: $('input[name=idFruitSpecie]').val(),
				// "idProvince"		: $('input[name=idProvince]').val(),
				// "startDate"			: $('input[name=startDate]').val(),
				// "endDate"			: $('input[name=endDate]').val(),
				// "fruitNum"			: $('input[name=fruitNum]').val(),
				// "idPlotStatus"		: $('input[name=idPlotStatus]').val(),
				// "unit"				: $('input[name=unit]').val(),
    //     	};

	        //ajax
	    	$.post('{{url('api/matching',[(Auth::check() ? Auth::user()->id : 0)])}}', formData) 
	        	.done(function(data){
	        		console.log(data);	
	        		$('#div_errors').hide();
	        		// idMatching--;	        		
	        		$('#matchings_show')
	         			.append('<form id="matching_delete" class="login matching_delete" method="POST" action="{!!url("/matching")!!}" style="padding: 5px 0px 5px 15px; margin:1em 0;"> 																													   {!! csrf_field() !!}        																											<input name="_method" type="hidden" value="DELETE" />																				 '+ data.fruitSpecie +' '+ data.fruitNum +' '+'กิโลกรัม' +' '+' 																			     <button type="submit" class="btn btn-link">																							<i class="fa fa-minus-circle" aria-hidden="true"></i>																			 </button>																								 							  <input type="hidden" name="idMatching" value="'+ ( "idMatching" in data ? data.idMatching : idMatching) +'">																																  </form>  ');
	        	})
	        		.fail(function(data){
	        			var errors = data.responseJSON;
	        			$.each(errors, function (key, error) {
	        				console.log(error[0]);
	        				$('#ul_errors').append('<li>'+ error[0] +'</li>');
	        			});
	        			$('#div_errors').show();      				        	
	        		});
	   	});

		//Delete matching record
		$('.matching_delete').live('submit', function(e){
			e.preventDefault();
			var formData = $(this).serializeArray();
			/** an alternative **/
			// var formData = $(e.target).serializeArray();
			
			// console.log(formData[2].value);			
			var id = e.target.idMatching.value;
			$(this).remove();
			
			//ajax
			$.post('{{url("api/matching")}}', formData)
				.done(function(data){
					console.log(data);
					console.log("delete complete");
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
	                					<form id="matching_form" class="login" method="post" action="{{Auth::check() ? url('api/matching',[Auth::user()->id]) : url('api/matching',[0])}}}}">
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
											            <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" value=""/>
											            <span class="input-group-addon" data-toggle="datepicker">
											            	<span class="fa fa-calendar"></span>
											            </span>
											        </div>
											    </div>
											    <div class="form-row form-row-wide">    
											        <div class='input-group date' id='datepickerend'>
											            <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง" value="" />
											            <span class="input-group-addon" data-toggle="datepicker">
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
															<option value="" selected='selected'>กรุณาเลือก</option>
															<option value="1">มี GAP</option>
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
														<option value="" selected='selected'>หน่วย</option>
														<option value="1">กิโลกรัม</option>
							   							<option value="2">ตัน</option>	
													</select>
												</div>
												<div class="form-row">
													<button type="submit" class="button" id="addMatching" style="float: right;">
														เพิ่ม
													</button>
												</div>
											</div>
											<div class="form-row form-row-wide"></div>
										</form>
									</div>
								</div>
								<div id="matching">
	                				<div id="matchings_show" class="col-md-4">
	                					<h2>ผลไม้ที่สนใจ</h2>
											@foreach ($matchings as $key => $matching)
												<form id="matching_delete" class="login matching_delete" method="POST" action="{{url('/matching')}}" style="padding: 5px 0px 5px 15px; margin:1em 0;">
													{{ csrf_field() }}
													<input name="_method" type="hidden" value="DELETE" />
													{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}
													<button type="submit" class="btn btn-link">													
														<i class="fa fa-minus-circle" aria-hidden="true"></i>	
													</button>
													<input type="hidden" name="idMatching" value="{{$matching->idMatching}}">
												</form>
											@endforeach
									</div>
									<form method="GET" action="{{url('matching',[(Auth::check() ? Auth::user()->id : 0)])}}">
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
													<h2 id="results">ผลลัพธ์</h2> 
													{{-- <ul class="breadcrumb">
													@if (Auth::check())
														@foreach ($matchings as $key => $matching)
														<li>
															<a href="javascript:;">{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}</a>
														</li>
														@endforeach
													@endif
												</ul> --}}
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
																	<img style="width: 260px; height: 160px;" src="{{$matchedOrc->picture1}}" alt="" />
																</a>
																<!-- <div class="noo-rating">
																	<div class="star-rating">
																		<span style="width:0%"></span>
																	</div>
																</div> -->
															</div>
															<div class="noo-product-title"> 
																<h3><a href="{{url('orchards/'.$matchedOrc->idOrchard)}}">{{$matchedOrc->nameOrchard}}</a></h3>
																<?php $speciesTmp = array(); 
													  $strSpecies = "";
												?>

												@foreach ($matchedOrc->orchardPlots as $plotKey => $orchardPlot)
													@if (!array_has($speciesTmp, $orchardPlot->fruitSpecie->specieName))
														<?php $speciesTmp[] =  $orchardPlot->fruitSpecie->specieName; ?>
														@if($plotKey==0)
															<?php $strSpecies = $orchardPlot->fruitSpecie->specieName;
															?>
															
														@elseif(count($matchedOrc->orchardPlot)===$plotKey+1)
															<?php $strSpecies .= $orchardPlot->fruitSpecie->specieName; ?>
															
														@else
															<?php $strSpecies .= ", ".$orchardPlot->fruitSpecie->specieName; ?>
															
														@endif	
													@endif
													
												@endforeach

												<p class='spac' style="overflow: auto;"><i class='fa fa-lemon-o' style='color: green; margin-top: 10px;'></i>&nbsp;

												{{-- {{ str_limit($string, $limit = 10, $end = '...') }} --}}

												{!! str_limit($strSpecies, $limit = 30)!!}
												</p>
												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$matchedOrc->province->provinceName}}</span>
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
			</div>

<script src="{{asset('js/jquery.datepicker.js')}}"></script>

@endsection			