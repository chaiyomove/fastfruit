<?php $__env->startSection('content'); ?>
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">ผลการค้นหา</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
								<div class="noo-catalog">
									<p class="commerce-result-count">แสดง 1&ndash;9 of 18 ทั้งหมด</p>
								
									<form class="commerce-ordering">
										<select name="orderby" class="orderby">
											<option value="" selected='selected'>เรียงตามค่าเริ่มต้น</option>
											<option value="">เรียงตามจังหวัด</option>
											<option value="">เรียงตามรอบการผลิต</option>
											<option value="">Sort by newness</option>
											<option value="">Sort by price: low to high</option>
										</select>
									</form>
								</div>

								<?php $__currentLoopData = $matchedOrcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orchard): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<?php if($key%3 == 0): ?>	
								<div class="products row product-grid">
								<?php endif; ?>
									<div class="masonry-item noo-product-column col-md-4 col-sm-6 product">
										<div class="noo-product-inner">
											<div class="noo-product-thumbnail">
												<a href="<?php echo e('orchards/'.$orchard->idOrchard); ?>">

													<img style="width: 260px; height: 160px;" src="<?php echo e(asset($orchard->picture1)); ?>" alt="" />
												</a>
												<!-- <div class="noo-rating">
													<div class="star-rating">
														<span style="width:0%"></span>
													</div>
												</div> -->
											</div>
											<div class="noo-product-title"> 
												<h3><a href="<?php echo e('orchards/'.$orchard->idOrchard); ?>"><?php echo e($orchard->nameOrchard); ?></a></h3>
												<?php $speciesTmp = array(); ?>
												<?php $__currentLoopData = $orchard->orchardPlots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plotKey => $orchardPlot): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
													<?php if(!array_has($speciesTmp, $orchardPlot->fruitSpecie->specieName)): ?>
														<?php $speciesTmp[] =  $orchardPlot->fruitSpecie->specieName; ?>
														<?php if($plotKey==0): ?>
															
															<p class="space"><i class="fa fa-lemon-o" style="color: green; margin-top: 10px;"></i>&nbsp;<?php echo e($orchardPlot->fruitSpecie->specieName); ?>

														<?php elseif(count($orchard->orchardPlot)===$plotKey+1): ?>
															<?php echo e($orchardPlot->fruitSpecie->specieName); ?>

															
														<?php else: ?>
														, <?php echo e($orchardPlot->fruitSpecie->specieName); ?>

															
														<?php endif; ?>	
													<?php endif; ?>
													
												<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
															</p>

												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;<?php echo e($orchard->province->provinceName); ?></span>
												<div class="noo-product-action">
													<div class="noo-action">
														<a href="<?php echo e('orchards/'.$orchard->idOrchard); ?>" class="button product_type_simple eye_button">
															<span>ชมสวน</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php if((count($matchedOrcs)===$key+1) || $key%3 == 2): ?>
								</div>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
						
								<div class="pagination list-center">
									<span class="page-numbers current">1</span>
									<a class="page-numbers" href="#">2</a>
									<a class="page-numbers" href="#">3</a>
									<a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a>
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
									<div class="widget commerce widget_price_filter">
										<h3 class="widget-title">กรองตามรอบการผลิต</h3>
										<form>
											<div class="price_slider_wrapper">
												<div class="price_slider" style="display:none;"></div>
												<div class="price_slider_amount">
													<input type="text" id="min_price" name="min_price" value="" data-min="1" placeholder="Min price"/>
													<input type="text" id="max_price" name="max_price" value="" data-max="12" placeholder="Max price"/>
													<button type="submit" class="button">กรอง</button>
													<div class="price_label" style="display:none;">
														เดือน: <span class="from"></span> &mdash; 
														<span class="to"></span>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</form>
									</div>
									<div class="widget commerce widget_products">
										<h3 class="widget-title">สวนยอดนิยม</h3>
										<ul class="product_list_widget">
											<li>
												<a href="<?php echo e('orchards/'.$orchard->idOrchard); ?>">
													<img style="width: 70px; height: 70px;" src="<?php echo e(asset($orchard->picture1)); ?>" alt="" /> 
													<span class="product-title"><?php echo e($orchard->nameOrchard); ?></span>
												</a>
												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;<?php echo e($orchard->province->provinceName); ?></span>
											</li>
											
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>