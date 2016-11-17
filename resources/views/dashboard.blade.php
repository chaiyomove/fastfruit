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
	        	$.get('{{url('api/user')}}/{{Auth::user()->id}}/followuser/{{$user->id}}', function(data){ 
	        		// alert(data);
	        	});	
	        } else {
	        	$.get('{{url('api/user')}}/{{Auth::user()->id}}/unfollowuser/{{$user->id}}', function(data){ 
	        		// alert(data);
	        	});
	        }
	        @endif
	        
	    });
	});
</script>

			<section class="noo-page-dashboard eff">
				<div class="container">
					<div class="noo-heading-content">
						<div class="profileImg">
							<img src="{{asset($user->userPicture)}}" id="resizeimg"/>
						</div>
						<p style="font-size: x-large;">{{$user->firstName}}&nbsp;{{Auth::user()->lastName}}</p>
						<p style="font-size: medium; ">{{$user->address}}</p>
						<p style="font-size: medium; ">{{$user->province->provinceName}}</p>

						<div class="commerce single-product" style="padding-top: 20px;">
							@if (Auth::user())
								<?php $i = 0?>
								@foreach (Auth::user()->Followings as $key => $followedUser)
									@if ($followedUser->id == $user->id && $i==0)
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
									    	
									    	<li class="active">
									    		<a data-toggle="tab" href="#tab-1">ติดตามสวน</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-2">ติดตามคน</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-3">ติดดาว</a>
									    	</li>
									    	<li>
									    		<a data-toggle="tab" href="#tab-4">สวนของฉัน</a>
									    	</li>
									  	</ul>
										<div class="tab-content">
											<div id="tab-1" class="tab-pane fade in active">
												
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
													@foreach ($followorchards as $key => $orchard)
													
														<li>

															<a href="{{'orchards/'.$orchard->idOrchard}}">
																<img style="width: 70px; height: 70px;" src="{{asset($orchard->picture1)}}" alt="" /> 
																<span class="product-title">{{$orchard->nameOrchard}}</span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
														</li>
													@endforeach
													</ul>
												</div>
											</div>
											<div id="tab-2" class="tab-pane fade">
												
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>

													<ul class="product_list_widget">
													@foreach ($followusers as $key => $user)
													
														<li>

															<a href="">
																<img style="width: 70px; height: 70px;" src="{{asset($user->userPicture)}}" alt="" /> 
																<span class="product-title">{{$user->firstName}}&nbsp;{{$user->lastName}}</span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$user->province->provinceName}}</span>
														</li>
													@endforeach
													</ul>
												</div>
											</div>
											<div id="tab-3" class="tab-pane fade">
												
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
													@foreach ($bookmarks as $key => $product)
													
														<li>

															<a href="{{'products/'.$product->idProductSprint}}">
																<img style="width: 70px; height: 70px;" src="{{asset($product->picture1)}}" alt="" /> 
																<span class="product-title">{{array_get($product->fruitSpeciess,'specieName')}}จาก {{$product->orchardPlot->orchard->nameOrchard}}</span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$product->orchardPlot->province->provinceName}}</span>
														</li>
													@endforeach
													</ul>
												</div>
											</div>
											<div id="tab-4" class="tab-pane fade">
												<div class="widget commerce widget_products">
													<h3 class="widget-title"></h3>
													<ul class="product_list_widget">
													@foreach ($orchards as $key => $orchard)
													
														<li>

															<a href="{{'orchards/'.$orchard->idOrchard}}">
																<img style="width: 70px; height: 70px;" src="{{asset($orchard->picture1)}}" alt="" /> 
																<span class="product-title">{{$orchard->nameOrchard}}</span>
															</a>
															<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;{{$orchard->province->provinceName}}</span>
														</li>
													@endforeach
													</ul>
												</div>
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