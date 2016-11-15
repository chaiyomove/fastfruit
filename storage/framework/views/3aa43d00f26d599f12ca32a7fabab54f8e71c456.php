<?php $__env->startSection('content'); ?>

 <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">

<script >
	function clickstar() {
		document.getElementById('bookmark').id = "after_bookmark";
	};

</script>


<script>
	jQuery(function ($) {
		$('#bookmark').on('click', function () {
			<?php if(Auth::user()): ?>
				var $el = $(this),
				textNode = this.lastChild;
				$el.find('i').toggleClass('fa-star fa-star-o');
				$el.toggleClass('bookmark');

				if (!$el.hasClass('bookmark')){
					$.get('<?php echo e(url('api/user')); ?>/<?php echo e(Auth::user()->id); ?>/bookmark/<?php echo e($product->idProductSprint); ?>', function(data){ 
	        		// alert(data);
	        		});	
				} else {
					$.get('<?php echo e(url('api/user')); ?>/<?php echo e(Auth::user()->id); ?>/unbookmark/<?php echo e($product->idProductSprint); ?>', function(data){ 
	        		// alert(data);
	        		});
				}
			<?php endif; ?>

		});
	});

</script>

			<section class="noo-page-heading eff heading-3">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">ข้อมูลผลผลิต</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce single-product noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
								<div class="product">
									<div class="single-inner">
										<div class="images">
											<div class="project-slider">
												<div class="owl-carousel sync1">
													<div class="item">
														<img style="width: 400px; height: 265px" src="<?php echo e(asset($product->picture1)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="<?php echo e(asset($product->picture2)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="<?php echo e(asset($product->picture3)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="<?php echo e(asset($product->picture4)); ?>" alt="" />
													</div>
												</div>
												<div class="owl-carousel sync2">
													<div class="item">
														<img style="width: 90px; height: 60px" src="<?php echo e(asset($product->picture1)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="<?php echo e(asset($product->picture2)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="<?php echo e(asset($product->picture3)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="<?php echo e(asset($product->picture4)); ?>" alt="" />
													</div>
												</div>
											</div>
										</div>
										<div class="summary entry-summary">
											<h1 class="product_title entry-title border_bottom"><?php echo e(array_get($product->fruitSpeciess,'specieName')); ?> จาก <?php echo e($product->orchardPlot->orchard->nameOrchard); ?></h1>
											<div class="product_meta">
												<table class="detail">
													<tr>
														<td>จำนวน:</td>
														<td><?php echo e($product->fruitNum); ?>&nbsp;กิโลกรัม</td>
													</tr>
													<tr>
														<td>ติดต่อผู้ขาย:</td>
														<td><?php echo e($product->orchardPlot->orchard->phone); ?></td>
													</tr>
													<tr>
														<td>ตั้งแต่วันที่:</td>
														<td><?php echo e($product->startDate); ?></td>
													</tr>
													<tr>
														<td>ถึงวันที่:</td>
														<td><?php echo e($product->endDate); ?></td>
													</tr>
													<tr>
														<td>สถานะการรับรอง:</td>
														<td><?php echo e($product->orchardPlot->plotStatus->status); ?> </td>
													</tr>
													<tr>
														<td>ผลผลิตของสวน:</td>
														<td></td>
													</tr>
													

												</table>
											</div>

											<div>
												<a href="<?php echo e(url('orchards',[$product->orchardPlot->orchard->idOrchard])); ?>">
												<button type="button" class="single_add_to_cart_button button">
													<i class="fa fa-eye">&nbsp;</i>ชมสวน
												</button>
												</a>
												

												

												<?php if(Auth::user()): ?>
													<?php $i = 0 ?>
													<?php $__currentLoopData = Auth::user()->userBookmarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bookmark): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
														<?php if($bookmark->idProductSprint == $product->idProductSprint && $i==0): ?>
														<!-- <button type="submit" class="single_add_to_cart_button button">
															<i class="fa fa-eye">&nbsp;</i>ดูผลผลิต
														</button>
														<button type="submit" class="single_add_to_cart_button plot">
															<i class="fa fa-eye">&nbsp;</i>ดูแปลง
														</button>
														<button type="submit" class="single_add_to_cart_button map">
															<i class="fa fa-globe">&nbsp;</i>แผนที่
														</button> -->
															<button type="button" class="single_add_to_cart_button button" id="bookmark">	
																<i class="fa fa-star fa-lg"> </i>	    
														 	</button>
															<?php $i++; ?>
										                <?php endif; ?>
										            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
											        <?php if($i==0): ?> 
										                <button type="button" class="single_add_to_cart_button button bookmark" id="bookmark"> 
															<i class="fa fa-star-o fa-lg"> </i>						    
														</button>
												 	<?php endif; ?>
												<?php endif; ?>

													<a href="<?php echo e(url('product/' .$plot->idOrchardPlot. '/create')); ?>">
														<button type="button" class="single_add_to_cart_button plot">
														<i class="fa fa-eye">&nbsp;</i>เพิ่มผลผลิต
														</button>
													</a>
													<button type="button" class="single_add_to_cart_button button editProfile" style="margin-top: 5px">
														<i class="fa fa-cog">&nbsp;</i>แก้ไข
													</button>

											</div>

											<div class="clear"></div>
											
										</div> 
									</div>
									<div class="commerce-tabs">
										<ul class="nav nav-tabs tabs">
									    	<li class="active">
									    		<a data-toggle="tab" href="#tab-1">รายละเอียด</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-2">ประวัติการผลิต</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-3">รีวิว</a>
									    	</li>
									  	</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<p><?php echo e($product->description); ?></p>
											</div>
											<div id="tab-2" class="tab-pane fade">
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
													<?php $__currentLoopData = $historys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $history): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
														<li>
															<a href="<?php echo e(url('product', [$history->idProductSprint])); ?>">
																<img style="width: 70px; height: 70px;" src="<?php echo e(asset($history->picture1)); ?>" alt="" /> 
																<span class="product-title"><?php echo e($history->orchardPlot->fruitSpecie->specieName); ?></span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;<?php echo e($history->orchardPlot->province->provinceName); ?></span>
														</li>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
													</ul>
												</div>
											</div>
										
										</div>
									</div>
									<div class="related products">
									<h2>ผลผลิตที่คล้ายกัน</h2>
									
										<div class="products row product-grid">
											<div class="masonry-item noo-product-column col-md-3 col-sm-6 product">
												<div class="noo-product-inner">
													<div class="noo-product-thumbnail">
														<a href="<?php echo e(url('product', [$product->idProductSprint])); ?>">
															<img style="width: 260px; height: 160px;"  src="<?php echo e(asset($product->picture1)); ?>" alt="" />
														</a>
														<!-- <div class="noo-rating">
															<div class="star-rating">
																<span style="width:0%"></span>
															</div>
														</div> -->
													</div>
													<div class="noo-product-title"> 
														<h3><a href="<?php echo e(url('product', [$product->idProductSprint])); ?>"><?php echo e($product->orchardPlot->fruitSpecie->specieName); ?>จาก <?php echo e($product->orchardPlot->orchard->nameOrchard); ?></a></h3>
														<span class="price"><span class="amount">จำนวนผลผลิต: <?php echo e($product->fruitNum); ?> กิโลกรัม</span></span>
														<p class="space">รอบการผลิต:<?php echo e($product->startDate); ?> ถึง <?php echo e($product->endDate); ?></p>
														<span class="price"><span class="amount">
															จังหวัด
														</span></span>
														<div class="noo-product-action">
															<div class="noo-action">
																<a href="<?php echo e(url('product', [$product->idProductSprint])); ?>" class="button product_type_simple info_circle_button">
																	<span>ดูรายละเอียด</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
											
										</div>
									</div>
								</div>
							</div>
							<div class="noo-sidebar col-md-3">
								<div class="noo-sidebar-wrap">
									<div class="widget commerce widget_product_search">
										<h3 class="widget-title">ค้นหา</h3>
										<form>
											<input type="search" class="search-field" placeholder="ค้นหาสวน&hellip;" value="" name="s"/>
											<input type="submit" value="Search"/>
										</form>
									</div>
									<div class="widget commerce widget_products">
										<h3 class="widget-title">ผลผลิตยอดนิยม</h3>
										<?php $__currentLoopData = $popProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $popProduct): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										<ul class="product_list_widget">
											<li>
												<a href="<?php echo e(url('product', [$popProduct->idProductSprint])); ?>">
													<img style="width: 70px; height: 70px;" src="<?php echo e(asset($popProduct->picture1)); ?>" alt="" /> 
													<span class="product-title"><?php echo e($popProduct->orchardPlot->fruitSpecie->specieName); ?>จาก <?php echo e($popProduct->orchardPlot->orchard->nameOrchard); ?></span>
												</a>
												<span class="amount">จังหวัด</span>
											</li>

										</ul>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>