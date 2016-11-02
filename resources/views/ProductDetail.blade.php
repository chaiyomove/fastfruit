@extends('layouts/master')
@section('content')

 <link rel="stylesheet" href="{{asset('css/main.css')}}">

<script >
	function clickstar() {
		document.getElementById('bookmark').id = "after_bookmark";
	};

</script>

{{-- bookmark --}}
<script>
	jQuery(function ($) {
		$('#bookmark').on('click', function () {
			@if (Auth::user())
				var $el = $(this),
				textNode = this.lastChild;
				$el.find('i').toggleClass('fa-star fa-star-o');
				textNode.nodeValue = ($el.hasClass('bookmark') ? '' : '')
				$el.toggleClass('bookmark');

				if (!$el.hasClass('bookmark')){
					$.get('{{url('api/user')}}/{{Auth::user()->id}}/bookmark/{{$product->idProductSprint}}', function(data){ 
	        		// alert(data);
	        		});	
				} else {
					$.get('{{url('api/user')}}/{{Auth::user()->id}}/unbookmark/{{$product->idProductSprint}}', function(data){ 
	        		// alert(data);
	        		});
				}
			@endif

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
														<img style="width: 100%; height: 100%" src="{{ asset($product->picture1) }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="{{ asset($product->picture2) }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="{{ asset($product->picture3) }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 100%; height: 100%" src="{{ asset($product->picture4) }}" alt="" />
													</div>
												</div>
												<div class="owl-carousel sync2">
													<div class="item">
														<img src="{{ asset($product->picture1) }}" alt="" />
													</div>
													<div class="item">
														<img src="{{ asset($product->picture2) }}" alt="" />
													</div>
													<div class="item">
														<img src="{{ asset($product->picture3) }}" alt="" />
													</div>
													<div class="item">
														<img src="{{ asset($product->picture4) }}" alt="" />
													</div>
												</div>
											</div>
										</div>
										<div class="summary entry-summary">
											<h1 class="product_title entry-title border_bottom">{{array_get($product->fruitSpeciess,'specieName')}} จาก {{$product->orchardPlot->orchard->nameOrchard}}</h1>
											<div class="product_meta">
												<table class="detail">
													<tr>
														<td>จำนวน:</td>
														<td>{{$product->fruitNum}}&nbsp;กิโลกรัม</td>
													</tr>
													<tr>
														<td>ติดต่อผู้ขาย:</td>
														<td>{{$product->orchardPlot->orchard->phone}}</td>
													</tr>
													<tr>
														<td>ตั้งแต่วันที่:</td>
														<td>{{$product->startDate}}</td>
													</tr>
													<tr>
														<td>ถึงวันที่:</td>
														<td>{{$product->endDate}}</td>
													</tr>
												</table>
											</div>

											<div>
												<a href="{{url('orchards',[$product->orchardPlot->orchard->idOrchard])}}">
												<button type="button" class="single_add_to_cart_button button">
													<i class="fa fa-eye">&nbsp;</i>ชมสวน
												</button>
												</a>
												<a href="{{url('plot',[$product->orchardPlot->idOrchardPlot])}}">
												<button type="button" class="single_add_to_cart_button plot">
													<i class="fa fa-eye">&nbsp;</i>ดูแปลง
												</button>
												</a>

												{{-- <a href="#" class="fa fa-star" id="bookmark"></a> --}}

												@if (Auth::user())
													<?php $i = 0 ?>
													@foreach (Auth::user()->userBookmarks as $key => $bookmark)
														@if ($bookmark->idProductSprint == $product->idProductSprint && $i==0)
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
										                @endif
										            @endforeach
											        @if ($i==0) 
										                <button type="button" class="single_add_to_cart_button button bookmark" id="bookmark"> 
															<i class="fa fa-star-o fa-lg"> </i>						    
														</button>
												 	@endif
												@endif
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
									    		<a data-toggle="tab" href="#tab-2">รีวิว</a>
									    	</li>
									  	</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<p>{{$product->description}}</p>
											</div>
										{{-- 	<div id="tab-2" class="tab-pane fade">
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
									<h2>ผลผลิตที่คล้ายกัน</h2>
									
										<div class="products row product-grid">
											<div class="masonry-item noo-product-column col-md-3 col-sm-6 product">
												<div class="noo-product-inner">
													<div class="noo-product-thumbnail">
														<a href="{{url('product', [$product->idProductSprint])}}">
															<img style="width: 260px; height: 160px;"  src="{{asset($product->picture1)}}" alt="" />
														</a>
														<!-- <div class="noo-rating">
															<div class="star-rating">
																<span style="width:0%"></span>
															</div>
														</div> -->
													</div>
													<div class="noo-product-title"> 
														<h3><a href="{{url('product', [$product->idProductSprint])}}">{{$product->orchardPlot->fruitSpecie->specieName}}จาก {{$product->orchardPlot->orchard->nameOrchard}}</a></h3>
														<span class="price"><span class="amount">จำนวนผลผลิต: {{$product->fruitNum}} กิโลกรัม</span></span>
														<p class="space">รอบการผลิต:{{$product->startDate}} ถึง {{$product->endDate}}</p>
														<span class="price"><span class="amount">
															จังหวัด
														</span></span>
														<div class="noo-product-action">
															<div class="noo-action">
																<a href="{{url('product', [$product->idProductSprint])}}" class="button product_type_simple info_circle_button">
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
										<ul class="product_list_widget">
											<li>
												<a href="{{url('product', [$product->idProductSprint])}}">
													<img style="width: 70px; height: 70px;" src="{{asset($product->picture1)}}" alt="" /> 
													<span class="product-title">{{$product->orchardPlot->fruitSpecie->specieName}}จาก {{$product->orchardPlot->orchard->nameOrchard}}</span>
												</a>
												<span class="amount">จังหวัด</span>
											</li>
											
											
											
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection