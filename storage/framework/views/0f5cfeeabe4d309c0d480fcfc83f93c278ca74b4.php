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


			<!--Add-->

			<div class="feature-section">
				<div class="container">
					<h3>แก้ไขข้อมูลของคุณ</h3><br>
					<form method="POST" enctype="multipart/form-data" action="<?php echo e(url('user',[Auth::user()->id])); ?>">
					<input type="hidden" name="_method" value="PATCH">
					<?php echo e(csrf_field()); ?>

						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
								<h4>ชื่อ : </h4>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" name="firstName" value="<?php echo e(Auth::user()->firstName); ?>"></input>
							</div>
							<div class="col-md-4">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
								<h4>นามสกุล : </h4>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" name="lastName" value="<?php echo e(Auth::user()->lastName); ?>"></input>
							</div>
							<div class="col-md-4">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-2">
								<h4>รหัสบัตรประชาชน : </h4>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" name="citizenId" value="<?php echo e(Auth::user()->citizenId); ?>"></input>
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
								<h4>โทรศัพท์ : </h4>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control" placeholder="ตัวเลขเท่านั้น" name="phone" value="<?php echo e(Auth::user()->phone); ?>"></input>
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
								<h4>ที่อยู่ : </h4>
							</div>
							<div class="col-md-4">
								<textarea class="form-control" style="resize: none;" rows="4" name="address">
									<?php echo e(Auth::user()->address); ?>

								</textarea>
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
							 			<?php if($province->idProvince == Auth::user()->idProvince): ?>
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
								<h4>รูปโปรไฟล์ : </h4>
							</div>
							<div class="col-md-2">								
								<div class="form-group">				 
									<input id="exampleInputFile" type="file" name="picture">
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
							<div class="col-md-4">
							</div>
							<div class="col-md-4">
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-primary btn-lg btn-block" >
									บันทึก
								</button>	
							</div>
						</div>
					</form>
				</div>
			</div>


			<!--Add-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>