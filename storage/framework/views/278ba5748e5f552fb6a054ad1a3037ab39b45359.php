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

<link href="css/jquery.datepicker.css" rel="stylesheet">


			<div class="feature-section">
				<div class="container">
					<h3>เพิ่มผลผลิต</h3><br><br>
					<form method="POST" enctype="multipart/form-data" action="<?php echo e(url('/product')); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="idOrchardPlot" value="<?php echo e($id); ?>">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="width:40%; float:left">
							 	<select class="form-control disable" name="idFruit" style="color: #DCDAD1" disabled>
							 		<option  value="" selected >เลือกชนิดผลไม้</option>
							 		<?php $__currentLoopData = $fruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruit): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								 		<?php if($fruit->idFruit == old('idFruit')): ?>
								 			<option value="<?php echo e($fruit->idFruit); ?>" selected><?php echo e($fruit->fruitName); ?></option>
								 		<?php else: ?>
								 			<option value="<?php echo e($fruit->idFruit); ?>"><?php echo e($fruit->fruitName); ?></option>
								 		<?php endif; ?>
								 						
							 		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							  	</select>
							</div>
							<div class="form-group" style="width:50%; float:right">
								<select class="form-control" name="idFruitSpecie" style="color: #DCDAD1" disabled>
							 		<option value="" selected>เลือกสายพันธุ์</option>
							 		
							 		<?php $__currentLoopData = $fruitSpecies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruitSpecie): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								 		<?php if($fruitSpecie->idFruitSpecie == App\Orchard_plots::findOrFail($id)->idFruitSpecie): ?>)
								 			<option value="<?php echo e($fruitSpecie->idFruitSpecie); ?>" selected><?php echo e($fruitSpecie->specieName); ?></option>
								 		<?php endif; ?>
							 		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>				    	
							  	</select>	
							</div>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>รายละเอียดผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="description" class="form-control" style="resize: none;" rows="6"><?php echo e(old('description')); ?></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>จำนวนผลผลิต : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" name="fruitNum" class="form-control" placeholder="กิโลกรัม/รอบการผลิต" value="<?php echo e(old('fruitNum')); ?>"></input>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ตั้งแต่วันที่ : </h4>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class='input-group date' id='addplot'>
					                <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" value="<?php echo e(old('startDate')); ?>"/>
					                <span class="input-group-addon" data-toggle="datepicker">
					                    <span class="glyphicon glyphicon-calendar"></span>
					                </span>
					            </div>
							</div>
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ถึงวันที่ : </h4>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class='input-group date' id='datepickerend'>
					                <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง" value="<?php echo e(old('endDate')); ?>"/>
					                <span class="input-group-addon" data-toggle="datepicker">
					                    <span class="glyphicon glyphicon-calendar"></span>
					                </span>
					            </div>
							</div>	
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>อัพโหลดรูป : </h4>
						</div>
						<div class="col-md-2">
														
								<div class="form-group">				 
									<input name="pictures[]" id="exampleInputFile" type="file" />
									<input name="pictures[]" id="exampleInputFile" type="file" />
									<input name="pictures[]" id="exampleInputFile" type="file" />
								</div>							
							
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-success btn-lg btn-block" >
								เสร็จสิ้น
							</button>
						</div>
					</div>
					</form>
				</div>
			</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.datepicker.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>