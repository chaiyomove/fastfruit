<?php $__env->startSection('content'); ?>

<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
	</script>
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
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


			<!--Featured Properties-->
				<div class="feature-section">
					<div class="container">
						<h3>ผลผลิต</h3>
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/f1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ส้มส้ม</h5>
								<p>ส้มสดๆ ส้มสวยๆ ส้มหวานๆ </p>
								<a href="ProductDetail1.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ทุเรียน</h5>
								<p>ทุเรียนหวานกรอบอร่อย</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/f3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วง</h5>
								<p>มะม่วงหลายพันธุ์ มาดูได้ค่ะ</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3">
								<a href="DashBoard.html" class="btn btn-info btn-sm" style="float: right;">
          							<h5><span class="glyphicon glyphicon-eye-open"></span> ดูข้อมูลสวน</h5>
       		 					</a><br><br>
								<a href="AddFruit.html" class="btn btn-info btn-sm" style="float: right;">
          							<h5><span class="glyphicon glyphicon-plus-sign"></span> เพิ่มผลผลิต</h5>
       		 					</a><br><br>
       		 					<a href="Match2.html" class="btn btn-info btn-sm" style="float: right;">
          							<h5><span class="glyphicon glyphicon-magnet"></span> จับคู่</h5>
        						</a><br><br>
								<a href="EditOrchard.html" class="btn btn-info btn-sm" style="float: right;">
          							<h5><span class="glyphicon glyphicon-pencil"></span> แก้ไขข้อมูลสวน</h5>
        						</a><br><br>
        						<a href="AddAdmin.html" class="btn btn-info btn-sm" style="float: right;">
          							<h5><span class="glyphicon glyphicon-user"></span> เพิ่มผู้ดูแลสวน</h5>
       		 					</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--Featured Properties-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>