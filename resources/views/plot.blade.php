@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff heading-2">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">แปลงทั้งหมด</h1>
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
								
									{{-- <form class="commerce-ordering">
										<select name="orderby" class="orderby">
											<option value="" selected='selected'>เรียงตามค่าเริ่มต้น</option>
											<option value="">เรียงตามจังหวัด</option>
											<option value="">เรียงตามรอบการผลิต</option>
											<option value="">Sort by newness</option>
											<option value="">Sort by price: low to high</option>
										</select>
									</form> --}}
								</div>
								@foreach ($plots as $key => $plot)
								@if ($key%3 == 0)
								<div class="products row product-grid">
								@endif
									<div class="masonry-item noo-product-column col-md-4 col-sm-6 product">
										<div class="noo-product-inner">
											<div class="noo-product-thumbnail">
												<a href="{{url('plot', [$plot->idOrchardPlot])}}">
												@if ($key<=10)
													<img src="{{ asset('images/new.png') }}" style="position: absolute; margin-left: -5px; margin-top: -2px">
												@endif

												@if ($plot->idPlotStatus == 1)
													<img src="{{ asset('images/gap.png') }}" style="position: absolute; margin-left: 2px; margin-top: 115px">
												@endif
													<img width="600" height="760" src="{{asset($plot->picture1)}}" alt="" />
												</a>
												<!-- <div class="noo-rating">
													<div class="star-rating">
														<span style="width:0%"></span>
													</div>
												</div> -->
											</div>
											<div class="noo-product-title"> 
												<h3><a href="{{url('plot', [$plot->idOrchardPlot])}}">{{array_get($plot->fruitSpecies,'specieName')}}</a></h3>
												<span class="price">{{$plot->description}}</span>
												<div class="noo-product-action">
													<div class="noo-action">
														<a href="{{url('plot', [$plot->idOrchardPlot])}}" class="button product_type_simple info_circle_button">
															<span>ดูรายละเอียด</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								@if ((count($plots)===$key+1) || $key%3 == 2)		
								</div>
								@endif
							@endforeach	
								{{-- <div class="pagination list-center">
									<span class="page-numbers current">1</span>
									<a class="page-numbers" href="#">2</a>
									<a class="page-numbers" href="#">3</a>
									<a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a>
								</div> --}}
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
									<!-- <div class="widget commerce widget_price_filter">
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
										<h3 class="widget-title">ผลผลิตยอดนิยม</h3>
										<ul class="product_list_widget">
											<li>
												<a href="productDetail.html">
													<img width="100" height="100" src="images/product/product_8.jpg" alt="" /> 
													<span class="product-title">French Bread</span>
												</a>
												<span class="amount">&#36;10.00</span>
											</li>
											<li>
												<a href="productDetail.html">
													<img width="100" height="100" src="images/product/product_6.jpg" alt="" /> 
													<span class="product-title">Cookie</span>
												</a>
												<span class="amount">&#36;15.00</span>
											</li>
											<li>
												<a href="productDetail.html">
													<img width="100" height="100" src="images/product/product_3.jpg" alt="" /> 
													<span class="product-title">Brown Bread</span>
												</a>
												<span class="amount">&#36;12.00</span>
											</li>
											<li>
												<a href="productDetail.html">
													<img width="100" height="100" src="images/product/product_1.jpg" alt="" /> 
													<span class="product-title">Apples</span>
												</a>
												<span class="amount">&#36;3.95</span>
											</li>
											<li>
												<a href="productDetail.html">
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
@endsection