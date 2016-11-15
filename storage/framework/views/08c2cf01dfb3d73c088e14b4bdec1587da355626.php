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
				<h3>แปลงทั้งหมด</h3>
			</div>
		</div>
		<?php $__currentLoopData = $plots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plot): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<?php if($key%4 == 0): ?>	
				<div class="feature-section" style="padding:0em 0em 3em 0em;">
					<div class="container">
						<div class="feature-grids">
			<?php endif; ?>

			<div class="col-md-3 feature-grid">
				<div class="frame">
					<?php if($key<=10): ?>
						<img src="<?php echo e(asset('images/new.png')); ?>" style="position: absolute; margin-left: -5px; margin-top: -2px">
					<?php endif; ?>

					<?php if($plot->idPlotStatus == 1): ?>
						<img src="<?php echo e(asset('images/gap.png')); ?>" style="position: absolute; margin-left: 2px; margin-top: 115px">
					<?php endif; ?>
					<img src="<?php echo e(asset($plot->picture1)); ?>" class="img-responsive" alt="/" style=" max-height:155px; width:255px;">
					
					<h5 class="space"><?php echo e(array_get($plot->fruitSpecies,'specieName')); ?></h5>						
					<p class="space"><?php echo e($plot->description); ?></p>
					<a href="<?php echo e(url('plot', [$plot->idOrchardPlot])); ?>" class="space">
						<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
					</a>
				</div>
			</div>
			
			<?php if((count($plots)===$key+1) || $key%4 == 3): ?>	
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
		<div class="feature-section" style="padding:0em 0em 2em 0em;">
			<div class="container" style="text-align: center;">
				<ul class="pagination pagination-lg">
					<li>
					  	<a href="#" aria-label="Previous">
					    	<span aria-hidden="true">&laquo;</span>
					  	</a>
					</li>
				  	<li class="active"><a href="#">1</a></li>
				 	<li><a href="#">2</a></li>
				  	<li><a href="#">3</a></li>
				  	<li><a href="#">4</a></li>
				  	<li><a href="#">5</a></li>
					<li>
					  	<a href="#" aria-label="Next">
					    	<span aria-hidden="true">&raquo;</span>
					  	</a>
					</li>
				</ul>
			</div>
		</div>
		<!--Featured Properties-->
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>