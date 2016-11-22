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
		$( document ).ready(){
			$('a[href=mapclient*="maps.google.com")]').live('load', function (e) {
		    	e.preventDefault();
		    	console.log(e.href.val());
		    });
		};
	    
	});
</script>

<link rel="stylesheet" href="{{asset('css/main.css')}}">
			<section class="noo-page-orchard eff">
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

														@foreach($orchard->users as $key => $admin)
														<td>ผู้ดูแล:</td>
														<td><a href="{{url('profile/'.$admin->id)}}">{{$admin->firstName}}</a></td>
														@endforeach
													</tr>
													<tr>
														<td>ติดต่อผู้ขาย:</td>
														<td>{{$orchard->phone}}</td>
													</tr>
												</table>
											</div>
											
											<div>
											@if (Auth::check())
												<?php $i = 0?>
												@foreach (Auth::user()->orchardFollowing as $key => $followedOrchard)
													@if ($followedOrchard->idOrchard == $orchard->idOrchard && $i==0)
														<button type="button" class="single_add_to_cart_button button" id="follow">
															<i class="fa fa-check">&nbsp;</i>กำลังติดตาม
														</button>
														<?php $i++; ?>
									                @endif
									            @endforeach

									            @if ($orchard->user->first()->id == Auth::user()->id)
													<a href="{{url('orchard/' . $orchard->idOrchard . '/edit')}}">
														<button type="button" class="single_add_to_cart_button button editProfile">
															<i class="fa fa-cog">&nbsp;</i>แก้ไขสวน
														</button>
													</a>
													<a href="{{url('plot/' .$orchard->idOrchard. '/create')}}">
														<button type="button" class="single_add_to_cart_button plot">
														<i class="fa fa-eye">&nbsp;</i>เพิ่มแปลง
														</button>
													</a>
												@else
													@if ($i==0) 
														<button type="button" class="single_add_to_cart_button button follow" id="follow">
															<i class="fa fa-plus">&nbsp;</i>ติดตาม
														</button>
													@endif
												@endif
											@endif
												 
										</div>

										<div class="clear"></div>
											
										</div> 
									</div>
									<div class="commerce-tabs">
										<ul class="nav nav-tabs tabs">
									    	<li class="active">
									    		<a data-toggle="tab" href="#tab-2">ผลผลิต</a>
									    	</li>
									  	</ul>
										<div class="tab-content">
											<div id="tab-2" class="tab-pane fade in active">
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
													@if ($products->first()!=NULL)
														@foreach ($products as $key => $product)
															<li>
																<a href="{{url('product', [$product->idProductSprint])}}">
																	<img style="width: 70px; height: 70px;" src="{{asset($product->picture1)}}" alt="" /> 
																	<span class="product-title">{{$product->orchardPlot->fruitSpecie->specieName}}</span>
																</a>
																<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$product->orchardPlot->province->provinceName}}</span>
															</li>
														@endforeach
													@endif
													</ul>
												</div>
											</div>
											
										</div>
									</div>
									<div class="commerce-tabs">
										<ul class="nav nav-tabs tabs">
									    	<li class="active">
									    		<a data-toggle="tab" href="#tab-1">รายละเอียด</a>
									    	</li>
									    	<!-- <li>
									    		<a data-toggle="tab" href="#tab-2">ดูผลผลิต</a>
									    	</li> -->
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
											<div id="tab-4" class="tab-pane fade" style = "display:none;">
											</div>
											<div id="tab-5" class="tab-pane fade">
												<div id="comments" class="comments-area">
						                        	<h2 class="comments-title">ความคิดเห็นจากลูกค้า ทั้งหมด {{$reviews->count()}} ความคิดเห็น</h2>
						                        	<ol class="comments-list">
									        			<li class="comment">
						            						<div class="comment-wrap">
						                						@foreach($reviews as $review)
						                						<div class="comment-img">
						                    						<img alt='' src='{{asset(($review->idUser!=0?$review->user->userPicture:'images/avatar/avatar_review.png'))}}' height='80' width='80' />
						                    					</div>
						                    					

						                						<article class="comment-block">
						                    						<header class="comment-header">
						                        						<cite class="comment-author">
						                        							<p>{{$review->name}}</p>
						                        						</cite>
												                       
						                                            </header>
						                    						<div class="comment-content">
						                        						<p>{{$review->review}}</p>
						                    						</div>
						                    						
						                						</article>
						                						@endforeach
						            						</div>
						        							
													<div id="respond-wrap">
						        						<div id="respond" class="comment-respond">
															<h3 id="reply-title" class="comment-reply-title">
																<span>แสดงความคิดเห็นของคุณ</span>
															</h3>
															<form class="comment-form" method="POST" enctype="multipart/form-data" action="{{url('/review',[$orchard->idOrchard])}}">
															{{ csrf_field() }}
																<div class="row">
																 	@if (!Auth::check())
																 		<div class="comment-form-author col-sm-6">
																 			<input id="name" name="name" type="text" placeholder="ชื่อของคุณ" class="form-control" value="" size="30" />
																 		</div>
																 		<div class="comment-form-email col-sm-6">
																 			<input id="email" name="email" type="text" placeholder="กรุณากรอกอีเมล์" class="form-control" value="" size="30" />
																 		</div>
																 	@endif
																	<div class="col-sm-12">
																		<div class="comment-form-comment">
																			<textarea class="form-control" placeholder="เนื้อหาของรีวิว" id="review" name="review" cols="40" rows="6"></textarea>
																		</div>
																	</div>
																</div>
																<div class="form-submit">
																	<input name="submit" type="submit" id="submit" class="submit" value="ส่งรีวิว" />
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
														var pos = {lat: 13.755243, lng: 100.495771 };												 
												        
												        var myOptions = {
												            zoom: 8,
												            center: pos,
												            mapTypeId: google.maps.MapTypeId.ROADMAP
												        };
												        
												        var map = new google.maps.Map(document.getElementById("map"), myOptions);
												        

													    @if ($orchard->lat == NULL || $orchard->lng == NULL)
												    		// Bubble
												    		var infoWindow = new google.maps.InfoWindow({
												    			map: map,
												    			position: pos,
												    			content: "ไม่ทราบตำแหน่งของสวน"
												    		});



												        @else
												        	var pos = {lat: {{$orchard->lat}}, lng: {{$orchard->lng}} };
												        	map.setCenter(pos);
												        	
										                    var marker = new google.maps.Marker({
													         	position: pos,
													          	map: map
														    });

												    	@endif

												        console.dir(map);
												        console.log(map.zoom);

												        $('#tab-6').append('<a target="_blank" href="https://maps.google.com/maps?q='+pos.lat+','+pos.lng+'&ll='+pos.lat+','+pos.lng+'&z='+map.zoom+'">คลิกเพื่อดูพื้นที่นี้ใน Google Maps </a>').css("text-align","center");


												        $('a[href="#tab-4"]').on('click', function(e) {
												            $("#tab-6").show();
												            google.maps.event.trigger(map, 'resize');
												            map.setCenter(pos);
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
										@foreach($popOrchards as $key => $popOrchard)
										<ul class="product_list_widget">
											<li>
												<a href="{{url('orchards/'.$popOrchard->idOrchard)}}">
													<img style="width: 70px; height: 70px;" src="{{asset($popOrchard->picture1)}}" alt="" /> 
													<span class="product-title">{{$popOrchard->nameOrchard}}</span>
												</a>
												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$popOrchard->province->provinceName}}</span>
											</li>
											
										</ul>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWKPwTquIvNcVchkVTbdougmPk9xbOt38&callback=initMap&language=th" async defer>
@endsection			