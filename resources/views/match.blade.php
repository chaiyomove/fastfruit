@extends('layouts/master')
@section('content')

<!-- pop-up -->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<link href="css/jquery.datepicker.css" rel="stylesheet">
<!-- pop-up -->


		<!--banner-->
		<div class="banner-section">
			<div class="container">
			</div>
		</div>
		<!--banner-->
		<br><br><br>
		<div class="container-fluid">			
			<div class="row">
				<div class="col-md-1">
				</div>
				<form method="post" action="{{url('/matching')}}">
				{{ csrf_field() }}
					<div class="col-lg-6 box">
						<div class="col-md-4">
							<p class="text-left size">
								เลือกผลไม้
							</p>
							<br>
							<div class="form-group" style="width:90%">
							 	<select class="form-control" name="fruit" >
							 		<option  value="0" selected >กรุณาเลือก</option>
							 		@foreach ($fruits as $fruit)
								 		<option value="{{$fruit->idFruit}}">{{$fruit->fruitName}}</option>				
							 		@endforeach
							  	</select>
							</div>
							<p class="text-left size">
								เลือกเดือนและปี
							</p>
							<br>
							<div class="form-group" style="width:90%">
								<div class='input-group date' id='datepickerstart'>
					                <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" />
					                <span class="input-group-addon" data-toggle="datepicker">
					                    <span class="glyphicon glyphicon-calendar"></span>
					                </span>
					            </div>
							</div>
							<div class="form-group" style="width:90%">
								<div class='input-group date' id='datepickerend'>
					                <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง"/>
					                <span class="input-group-addon" data-toggle="datepicker">
					                    <span class="glyphicon glyphicon-calendar"></span>
					                </span>
					            </div>
							</div>					
						</div>
						<div class="col-md-4">
							<p class="text-left size">
								เลือกสายพันธุ์
							</p>
							<br>
							<div class="form-group" style="width:90%">
							 	<select class="form-control" name="idFruitSpecie">
							 		<option value="0" selected>กรุณาเลือก</option>
							 		@foreach ($fruitSpecies as $fruitSpecie)
								 		<option value="{{$fruitSpecie->idFruitSpecie}}">{{$fruitSpecie->specieName}}</option>				
							 		@endforeach				    	
							  	</select>
							</div>
							<p class="text-left size">
								จำนวน
							</p>
							<br>
							<div class="form-group" style="width:90%">
								<input name="fruitNum" type="text" class="form-control"/>
							</div>
							<div class="form-group">
								<p class="text-left size" style="float:left">
									GAP
								</p>
								<div class="form-group" style="width:60%; float:right;margin-right:1.3em">
								 	<select class="form-control" name="idPlotStatus" >
								   		<option value="1">มี GAP</option>
								   		<option value="2">ไม่มี GAP</option>
								  	</select>
								</div>
							</div>					
						</div>
						<div class="col-md-4">
							<p class="text-left size">
								เลือกจังหวัด
							</p>
							<br>
							<div class="form-group" style="width:90%">
							 	<select class="form-control" name="idProvince">
							 		<option value="0" selected>กรุณาเลือก</option>
							 		@foreach ($provinces as $province)
								 		<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
							 		@endforeach				 	   	
							  	</select>
							</div>
							<p class="text-left size">
								เลือกหน่วย
							</p>
							<br>
							<div class="form-group" style="width:90%">
							 	<select class="form-control" name="unit" >
							 		<option value="0" selected>หน่วย</option>
							   		<option value="1">กิโลกรัม</option>
							   		<option value="2">ตัน</option>							    	
							  	</select>
							</div>
							<div class="form-group" style="float:right; margin-right:1.3em">
							 	<button type="submit" class="btn btn-success">
								เพิ่ม
								</button>
							</div> 
						</div>
					</div>
					<div class="col-md-1">
					
					</div>
				</form>
				<div class="col-md-3">
					<p class="text-left size" style="padding-top:20px">
						ผลไม้ที่ต้องการจับคู่
					</p>
					<br>
					<div class="panel panel-default" style="width:90%">
						@if (Auth::check())
							@foreach ($matchings as $key => $matching)
								@if ($key % 2 == 0)
									<div class="panel-heading clearfix">
								@else
									<div class="panel-body clearfix">
								@endif
								<form method="POST" action="{{url('/matching')}}">
								{{ csrf_field() }}
								<input name="_method" type="hidden" value="DELETE" />
								{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}
								<button type="submit" class="btn btn-link pull-right">
									{{-- <a href="#" data-toggle="modal" > --}}
										<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
									{{-- </a> --}}
								</button>
								</div>
								<input type="hidden" name="idMatching" value="{{$matching->idMatching}}">
								</form>
							@endforeach
						@endif
													
					</div>
					<form method="get" action="{{url('/matching')}}">
					{{ csrf_field() }}
					<div class="form-group">
					 	<button type="submit" class="btn btn-info" 
					 	style="float:right; margin-right:2.3em">
							จับคู่
						</button>
					</div> 
					</form>
				</div>
				<div class="col-md-1">
				</div>
			</div>
			<br><br>

			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="alert alert-success alert-dismissable" style="text-align: center;">
						<h3>ผลลัพธ์</h3>
						<br>
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
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>

		@foreach ($matchedOrcs as $key => $matchedOrc)
			@if ($key%4 == 0)	
				<div class="feature-section">
					<div class="container">
						<div class="feature-grids">
			@endif
						<form method="GET" action="{{url('/orcharddetail')}}">
						{{ csrf_field() }}
							<div class="col-md-3 feature-grid" >
								<div class="frame">
									@if ($key<=10)
										<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
									@endif
									@foreach ($matchedOrc->orchardPlots as $orchardPlot)
										@if ($orchardPlot->idPlotStatus == 1)
											<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
										@endif
									@endforeach
									<img src="{{$matchedOrc->picture}}" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
									
									<h5 class="space">{{$matchedOrc->nameOrchard}}</h5>
									<p class="space">{{$matchedOrc->description}}</p>		
									{{-- <a href="orchards/{{$matchedOrc->idOrchard}}" class="space"> --}}
									<input type="hidden" name="idOrchard" value="{{$matchedOrc->idOrchard}}">	
										<button type="submit" class="btn btn-link">
											<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
										</button>
									{{-- </a> --}}
								</div>
							</div>
						</form>
			@if ((count($matchedOrcs)===$key+1) || $key%4 == 3)
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

			@endif
		@endforeach			

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.datepicker.js"></script>

@endsection