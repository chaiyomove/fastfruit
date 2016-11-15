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
					<h3>ข้อมูลผลผลิต</h3>
					<div id="owl-demo" class="owl-carousel">
						<div class="item">		
							<div style="width: 55%; margin: auto; float: left;">
								<div class="carousel slide" id="carousel-824332" 	>
									<ol class="carousel-indicators" >
										<li class="active" data-slide-to="0" data-target="#carousel-824332">
										</li>

										<?php if(!str_contains($product->picture2, "no11")): ?>
											<li data-slide-to="1" data-target="#carousel-824332">
											</li>
										<?php endif; ?>
										<?php if(!str_contains($product->picture3, "no11")): ?>
											<li data-slide-to="2" data-target="#carousel-824332">
											</li>
										<?php endif; ?>

									</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="<?php echo e(asset($product->picture1)); ?>" style="height: 300px; width: 850px;" />
									</div>

									<?php if(!str_contains($product->picture2, "no11")): ?>
										<div class="item">
										<img src="<?php echo e(asset($product->picture2)); ?>" style="height: 300px; width: 850px;" />			
									</div>
									<?php endif; ?>

									<?php if(!str_contains($product->picture3, "no11")): ?>
										<div class="item">
										<img src="<?php echo e(asset($product->picture3)); ?>" style="height: 300px; width: 850px;" />
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
								<form method="GET" action="<?php echo e(url('/orcharddetail')); ?>">
									<?php echo e(csrf_field()); ?>

						            <input type="hidden" name="idProductSprint" value="<?php echo e($product->idProductSprint); ?>">

									<td>
										<button type="button" class="btn btn-info btn-sm"> 
											<h5>
											<i class="glyphicon glyphicon-user"> </i>
											<i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท
											</h5>
							            </button>
									</td>
									<td>
										
								                			
								            <input type="hidden" name="idOrchard" value="<?php echo e($product->orchardPlot->orchard->idOrchard); ?>">	
												<button type="submit" class="btn btn-danger btn-sm">
													<h5>
													<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
													</h5>
												</button>														
										
									</td>
									<td>
								        <button type="button" class="btn btn-warning btn-sm"> 
								            <h5>
									        <i class="glyphicon glyphicon-star"> </i>
									        </h5>
				                        </button>
								    </td>
								</form>
								</tr>
							</table>
								
					            
							</div>
						</div>

								<!--Gentelela_table-->
									<div class="col-md-12 col-sm-12 col-xs-12" style="width: 45%; margin: auto; float: right;">
						                <div class="x_panel">
						                  <div class="x_title">
						                    <h4>
											<?php echo e(array_get($product->fruitSpeciess,'specieName')); ?> จาก <?php echo e($product->orchardPlot->orchard->nameOrchard); ?></h4>
						                    
						                    <div class="clearfix"></div>
						                  </div>
						                  <div class="x_content" style="font-size: 16px">

						                    <table class="table table-striped">
						                      <tbody>
						                        <tr>
						                          <th scope="row" width="40%">รายละเอียด</th>
						                          <td colspan="2" align="left"><?php echo e($product->description); ?>	</td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">จำนวน</th>
						                          <td align="left" width="5%"><?php echo e($product->fruitNum); ?></td>
						                          <td align="left">กิโลกรัม</td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">ติดต่อผู้ขาย</th>
						                          <td colspan="2" align="left"><?php echo e($product->orchardPlot->orchard->phone); ?></td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">ตั้งแต่วันที่</th>
						                          <td colspan="2" align="left"><?php echo e($product->startDate); ?></td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">ถึงวันที่</th>
						                          <td colspan="2" align="left" padding="20px"><?php echo e($product->endDate); ?></td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                        	<form method="GET" action="<?php echo e(url('/orcharddetail')); ?>">
													<?php echo e(csrf_field()); ?>

						                       		<input type="hidden" name="idProductSprint" value="<?php echo e($product->idProductSprint); ?>">

								                    <td>
								                    	<?php if($product->orchardPlot->idPlotStatus == 1): ?>
								                    		<img src="../images/gap.png" style="float:right;height:48px;width:50px">
								                    	<?php endif; ?>
								                    </td>
								                    </form>
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