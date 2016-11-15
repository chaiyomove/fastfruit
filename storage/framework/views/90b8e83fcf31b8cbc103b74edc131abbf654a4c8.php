<?php $__env->startSection('content'); ?>

<script src="<?php echo e(asset('js/responsiveslides.min.js')); ?>"></script>
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
<link href="<?php echo e(asset('css/owl.carousel.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script>
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

<!-- fruitspecies-dropdown -->
<script>
	$(document).ready(function(){
		$('#idFruit').on('change', function(e){
	    	var idFruit = e.target.value;

	        //ajax
	        $.get('<?php echo e(url('api/fruitspecies')); ?>/'+idFruit, function(data){ 

		        //success data
	            $('#idFruitSpecie').empty();

	            // $('#idFruitSpecie').append('<option value="0" selected>กรุณาเลือก</option>');

	            $.each(data, function(index, fruitSpecie){

	            	if(index==0){
		            	$('#idFruitSpecie').append('<option value="' + fruitSpecie.idFruitSpecie + '"selected>' +  fruitSpecie.specieName + '</option>');

	            	} else {
		            	$('#idFruitSpecie').append('<option value="' + fruitSpecie.idFruitSpecie + '">' +  fruitSpecie.specieName + '</option>');            		
	            	}


	           });



	       });


	   });
	});
</script>
<!-- fruitspecies-dropdown -->

<!-- auto-refill_radio-button-->
<script type="text/javascript">
	$(document).ready(function(){
		$("input[name=idPlotStatus][value=" + <?php echo e(old('idPlotStatus')); ?> + "]").attr('checked', 'checked');
	});
</script>
<!-- auto-refill_radio-button-

			<!--Add-->

			<div class="feature-section">
				<div class="container">
					<h3>เพิ่มแปลง</h3><br>
					<form method="POST" enctype="multipart/form-data" action="<?php echo e(url('/plot')); ?>">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="idOrchard" value="<?php echo e($id); ?>">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ผลผลิต : </h4>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="width:40%; float:left">
							 	<select class="form-control" name="idFruit" id="idFruit">
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
								<select class="form-control" name="idFruitSpecie" id="idFruitSpecie">
							 		<option value="" selected>เลือกสายพันธุ์</option>
							 		
							 		<?php $__currentLoopData = $fruitSpecies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruitSpecie): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								 		<?php if($fruitSpecie->idFruitSpecie == old('idFruitSpecie')): ?>
								 			<option value="<?php echo e($fruitSpecie->idFruitSpecie); ?>" selected><?php echo e($fruitSpecie->specieName); ?></option>
								 		<?php else: ?>
								 			<option value="<?php echo e($fruitSpecie->idFruitSpecie); ?>"><?php echo e($fruitSpecie->specieName); ?></option>
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
							<h4>รหัสแปลง : </h4>
						</div>
						<div class="col-md-4">
							<input type="text" name="plotNumber" class="form-control" value="<?php echo e(old('plotNumber')); ?>"></input>
						</div>
						<div class="col-md-4">
						</div>
					</div>	
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>รายละเอียดแปลง : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="description" class="form-control" style="resize: none;" rows="6"><?php echo e(old('plotNumber')); ?></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>พื้นที่แปลง : </h4>
						</div>
						<div class="col-md-2">
							<input type="text" name="area" class="form-control" placeholder="หน่วยเป็นไร่" value="<?php echo e(old('area')); ?>"></input>
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
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>ที่อยู่แปลง : </h4>
						</div>
						<div class="col-md-4">
							<textarea name="address" class="form-control" style="resize: none;" rows="5"><?php echo e($orchard->address); ?></textarea>
						</div>
						<div class="col-md-4">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2">
							<h4>จังหวัด : </h4>
						</div>
						<div class="col-md-2">
							<select class="form-control" name="idProvince">
						 		<option value="" selected>กรุณาเลือก</option>	
						 		<?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						 			<?php if($orchard->idProvince == $province->idProvince): ?>
								 		<option value="<?php echo e($province->idProvince); ?>" selected><?php echo e($province->provinceName); ?></option>				
						 			<?php else: ?>
								 		<option value="<?php echo e($province->idProvince); ?>"><?php echo e($province->provinceName); ?></option>				
						 			<?php endif; ?>	
						 		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>		 			 	   	
							</select>
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
							<h4>GAP : </h4>
						</div>
						<div class="col-md-4">
							<label class="radio-inline">
								<input type="radio" name="idPlotStatus" value="3">
								มี GAP
							</label>
							<label class="radio-inline">
								<input type="radio" name="idPlotStatus" value="2">
								ไม่มี GAP
							</label>							
						</div>
						<div class="col-md-4">
						</div>
					</div>			
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-success btn-lg btn-block">
								เสร็จสิ้น
							</button>
						</div>
					</div>
					</form>
				</div>
			</div>


			<!--Add-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>