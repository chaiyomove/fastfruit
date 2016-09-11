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
				<div class="col-md-2">
					<h3 class="text-left">
						เลือกผลไม้
					</h3>
					<br>
					<div class="form-group" style="width:90%">
					 	<select class="form-control" name="selectfruit">
					 		<option value="fruit" selected>เลือกผลไม้</option>
					   		<option value="orange">ส้ม</option>
					    	<option value="mango">มะม่วง</option>
					    	<option value="durian">ทุเรียน</option>
					    	<option value="rambutan">เงาะ</option>
					  	</select>
					</div>
					<br>
					<div class="form-group" style="width:90%">
					 	<select class="form-control" name="selectprovince">
					 		<option value="province" selected>เลือกจังหวัด</option>
					   		<option value="bangkok">กรุงเทพฯ</option>					    	
					  	</select>
					</div>
				</div>
				<div class="col-md-2">
					<h3 class="text-left">
						เลือกสายพันธุ์
					</h3>
					<br>
					<div class="form-group" style="width:90%">
					 	<select class="form-control" name="selectspecies">
					 		<option value="species" selected>เลือกสายพันธุ์</option>
					   		<option value="sainamphueng">ส้มสายน้ำผึ้ง</option>					    	
					  	</select>
					</div>
					<br>
					<div class="form-group" style="width:60%">
					 	<select class="form-control" name="selectmonth">
					 		<option value="month" selected>เดือน</option>
					   		<option value="jan">มกราคม</option>
					   		<option value="feb">กุมภาพันธ์</option>					    	
					  	</select>
					</div>
					<div class="form-group" style="width:60%">
					 	<select class="form-control" name="selectyear">
					 		<option value="year" selected>ปี</option>
					   		<option value="59">59</option>
					   		<option value="60">60</option>							    	
					  	</select>
					</div>
				</div>
				<div class="col-md-2">
					<h3 class="text-left">
						จำนวน
					</h3>
					<br>
					<div class="form-group" style="width:90%">
						<input type="text" class="form-control"/>
					</div>
					<br>
					<div class="form-group" style="width:60%">
					 	<select class="form-control" name="selectscale">
					 		<option value="scale" selected>หน่วย</option>
					   		<option value="kg">กิโลกรัม</option>
					   		<option value="t">ตัน</option>							    	
					  	</select>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group" style="margin-top:3.3em">
					 	<button type="button" class="btn btn-success">
						เพิ่ม
						</button>
					</div> 					
				</div>
				<div class="col-md-3">
					<div class="panel panel-default" style="width:90%">
						<div class="panel-heading">
							ส้มเขียวหวาน 20 กิโลกรัม
							<a href="#" data-toggle="modal" style="float:right">
								<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
						</div>
						<div class="panel-body">
							ส้มโชกุน 50 กิโลกรัม
							<a href="#" data-toggle="modal" style="float:right">
								<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
						</div>
						<div class="panel-footer">
							ส้มสายน้ำผึ้ง 1 ตัน
							<a href="#" data-toggle="modal" style="float:right">
								<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="form-group">
					 	<button type="button" class="btn btn-info" 
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
							<li>
								<a href="javascript:;">ส้มเขียวหวาน 20 กิโลกรัม</a>
							</li>
							<li>
								<a href="javascript:;">ส้มโชกุน 50 กิโลกรัม</a>
							</li>
							<li>
								<a href="javascript:;">ส้มสายน้ำผึ้ง 1 ตัน</a>
							</li>
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
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ทุเรียน จากสวนเปรม</h5>
								<p>ทุเรียนหวานกรอบอร่อย</p>
								<a href="ProductDetail-bf.html"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วง สวนนภัสสกร</h5>
								<p>มะม่วงหลายพันธุ์ มาดูได้ค่ะ</p>
								<a href="ProductDetail-bf.html"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f4.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ลำไย สวนวศิน</h5>
								<p>ลำไยดี ลำไยอร่อย ต้องลำไยสวนวศิน</p>
								<a href="ProductDetail-bf.html"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
@endsection