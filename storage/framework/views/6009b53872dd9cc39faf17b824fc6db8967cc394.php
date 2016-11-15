<?php $__env->startSection('content'); ?>

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
		<div class="feature-section" style="padding:2em 0em 0em 0em;">
				<div class="container">
					<h3>สวนทั้งหมด</h3>
				</div>
		</div>
			<?php $__currentLoopData = $orchards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orchard): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<?php if($key%4 == 0): ?>	
					<div class="feature-section" style="padding:0em 0em 3em 0em;">
						<div class="container">
							<div class="feature-grids">
				<?php endif; ?>
							<form method="GET" action="<?php echo e(url('/orcharddetail')); ?>">
							<?php echo e(csrf_field()); ?>

								<div class="col-md-3 feature-grid" >
								
									<div class="frame">
									<?php if($key<=10): ?>
										<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
									<?php endif; ?>
									<?php $__currentLoopData = $orchard->orchardPlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orchardPlot): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<?php if($orchardPlot->idPlotStatus == 1): ?>
											<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
										<img src="<?php echo e($orchard->picture1); ?>" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
										
										<h5 class="space"><?php echo e($orchard->nameOrchard); ?></h5>
										<p class="space"><?php echo e($orchard->description); ?></p>		
										
											<input type="hidden" name="idOrchard" value="<?php echo e($orchard->idOrchard); ?>">	
											<button type="submit" class="btn btn-link">
												<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
											</button>
										
									</div>
								</div>
							</form>
				<?php if((count($orchards)===$key+1) || $key%4 == 3): ?>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
		
		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>