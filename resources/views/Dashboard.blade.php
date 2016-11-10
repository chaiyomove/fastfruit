@extends('layouts/master')
@section('content')
			<section class="noo-page-dashboard eff">
				<div class="container">
					<div class="noo-heading-content">
						<img src="{{asset($user->userPicture)}}" width="15%" height="10%" style="border-radius: 50%;" />
						<p style="font-size: x-large;">{{$user->firstName}}&nbsp;{{Auth::user()->lastName}}</p>
						<p style="font-size: medium; ">{{$user->address}}</p>
						<p style="font-size: medium; ">{{$user->province->provinceName}}</p>

						<div class="commerce single-product" style="padding-top: 20px;">
							<button type="button" class="single_add_to_cart_button button follow" id="follow">
								<i class="fa fa-plus">&nbsp;</i>ติดตาม
							</button>
							<!-- <button type="button" class="single_add_to_cart_button button chat">
								<i class="fa fa-comments">&nbsp;</i>แชท
							</button> -->
							<a href="{{url('user/' . Auth::user()->id . '/edit')}}">
							<button type="button" class="single_add_to_cart_button button editProfile">
								<i class="fa fa-cog">&nbsp;</i>แก้ไขโปรไฟล์
							</button>
							</a>
						</div>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce single-product noo-shop-main" style="padding-top: 0px;">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-1"></div>
							<div class="noo-main col-md-10">
								<div class="product">
									<div class="commerce-tabs">
										<ul class="nav nav-tabs tabs">
									    	<!-- <li class="active">
									    		<a data-toggle="tab" href="#tab-1">สถิติ</a>
									    	</li> -->
									    	<li class="active">
									    		<a data-toggle="tab" href="#tab-2">ติดตาม</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-3">ติดดาว</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-4">สวนของฉัน</a>
									    	</li>
									  	</ul>
										<div class="tab-content">
											<!-- <div class="tab-pane fade in active" id="tab-1">
												<table class="" style="width:100%">
													<tbody>
														<tr>
															<th style="width:37%;">
																<p>อันดับ</p>
															</th>
															<th>
																<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
																	<p class="">สวน</p>
																</div>
																<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																	<p class="">ร้อยละ</p>
																</div>
															</th>
														</tr>
														<tr>
															<td>
																<iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
																<canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
															</td>
															<td>
																<table class="tile_info">
																	<tbody>
																		<tr>
																			<td>
																				<p><i class="fa fa-square blue"></i>สวนเบ็ญจวรรณ์ </p>
																			</td>
																			<td>30%</td>
																		</tr>
																		<tr>
																			<td>
																				<p><i class="fa fa-square green"></i>สวนกุลภัสร์ </p>
																			</td>
																			<td>10%</td>
																		</tr>
																		<tr>
																			<td>
																				<p><i class="fa fa-square purple"></i>สวนพุดทรัพย์ </p>
																			</td>
																			<td>20%</td>
																		</tr>
																		<tr>
																			<td>
																				<p><i class="fa fa-square aero"></i>สวนสิริจรรยา </p>
																			</td>
																			<td>15%</td>
																		</tr>
																		<tr>
																			<td>
																				<p><i class="fa fa-square red"></i>สวนรุจิระธราพันธุ์ </p>
																			</td>
																			<td>30%</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</div> -->
											<div id="tab-2" class="tab-pane fade in active">
												<div class="widget commerce widget_products">
													<div class="masonry-filters">
														<ul class="noo-header-filter" data-option-key="filter">
															<li>
																<a data-option-value="*" href="#all" class="selected">
																	<span>ทั้งหมด</span>
																</a>
															</li>
															<li>
																<a data-option-value=".organic-fruits" href="#organic-fruits">
																	<span>สวน</span>
																</a>
															</li>
															<li>
																<a data-option-value=".vegetable" href="#vegetable">
																	<span>คน</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="commerce widget_products" style="width: 50%">
													<ul class="product_list_widget">
														
														{{-- <li>
															<a href="{{url('product', [$product->idProductSprint])}}">
																<img src="images/product/product_1.jpg" alt="" style="border-radius: 50%; width: 20%" /> 
																<span class="product-title">สวนสุเมธ</span>
															</a>
															<span class="product-title" style="margin-bottom: 15px; color: rgb(206, 74, 74);">รายละเอียด</span>
															<div class="commerce single-product" style="padding-top: 20px;">
																<button type="button" class="single_add_to_cart_button button followD" id="follow">
																	<i class="fa fa-check">&nbsp;</i>กำลังติดตาม
																</button>
															</div>
														</li> --}}
														
													</ul>
												</div>
											</div>
											<div id="tab-3" class="tab-pane fade">
												<div class="widget commerce widget_products">
													<div class="masonry-filters">
														<ul class="noo-header-filter" data-option-key="filter">
															<li>
																<a data-option-value="*" href="#all" class="selected">
																	<span>ทั้งหมด</span>
																</a>
															</li>
															<li>
																<a data-option-value=".organic-fruits" href="#organic-fruits">
																	<span>สวน</span>
																</a>
															</li>
															<li>
																<a data-option-value=".vegetable" href="#vegetable">
																	<span>คน</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="commerce widget_products" style="width: 50%">
													<ul class="product_list_widget">
														
														
														
													</ul>
												</div>
											</div>
											<div id="tab-4" class="tab-pane fade">
												
											</div>
										</div>
								</div>
							</div>
							<div class="noo-main col-md-1"></div>
						</div>
					</div>
				</div>
			</div>
@endsection