<?php $__env->startSection('content'); ?>

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
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="alert alert-success alert-dismissable" style="text-align: center;">
				<h3>ผลลัพธ์</h3>
				<br>
				<ul class="breadcrumb">
					<li>
						<a href="javascript:;">สวนเบ็ญจวรรณ์</a>	 
					</li>
					<li>
						<a href="javascript:;">สวนกุลภัสร์</a>
					</li>
					<li>
						<a href="javascript:;">สวนพุดทรัพย์</a>
					</li>
					<li>
						<a href="javascript:;">สวนสิริจรรยา</a>
					</li>
					<li>
						<a href="javascript:;">สวนรุจิระธราพันธุ์</a>
					</li>
					<li>
						<a href="#">สวนพุดทรัพย์</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>



	<div class="feature-section">
		<div class="container">
			<div class="feature-grids">
				<div class="row">
					<div class="col-md-3 feature-grid">
						<img src="images/a.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">
						<h5>คุณ สิรภัทร</h5>
						<p>ต้องการ ส้มเขียวหวาน 2 ตัน </p>
						<a href="ProductDetail1.html">
							<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
						</a>
					</div>
					<div class="col-md-3 feature-grid">
						<img src="images/a2.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">
						<h5>คุณ เปรม</h5>
						<p>ต้องการ ส้มเขียวหวาน 50 กิโลกรัม</p>
						<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
					</div>
					<div class="col-md-3 feature-grid">
						<img src="images/a3.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">				<h5>คุณ นภัสสกร</h5>
						<p>ต้องการ ส้มโชกุน 50 กิโลกรัม</p>
						<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
					</div>
					<div class="col-md-3 feature-grid">
						<img src="images/a4.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">
						<h5>คุณ วศิน</h5>
						<p>ต้องการ ส้มโชกุน 150 กิโลกรัม</p>
						<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<div class="row">
					<div class="col-md-3 feature-grid">
						<img src="images/a5.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">
						<h5>คุณ สิรภัทร</h5>
						<p>ต้องการ ส้มเขียวหวาน 2 ตัน </p>
						<a href="ProductDetail1.html">
							<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
						</a>
					</div>
					<div class="col-md-3 feature-grid">
						<img src="images/a6.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">
						<h5>คุณ เปรม</h5>
						<p>ต้องการ ส้มเขียวหวาน 50 กิโลกรัม</p>
						<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
					</div>
					<div class="col-md-3 feature-grid">
						<img src="images/a7.jpg" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">				<h5>คุณ นภัสสกร</h5>
						<p>ต้องการ ส้มโชกุน 50 กิโลกรัม</p>
						<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
					</div>
					<div class="col-md-3 feature-grid">
						<img src="images/t2.png" class="img-circle img-responsive" alt="/" style=" max-height:155px; width:155px">
						<h5>คุณ วศิน</h5>
						<p>ต้องการ ส้มโชกุน 150 กิโลกรัม</p>
						<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
					</div>
					<div class="clearfix"></div>
				</div>			
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>