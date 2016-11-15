<?php $__env->startSection('content'); ?>
			<section class="noo-page-heading eff heading-3">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">ข้อมูลแปลง</h1>
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
														<img style="width: 100%; height: 100%" src="<?php echo e(asset($plot->picture1)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="<?php echo e(asset($plot->picture2)); ?>" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="<?php echo e(asset($plot->picture3)); ?>" alt="" />
													</div>
													
												</div>
												<div class="owl-carousel sync2">
													<div class="item">
														<img src="<?php echo e(asset($plot->picture1)); ?>" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo e(asset($plot->picture2)); ?>" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo e(asset($plot->picture3)); ?>" alt="" />
													</div>
													
												</div>
											</div>
										</div>
										<div class="summary entry-summary">
											<h1 class="product_title entry-title border_bottom">
											<?php echo e(array_get($plot->fruitSpeciess,'specieName')); ?> จาก <?php echo e($plot->orchard->nameOrchard); ?></h1>
											<div class="product_meta">
												<table class="detail">
													<tr>
														<td>รหัสแปลง:</td>
														<td><?php echo e($plot->plotNumber); ?></td>
													</tr>
													<tr>
														<td>พื้นที่:</td>
														<td><?php echo e($plot->area); ?></td>
													</tr>
													<tr>
														<td>ที่อยู่แปลง:</td>
														<td><?php echo e($plot->address); ?></td>
													</tr>
													<tr>
														<td>จังหวัด:</td>
														<td><?php echo e($plot->idProvince!=0?$plot->province->provinceName:$plot->orchard->province->provinceName); ?></td>
													</tr>
													<tr>
														<td>จำนวนที่ขายได้:</td>
														<td><?php echo e($plot->salesVolume); ?></td>
													</tr>
													<tr>
														<td>สถานะการรับรอง:</td>
														<td><?php echo e($plot->plotStatus->status); ?></td>
													</tr>
												</table>
											</div>
											
											<div>
											<a href="<?php echo e(url('orchards',[$plot->orchard->idOrchard])); ?>"> 
												<button type="submit" class="single_add_to_cart_button button">
													<i class="fa fa-eye">&nbsp;</i>ชมสวน
												</button>
											</a>
												<button type="submit" class="single_add_to_cart_button button">
													<i class="fa fa-add">&nbsp;</i>เพิ่มผลผลิต
												</button>
												<!-- <a href="#" class="fa fa-star" id="after_bookmark"></a> -->
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
									    		<a data-toggle="tab" href="#tab-2">ดูผลผลิต</a>
									    	</li>
									    	
									  	</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<p><?php echo e($plot->description); ?></p>
											</div>
											<div id="tab-2" class="tab-pane fade">

											</div>
											
										</div>
									</div>
									<div class="related products">
									<h2>แปลงในสวนเดียวกัน</h2>
										<div class="products row product-grid">
											
											
											<div class="masonry-item noo-product-column col-md-3 col-sm-6 product">
												<div class="noo-product-inner">
													<div class="noo-product-thumbnail">
														<a href="<?php echo e(url('plot', [$plot->idOrchardPlot])); ?>">
														
															<img width="600" height="760" src="<?php echo e(asset($plot->picture1)); ?>" alt="" />
														</a>
														<!-- <div class="noo-rating">
															<div class="star-rating">
																<span style="width:20%"></span>
															</div>
														</div> -->
													</div>
													<div class="noo-product-title"> 
														<h3><a href="<?php echo e(url('plot', [$plot->idOrchardPlot])); ?>"><?php echo e(array_get($plot->fruitSpecies,'specieName')); ?></a></h3>
														<span class="price"><?php echo e($plot->description); ?></span>
														<div class="noo-product-action">
															<div class="noo-action">
																<a href="<?php echo e(url('plot', [$plot->idOrchardPlot])); ?>" class="button product_type_simple info_circle_button">
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
									</div><!-- 
									<div class="widget commerce widget_products">
										<h3 class="widget-title">สวนยอดนิยม</h3>
										<ul class="product_list_widget">
											<li>
												<a href="orchardDetail.html">
													<img width="100" height="100" src="images/product/product_8.jpg" alt="" /> 
													<span class="product-title">French Bread</span>
												</a>
												<span class="amount">&#36;10.00</span>
											</li>
											<li>
												<a href="orchardDetail.html">
													<img width="100" height="100" src="images/product/product_6.jpg" alt="" /> 
													<span class="product-title">Cookie</span>
												</a>
												<span class="amount">&#36;15.00</span>
											</li>
											<li>
												<a href="orchardDetail.html">
													<img width="100" height="100" src="images/product/product_3.jpg" alt="" /> 
													<span class="product-title">Brown Bread</span>
												</a>
												<span class="amount">&#36;12.00</span>
											</li>
											<li>
												<a href="orchardDetail.html">
													<img width="100" height="100" src="images/product/product_1.jpg" alt="" /> 
													<span class="product-title">Apples</span>
												</a>
												<span class="amount">&#36;3.95</span>
											</li>
											<li>
												<a href="orchardDetail.html">
													<img width="100" height="100" src="images/product/product_16.jpg" alt="" /> 
													<span class="product-title">Onions</span>
												</a>
												<span class="amount">&#36;3.90</span>
											</li>
										</ul>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>