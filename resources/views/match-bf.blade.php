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
					<div class="btn-group">
						 
						<button class="btn btn-default">
							เลือกผลไม้
						</button> 
							<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
								<span class="caret"></span>
							</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#" style="color: black">ส้ม</a>
							</li>
							<li>
								<a href="#">มะม่วง</a>
							</li>
							<li>
								<a href="#">ทุเรียน</a>
							</li>
							<li>
								<a href="#">เงาะ</a>
							</li>
						</ul>
					</div>
					<br><br><br>
					<div class="btn-group">
						 
						<button class="btn btn-default">
							จังหวัด
						</button> 
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">กรุงเทพ</a>
							</li>
							<li>
								<a href="#">สุพรรณบุรี</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<h3 class="text-left">
						เลือกสายพันธุ์
					</h3>
					<br>
					<div class="btn-group">
						 
						<button class="btn btn-default">
							เลือกสายพันธุ์
						</button> 
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">ส้มสายน้ำผึ้ง</a>
							</li>
							<li>
								<a href="#">ส้มเขียวหวาน</a>
							</li>
							<li>
								<a href="#">ส้มโชกุน</a>
							</li>
							<li>
								<a href="#">ส้มเช้ง</a>
							</li>
						</ul>
					</div>
					<br><br><br>
					<div class="btn-group">
						 
						<button class="btn btn-default">
							เดือน
						</button> 
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">มกราคม</a>
							</li>
							<li>
								<a href="#">กุมภาพันธ์</a>
							</li>
						</ul>
					</div>
					<div class="btn-group">
						 
						<button class="btn btn-default">
							ปี
						</button> 
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">59</a>
							</li>
							<li>
								<a href="#">60</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<h3 class="text-left">
						จำนวน
					</h3>
					<br>
					<div class="form-group">
						<input type="text" class="form-control"/>
					</div>
					<br>
					<div class="btn-group">
						 
						<button class="btn btn-default">
							หน่วย
						</button> 
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">กิโลกรัม</a>
							</li>
							<li>
								<a href="#">ตัน</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-1">
					 <br><br>
					<button type="button" class="btn btn-success" style="width: 49px; height: 34px;">
						เพิ่ม
					</button> 					
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
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
					<button type="button" class="btn btn-primary" style="width: 70px; height: 34px; float:right">
						จับคู่
					</button>
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