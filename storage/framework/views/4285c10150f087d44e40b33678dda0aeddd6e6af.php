<?php $__env->startSection('content'); ?>

<script src="/public_html/js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 1000,
			namespace: "callbacks",
			pager:true,
		  });
		});
	</script>
<link href="/public_html/css/owl.carousel.css" rel="stylesheet">
<script src="/public_html/js/owl.carousel.js"></script>
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


		<!--banner-->
		<div class="slider" style="height: 500px ">
			<div class="callbacks_container" >
				<ul class="rslides" id="slider">
					<div class="slid banner1" >
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>เงาะ</h3>
								<p>เงาะโรงเรียน</p>
								<a href="#" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner2">	
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>มะม่วง</h3>
								<p>มะม่วงหวานๆ</p>
								<a href="#" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner3">	
						<div class="caption" style="width:350px; height: 150px ">
							<h3>ทุเรียน</h3>
							<p>หวาน กรอบ อร่อย</p>
							<a href="#" class="button">อ่านเพิ่ม</a>
						</div>
					</div>
				</ul>
			</div>
		</div>

			<!--Featured Properties-->
				<div class="feature-section">
					<div class="container">
						<h3>สวนที่ลงใหม่</h3>
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="/public_html/images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="/public_html/images/f1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ส้มส้ม จากสวนสิรภัทร</h5>
								<p>ส้มสดๆ ส้มสวยๆ ส้มหวานๆ </p>
								<a href="ProductDetail1.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="/public_html/images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="/public_html/images/f2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ทุเรียน จากสวนเปรม</h5>
								<p>ทุเรียนหวานกรอบอร่อย</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="/public_html/images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="/public_html/images/f3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วง สวนนภัสสกร</h5>
								<p>มะม่วงหลายพันธุ์ มาดูได้ค่ะ</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="/public_html/images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="/public_html/images/f4.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ลำไย สวนวศิน</h5>
								<p>ลำไยดี ลำไยอร่อย ต้องลำไยสวนวศิน</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--Featured Properties-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>