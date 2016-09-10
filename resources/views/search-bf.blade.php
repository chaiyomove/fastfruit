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
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="alert alert-success alert-dismissable" style="text-align: center;">
						<h3>ผลลัพธ์การค้นหา</h3>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>


	<!--Featured Properties-->
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
			<!--Featured Properties-->

@endsection