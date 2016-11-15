<?php $__env->startSection('content'); ?>

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
		<div class="feature-section" style="padding:2em 0em 0em 0em;">
			<div class="container">
				<h3>ผลผลิตทั้งหมด</h3>
			</div>
		</div>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<?php if($key%4 == 0): ?>	
				<div class="feature-section" style="padding:0em 0em 3em 0em;">
					<div class="container">
						<div class="feature-grids">
			<?php endif; ?>
						<form method="GET" action="<?php echo e(url('/productdetail')); ?>">
							<?php echo e(csrf_field()); ?>

							<div class="col-md-3 feature-grid">
								<div class="frame">
									<?php if($key<=10): ?>
										<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
									<?php endif; ?>

									<?php if($product->orchardPlot->idPlotStatus == 1): ?>
										<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
									<?php endif; ?>
									<img src="<?php echo e($product->picture1); ?>" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
									
									<h5 class="space"><?php echo e(array_get($product->fruitSpeciess,'specieName')); ?></h5>						
									<p class="space"><?php echo e($product->description); ?></p>
									
										<input type="hidden" name="idProductSprint" value="<?php echo e($product->idProductSprint); ?>">	
										<button type="submit" class="btn btn-link">
											<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
										</button>
									
								</div>
							</div>
						</form>
			<?php if((count($products)===$key+1) || $key%4 == 3): ?>	
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
		<!--Featured Properties-->
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>