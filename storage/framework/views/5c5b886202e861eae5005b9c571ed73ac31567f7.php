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


			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3>โปรไฟล์ของคุณ</h3>
					<br>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-3">
								</div>
								<div class="col-md-3">
									<div class="testmonial-img">
										<img src="images/t1.png" width="70%" alt=""/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="testmonial-text">
										<p style="font-size: 22px"><?php echo e(Auth::user()->firstName); ?>&nbsp;<?php echo e(Auth::user()->lastName); ?></p>
										<br>
										<p style="font-size: 18px">
											0873575912
										</p>
										<p style="font-size: 18px">
											83 หมู่ 6 ต.บ่อพลับ อ.เมือง จ.นครปฐม 73000
										</p>											 
									</div>
								</div>
								<div class="col-md-3">
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-2" style="text-align: center;">
										<a href="<?php echo e(url('addorchard')); ?>" class="btn btn-info btn-sm">
							          		<h4><span class="glyphicon glyphicon-plus-sign"></span> เพิ่มสวน</h4>
							       		</a>							    					
								</div>
								<div class="col-md-2" style="text-align: center;">
									<a href="<?php echo e(url('updateuserprofile')); ?>" class="btn btn-info btn-sm">
						          		<h4><span class="glyphicon glyphicon-cog"></span> แก้ไขโปรไฟล์ของคุณ</h4>
						        	</a> 
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
								</div>
							</div>
						</div>
												
						<div class="clearfix"> </div>


				</div>
			</div>

			<!--profile-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>