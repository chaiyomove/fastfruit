<?php $__env->startSection('content'); ?>

	<script src="<?php echo e(asset('js/responsiveslides.min.js')); ?>"></script>
		 <script>
			$(function () {
			  $("#slider").responsiveSlides({
				auto:true,
				nav: false,
				speed: 1000,
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
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" >


			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3><?php echo e($orchard->nameOrchard); ?></h3>
					<div id="owl-demo" class="owl-carousel">
						<div class="item">		
							<div class="testmonial-text" style="width: 55%; margin: auto; float: left;">
								<div class="carousel slide" id="carousel-824332" 	>
									<ol class="carousel-indicators" >
										<li class="active" data-slide-to="0" data-target="#carousel-824332">
										</li>

										<?php if(!str_contains($orchard->picture2, "no11")): ?>
											<li data-slide-to="1" data-target="#carousel-824332">
											</li>
										<?php endif; ?>
										<?php if(!str_contains($orchard->picture3, "no11")): ?>
											<li data-slide-to="2" data-target="#carousel-824332">
											</li>
										<?php endif; ?>

									</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="<?php echo e(asset($orchard->picture1)); ?>" style="height: 300px; width: 850px;" />
									</div>

									<?php if(!str_contains($orchard->picture2, "no11")): ?>
									<div class="item">
										<img src="<?php echo e(asset($orchard->picture2)); ?>" style="height: 300px; width: 850px;" />										
									</div>
									<?php endif; ?>
									<?php if(!str_contains($orchard->picture3, "no11")): ?>
									<div class="item">
										<img src="<?php echo e(asset($orchard->picture3)); ?>" style="height: 300px; width: 850px;" />
									</div>
									<?php endif; ?>

								</div> 
								<a class="left carousel-control" href="#carousel-824332" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-824332" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
							<div style="margin-top: 15px">
							<table>
								<tr>
									<td>
										<button type="button" class="btn btn-info btn-sm"> 
											<h5>
											<i class="glyphicon glyphicon-user"> </i>
											<i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท
											</h5>
							            </button>
									</td>
									<td>
										<a href="<?php echo e(url('productofrochard',[25])); ?>">
											<button type="button" class="btn btn-danger btn-sm" > 
												<h5>
												<i class="glyphicon glyphicon-eye-open">&nbsp;ผลผลิต</i>
												</h5>
							                </button>														
										</a>
									</td>
									<td>
										<button type="button" class="btn btn-success btn-sm"> 
									        <h5>
										    <i class="glyphicon glyphicon-ok">&nbsp;ติดตาม</i>
										    </h5>
					                    </button>
									</td>
									<td>
										<button type="button" class="btn btn-warning btn-sm"> 
									        <h5>
										    <i class="glyphicon glyphicon-globe">&nbsp;แผนที่</i>
										    </h5>
					                    </button>
									</td>
								</tr>
							</table>
								
					            
							</div>
						</div>

								<!--Gentelela_table-->
									<div class="col-md-12 col-sm-12 col-xs-12" style="width: 45%; margin: auto; float: right;">
									    <div class="x_panel">
									    <div class="x_title">
									        <h4>ข้อมูล <?php echo e($orchard->nameOrchard); ?></h4>
									        <div class="clearfix"></div>
									    </div>
									        <div class="x_content" style="font-size: 16px">

									            <table class="table table-striped">
									                <tbody>
									                <tr>
									                    <th scope="row" width="40%">รายละเอียด</th>
									                    <td colspan="2" align="left">
									                    <?php echo e($orchard->description); ?>	
									                    </td>
									                    <td></td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">ที่อยู่</th>
									                    <td colspan="2" align="left"><?php echo e($orchard->address); ?>               	
									                    </td>
									                    <td></td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">จังหวัด</th>
									                    <td colspan="2" align="left"><?php echo e($orchard->province->provinceName); ?></td>
									                    <td></td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">พื้นที่</th>
									                    <td align="left" width="5%"><?php echo e($orchard->area); ?></td>
									                    <td align="left">ไร่</td>
									                </tr>
									                <tr>
									                    <th scope="row" width="40%">ติดต่อผู้ขาย</th>
									                    <td colspan="2" align="left"><?php echo e($orchard->phone); ?></td>
									                    <td></td>
									                </tr>							                
									                </tbody>
									            </table>

									        </div>
										</div>
									</div>


								
									
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>

			<!--profile-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>