@extends('layouts/master')
@section('content')

<!-- FlexSlider -->
	 <script src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			<script>
			// Can also be used with $(document).ready()
				$(window).load(function() {
				$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
				});
				});
			</script>
			<!-- //FlexSlider-->

								
		<!--banner-->
		<div class="banner-section">
			<div class="container">
			</div>
		</div>
		<!--banner-->

		<!--Featured Properties-->
				<div class="feature-section" style="padding-bottom:0em; padding-top:3em">
					<div class="container">
						<h3>ผลผลิตทั้งหมด</h3>
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/f1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ส้มส้ม จากสวนสิรภัทร</h5>
								<p>ส้มสดๆ ส้มสวยๆ ส้มหวานๆ </p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/f2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ทุเรียน จากสวนเปรม</h5>
								<p>ทุเรียนหวานกรอบอร่อย</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/f3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วง สวนนภัสสกร</h5>
								<p>มะม่วงหลายพันธุ์ มาดูได้ค่ะ</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/f4.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ลำไย สวนวศิน</h5>
								<p>ลำไยดี ลำไยอร่อย ต้องลำไยสวนวศิน</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!--Featured Properties-->

		<!--Featured Properties-->
				<div class="feature-section" style="padding-bottom:0em; padding-top:2em">
					<div class="container">
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/f5.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มังคุด จากสวนจำปาเงิน</h5>
								<p>ขายมังคุด ลูกใหญ่ เนื้อหวาน</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f6.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>เงาะโรงเรียน จากสวนจำเริญ</h5>
								<p>เงาะอร่อยๆต้องเงาะโรงเรียน</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/f7.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ลองกอง จากสวนลองดู</h5>
								<p>ลองซื้อลองกองจากสวนลองดูสิครับ</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f8.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>สละ จากสวนเสียสละ</h5>
								<p>สวนเราเสียสละ จึงขายสละ</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!--Featured Properties-->

		<!--Featured Properties-->
				<div class="feature-section" style="padding-bottom:5em; padding-top:2em">
					<div class="container">
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/f9.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วงเขียวเสวย จากสวนปาณระวี</h5>
								<p>ขายมะม่วงเขียวเสวย ลูกใหญ่ ผลสวย</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f10.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ขนุน จากสวนขยันขาย</h5>
								<p>ขนุนเนื้อหวาน หอมอร่อย</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f11.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะละกอ จากสวนกอไก่</h5>
								<p>มะละกอหวานฉ่ำ อร่อยเด็ด</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
								<img src="images/f12.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ฝรั่ง จากสวนรักฝรั่ง</h5>
								<p>กรอบนอก หวานใน ไม่ฝาด อร่อยมาก</p>
								<a href="ProductDetail-bf.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		<!--Featured Properties-->
		
@endsection