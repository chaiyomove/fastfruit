@extends('layouts/master')
@section('content')
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
														<img style="width: 100%; height: 100%" src="{{ asset($plot->picture1) }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="{{ asset($plot->picture2) }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="{{ asset($plot->picture3) }}" alt="" />
													</div>
													{{-- <div class="item">
														<img style="width: 100%; height: 100%" src="{{ asset($plot->picture4) }}" alt="" />
													</div> --}}
												</div>
												<div class="owl-carousel sync2">
													<div class="item">
														<img src="{{ asset($plot->picture1) }}" alt="" />
													</div>
													<div class="item">
														<img src="{{ asset($plot->picture2) }}" alt="" />
													</div>
													<div class="item">
														<img src="{{ asset($plot->picture3) }}" alt="" />
													</div>
													{{-- <div class="item">
														<img src="{{ asset($plot->picture4) }}" alt="" />
													</div> --}}
												</div>
											</div>
										</div>
										<div class="summary entry-summary">
											<h1 class="product_title entry-title border_bottom">
											{{array_get($plot->fruitSpeciess,'specieName')}} จาก {{$plot->orchard->nameOrchard}}</h1>
											<div class="product_meta">
												<table class="detail">
													<tr>
														<td>รหัสแปลง:</td>
														<td>{{$plot->plotNumber}}</td>
													</tr>
													<tr>
														<td>พื้นที่:</td>
														<td>{{$plot->area}}</td>
													</tr>
													<tr>
														<td>ที่อยู่แปลง:</td>
														<td>{{$plot->address}}</td>
													</tr>
													<tr>
														<td>จังหวัด:</td>
														<td>{{$plot->idProvince!=0?$plot->province->provinceName:$plot->orchard->province->provinceName}}</td>
													</tr>
													<tr>
														<td>จำนวนที่ขายได้:</td>
														<td>{{$plot->salesVolume}}</td>
													</tr>
													<tr>
														<td>สถานะการรับรอง:</td>
														<td>{{$plot->plotStatus->status}}</td>
													</tr>
												</table>
											</div>
											
											<div>
											<a href="{{url('orchards',[$plot->orchard->idOrchard])}}"> 
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
									    	{{-- <li>
									    		<a data-toggle="tab" href="#tab-5">รีวิว</a>
									    	</li> --}}
									  	</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<p>{{$plot->description}}</p>
											</div>
											<div id="tab-2" class="tab-pane fade">

											</div>
											{{-- <div id="tab-5" class="tab-pane fade">
												<div id="comments" class="comments-area">
						                        	<h2 class="comments-title">2 Comments</h2>
						                        	<ol class="comments-list">
									        			<li class="comment">
						            						<div class="comment-wrap">
						                						<div class="comment-img">
						                    						<img alt='' src='http://placehold.it/100x100' height='80' width='80' />
						                    					</div>
						                						<article class="comment-block">
						                    						<header class="comment-header">
						                        						<cite class="comment-author">
						                        							admin
						                        						</cite>
												                        <div class="comment-meta">
												                            <span class="time">
												                                4 months ago
												                            </span>
												                        </div>
						                                            </header>
						                    						<div class="comment-content">
						                        						<p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
						                    						</div>
						                    						<span class="comment-reply">
						                        						<a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
						                        					</span>
						                						</article>
						            						</div>
						        							<ol class="children">
						        								<li class="comment">
						            								<div class="comment-wrap">
						                								<div class="comment-img">
						                    								<img alt='' src='http://placehold.it/100x100' height='80' width='80' />
						                    							</div>
						                								<article class="comment-block">
						                    								<header class="comment-header">
						                        								<cite class="comment-author">
						                        									admin
						                                                    	</cite>
														                        <div class="comment-meta">
														                            <span class="time">
														                                4 months ago
														                            </span>
														                        </div>
						                                            		</header>
														                    <div class="comment-content">
														                        <p>fSames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
														                    </div>
						                    								<span class="comment-reply">
								                        						<a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
								                        					</span>
						                								</article>
														            </div>
														        </li><!-- #comment-## -->
															</ol><!-- .children -->
														</li><!-- #comment-## -->
													</ol> <!-- /.comments-list -->
													<div id="respond-wrap">
						        						<div id="respond" class="comment-respond">
															<h3 id="reply-title" class="comment-reply-title">
																<span>Leave your thought</span>
															</h3>
															<form class="comment-form">
																<div class="row">
																	<div class="comment-form-author col-sm-6">
																		<input id="author" name="author" type="text" placeholder="Enter Your Name*" class="form-control" value="" size="30" />
																	</div>
																	<div class="comment-form-email col-sm-6">
																		<input id="email" name="email" type="text" placeholder="Enter Your Email*" class="form-control" value="" size="30" />
																	</div>
																	<div class="col-sm-12">
																		<div class="comment-form-comment">
																			<textarea class="form-control" placeholder="Enter Your Comment" id="comment" name="comment" cols="40" rows="6"></textarea>
																		</div>
																	</div>
																</div>
																<div class="form-submit">
																	<input name="submit" type="submit" id="submit" class="submit" value="Post Comments" />
																</div>
															</form>
														</div><!-- #respond -->
									    			</div>
						    					</div>
											</div> --}}
										</div>
									</div>
									<div class="related products">
									<h2>แปลงในสวนเดียวกัน</h2>
										<div class="products row product-grid">
											
											
											<div class="masonry-item noo-product-column col-md-3 col-sm-6 product">
												<div class="noo-product-inner">
													<div class="noo-product-thumbnail">
														<a href="{{url('plot', [$plot->idOrchardPlot])}}">
														
															<img width="600" height="760" src="{{asset($plot->picture1)}}" alt="" />
														</a>
														<!-- <div class="noo-rating">
															<div class="star-rating">
																<span style="width:20%"></span>
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
@endsection