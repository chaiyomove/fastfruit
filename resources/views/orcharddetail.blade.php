@extends('layouts/master')
@section('content')

{{-- Follow --}}
<script>
	jQuery(function ($) {
		$('#follow').on('click', function () {
			var $el = $(this),
			textNode = this.lastChild;
			$el.find('i').toggleClass('fa fa-check fa fa-plus');
			textNode.nodeValue = ($el.hasClass('follow') ? 'กำลังติดตาม' : 'ติดตาม')
			$el.toggleClass('follow');

	        //ajax
	        @if (Auth::user())
	        if (!$el.hasClass('follow')){
	        	$.get('{{url('api/user')}}/{{Auth::user()->id}}/followorchard/{{$orchard->idOrchard}}', function(data){ 
	        		// alert(data);
	        	});	
	        } else {
	        	$.get('{{url('api/user')}}/{{Auth::user()->id}}/unfolloworchard/{{$orchard->idOrchard}}', function(data){ 
	        		// alert(data);
	        	});
	        }
	        @endif
	        
	    });
	});
</script>

<link rel="stylesheet" href="{{asset('css/main.css')}}">
			<section class="noo-page-heading eff heading-3">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">ข้อมูลสวน</h1>
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
														<img style="width: 400px; height: 265px" src="{{ asset($orchard->picture1)}}" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="{{ asset($orchard->picture2)}}" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="{{ asset($orchard->picture3)}}" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="{{ asset($orchard->picture4)}}" alt="" />
													</div>
												</div>
												<div class="owl-carousel sync2">
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset($orchard->picture1)}}" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset($orchard->picture2)}}" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset($orchard->picture3)}}" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset($orchard->picture4)}}" alt="" />
													</div>
												</div>
											</div>
										</div>
										<div class="summary entry-summary">
											<h1 class="product_title entry-title border_bottom">{{$orchard->nameOrchard}}</h1>
											<div class="product_meta">
												<table class="detail">
													<tr>
														<td>ที่อยู่:</td>
														<td>{{$orchard->address}}</td>
													</tr>
													<tr>
														<td>จังหวัด:</td>
														<td>{{$orchard->province->provinceName}}</td>
													</tr>
													<tr>
														<td>พื้นที่:</td>
														<td>{{$orchard->area}}&nbsp;ไร่</td>
													</tr>
													<tr>
														<td>ติดต่อผู้ขาย:</td>
														<td>{{$orchard->phone}}</td>
													</tr>
												</table>
											</div>
											
											<div>
											@if (Auth::user())
												<?php $i = 0?>
												@foreach (Auth::user()->orchardFollowing as $key => $followedOrchard)
													@if ($followedOrchard->idOrchard == $orchard->idOrchard && $i==0)
													<!-- <button type="submit" class="single_add_to_cart_button button">
														<i class="fa fa-eye">&nbsp;</i>ดูผลผลิต
													</button>
													<button type="submit" class="single_add_to_cart_button plot">
														<i class="fa fa-eye">&nbsp;</i>ดูแปลง
													</button>
													<button type="submit" class="single_add_to_cart_button map">
														<i class="fa fa-globe">&nbsp;</i>แผนที่
													</button> -->
														<button type="button" class="single_add_to_cart_button button" id="follow">
															<i class="fa fa-check">&nbsp;</i>กำลังติดตาม
														</button>
													<?php $i++; ?>
									                @endif
									            @endforeach
									                @if ($i==0) 
													<button type="button" class="single_add_to_cart_button button follow" id="follow">
														<i class="fa fa-plus">&nbsp;</i>ติดตาม
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
									    		<a data-toggle="tab" href="#tab-2">ดูผลผลิต</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-3">ดูแปลง</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-4">แผนที่</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-5">รีวิว</a>
									    	</li>
									  	</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<p>{{$orchard->description}}</p>
											</div>
											<div id="tab-2" class="tab-pane fade">
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
														<li>
															<a href="{{'orchards/'.$orchard->idOrchard}}">
																<img style="width: 70px; height: 70px;" src="{{asset($orchard->picture1)}}" alt="" /> 
																<span class="product-title">{{$orchard->nameOrchard}}</span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
														</li>
														
													</ul>
												</div>
											</div>
											<div id="tab-3" class="tab-pane fade">
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
														<li>
															<a href="{{'orchards/'.$orchard->idOrchard}}">
																<img style="width: 70px; height: 70px;" src="{{asset($orchard->picture1)}}" alt="" /> 
																<span class="product-title">{{$orchard->nameOrchard}}</span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
														</li>
														
													</ul>
												</div>
											</div>
											<div id="tab-4" class="tab-pane fade" style = "display:none;">
											</div>
											<div id="tab-5" class="tab-pane fade">
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
											</div>
										</div>
										<div id="tab-6" class="tab-pane fade in active" style="display: none;">											
											<script>
												jQuery(function($) {
												    $(document).ready(function() {
												    	// var center = {lat: -25.363, lng: 131.044 };
												        var latlng = {lat: {{App\Orchards::find($orchard->idOrchard)->lat}}, lng: {{App\Orchards::find($orchard->idOrchard)->lng}} };
												        var myOptions = {
												            zoom: 8,
												            center: latlng,
												            mapTypeId: google.maps.MapTypeId.ROADMAP
												        };
												        
												        var map = new google.maps.Map(document.getElementById("map"), myOptions);
												        var marker = new google.maps.Marker({
													          position: latlng,
													          map: map
													        });

												        console.dir(map);

												        $('a[href="#tab-4"]').on('click', function(e) {
												            $("#tab-6").show();
												            google.maps.event.trigger(map, 'resize');
												            map.setCenter(latlng);
												        	$("#map").css("width", 500).css("height", 500);
												        });

												        $('a[href="#tab-1"],a[href="#tab-2"],a[href="#tab-3"],a[href="#tab-5"]').on('click', function(e) {
												        	$("#tab-6").hide();
												        });
												        
												    });
												});							     
										    </script>
										    
										    <div id="map"></div>
										    
										    
										</div>
									</div>
									<div class="related products">
									<h2>สวนที่คล้ายกัน</h2>
										<div class="products row product-grid">
											<div class="masonry-item noo-product-column col-md-3 col-sm-6 product">
												<div class="noo-product-inner">
													<div class="noo-product-thumbnail">
														<a href="{{'orchards/'.$orchard->idOrchard}}">
															<img style="width: 260px; height: 160px;" src="{{asset($orchard->picture1)}}"alt="" />
														</a>
														<!-- <div class="noo-rating">
															<div class="star-rating">
																<span style="width:0%"></span>
															</div>
														</div> -->
													</div>
													<div class="noo-product-title"> 
														<h3><a href="{{'orchards/'.$orchard->idOrchard}}">{{$orchard->nameOrchard}}</a></h3>
														<?php $speciesTmp = array(); ?>
												@foreach ($orchard->orchardPlots as $plotKey => $orchardPlot)
													@if (!array_has($speciesTmp, $orchardPlot->fruitSpecie->specieName))
														<?php $speciesTmp[] =  $orchardPlot->fruitSpecie->specieName; ?>
														@if($plotKey==0)
															
															<p class="space"><i class="fa fa-lemon-o" style="color: green; margin-top: 10px;"></i>&nbsp;{{$orchardPlot->fruitSpecie->specieName}}
														@elseif(count($orchard->orchardPlot)===$plotKey+1)
															{{$orchardPlot->fruitSpecie->specieName}}
															
														@else
														, {{$orchardPlot->fruitSpecie->specieName}}
															
														@endif	
													@endif
													
												@endforeach
															</p>

												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
														<div class="noo-product-action">
															<div class="noo-action">
																<a href="{{'orchards/'.$orchard->idOrchard}}" class="button product_type_simple eye_button">
																	<span>ชมสวน</span>
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
										<h3 class="widget-title">สวนยอดนิยม</h3>
										<ul class="product_list_widget">
											<li>
												<a href="{{'orchards/'.$orchard->idOrchard}}">
													<img style="width: 70px; height: 70px;" src="{{asset($orchard->picture1)}}" alt="" /> 
													<span class="product-title">{{$orchard->nameOrchard}}</span>
												</a>
												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWKPwTquIvNcVchkVTbdougmPk9xbOt38&callback=initMap&language=th" async defer>
@endsection			