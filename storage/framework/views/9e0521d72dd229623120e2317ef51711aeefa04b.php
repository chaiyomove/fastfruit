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

			<div class="feature-section" style="padding:5em 0em 0em 0em">
						<div class="container">
							<h3>สวนของคุณ</h3>
						</div>
			</div>

			<!--profile-->
			<?php $__currentLoopData = $orchards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orchard): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<?php if($key%4 == 0): ?>	
					<div class="feature-section" style="padding:5em 0em 0em 0em">
						<div class="container">
							<div class="feature-grids">
				<?php endif; ?>

				<div class="col-md-3 feature-grid" >
					<div class="frame">
					<?php if($key<=10): ?>
						<img src="<?php echo e(asset('images/new.png')); ?>" style="position: absolute; margin-left: -5px; margin-top: -2px">
					<?php endif; ?>
					<?php $__currentLoopData = $orchard->orchardPlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orchardPlot): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<?php if($orchardPlot->idPlotStatus == 1): ?>
							<img src="<?php echo e(asset('images/gap.png')); ?>" style="position: absolute; margin-left: 2px; margin-top: 115px">
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						<img src="<?php echo e(asset($orchard->picture1)); ?>" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
						<h5 class="space"><?php echo e($orchard->nameOrchard); ?></h5>
						<p class="space"><?php echo e($orchard->description); ?></p>		
						<a href="<?php echo e('orchards/'.$orchard->idOrchard); ?>" class="space">
							<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
						</a>
					</div>
				</div>
				
				<?php if((count($orchards)===$key+1) || $key%4 == 3): ?>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<div class="feature-section" style="padding:4em 0em 5em 0em">
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-2" style="text-align: center;">
										<a href="<?php echo e(url('userproduct')); ?>" class="btn btn-info btn-sm" >
          									<h4><span class="glyphicon glyphicon-info-sign"></span> ดูผลผลิต</h4>
       		 							</a>
								</div>
								<div class="col-md-2" style="text-align: center;">
									<a href="<?php echo e(url('updateorchard')); ?>" class="btn btn-info btn-sm">
				          				<h4><span class="glyphicon glyphicon-cog"></span> แก้ไขข้อมูลสวน</h4>
				        			</a>
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-2">
								</div>
							</div>
						</div>

						<div class="clearfix"> </div>
						
				

			<!--profile-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>