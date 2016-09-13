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
				<div class="col-md-2">
					<h3 class="text-left">
						เลือกผลไม้
					</h3>
					<br>
					
					<div class="form-group" style="width:90%">
					 	<select class="form-control" name="fruit" >
					 		<option  value="0" selected>กรุณาเลือก</option>
					 		@foreach ($fruits as $fruit)
						 		<option value="{{$fruit->idFruit}}">{{$fruit->fruitName}}</option>				
					 		@endforeach
					  	</select>
					</div>
					<br>
					<div class="form-group" style="width:90%">
					 	<select class="form-control" name="idProvince">
					 		<option value="0" selected>กรุณาเลือก</option>
					 		@foreach ($provinces as $province)
						 		<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
					 		@endforeach				 	   	
					  	</select>
					</div>
				</div>
				<div class="col-md-2">
					<h3 class="text-left">
						เลือกสายพันธุ์
					</h3>
					<br>
					<div class="form-group" style="width:90%">
					 	<select class="form-control" name="idFruitSpecie">
					 		<option value="0" selected>กรุณาเลือก</option>
					 		@foreach ($fruitSpecies as $fruitSpecie)
						 		<option value="{{$fruitSpecie->idFruitSpecie}}">{{$fruitSpecie->specieName}}</option>				
					 		@endforeach				    	
					  	</select>
					</div>
					<br>
					<div class="form-group" style="width:60%">
					 	<select class="form-control" name="selectmonth">
					 		<option value="0" selected>เดือน</option>
					 		@foreach ($months as $num=>$month)
						 		
						 		<option value="{{$num}}">{{$month}}</option>	

					 		@endforeach					    	
					  	</select>
					</div>
					<div class="form-group" style="width:60%">
					 	<select class="form-control" name="selectyear">
					 		<option value="0" selected>ปี</option>
					 		@foreach ($years as $year)
						 		<option value="{{$year}}">{{$year}}</option>				
					 		@endforeach							    	
					  	</select>
					</div>
				</div>
				<div class="col-md-2">
					<h3 class="text-left">
						จำนวน
					</h3>
					<br>
					<div class="form-group" style="width:90%">
						<input name="fruitNum" type="text" class="form-control"/>
					</div>
					<br>
					<div class="form-group" style="width:60%">
					 	<select class="form-control" name="unit" >
					 		<option value="0" selected>หน่วย</option>
					   		<option value="kg">กิโลกรัม</option>
					   		<option value="t">ตัน</option>							    	
					  	</select>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group" style="margin-top:3.3em">
					 	<button type="submit" class="btn btn-success">
						เพิ่ม
						</button>
					</div> 					
				</div>
				</form>
				<div class="col-md-3">
					<div class="panel panel-default" style="width:90%">
						@foreach ($matchings as $key => $matching)
							@if ($key % 2 == 0)
								<div class="panel-heading">
							@else
								<div class="panel-body">
							@endif
							<form method="POST" action="{{url('/matching')}}">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="DELETE" />
							{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}
							<button type="submit" class="btn btn-link" style="float:right;">
								{{-- <a href="#" data-toggle="modal" > --}}
									<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
								{{-- </a> --}}
							</button>
							</div>
							<input type="hidden" name="idMatching" value="{{$matching->idMatching}}">
							</form>
						@endforeach							
					</div>
					<div class="form-group">
					 	<button type="submit" class="btn btn-info" 
					 	style="float:right; margin-right:2.3em">
							จับคู่
						</button>
					</div> 
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
							@foreach ($matchings as $key => $matching)
							<li>
								<a href="javascript:;">{{$fruitSpecies[$matching->idFruitSpecie-1]->specieName.' '.$matching->fruitNum.' กิโลกรัม'}}</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>


	<div class="feature-section">
					<div class="container">
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/f1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ส้มส้ม จากสวนสิรภัทร</h5>
								<p>ส้มสดๆ ส้มสวยๆ ส้มหวานๆ </p>
								<a href="ProductDetail1.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ทุเรียน จากสวนเปรม</h5>
								<p>ทุเรียนหวานกรอบอร่อย</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วง สวนนภัสสกร</h5>
								<p>มะม่วงหลายพันธุ์ มาดูได้ค่ะ</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f4.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ลำไย สวนวศิน</h5>
								<p>ลำไยดี ลำไยอร่อย ต้องลำไยสวนวศิน</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
@endsection