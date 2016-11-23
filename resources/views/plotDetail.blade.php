@extends('layouts/master')
@section('content')

 <link rel="stylesheet" href="{{asset('css/main.css')}}">

<script >
	function clickstar() {
		document.getElementById('bookmark').id = "after_bookmark";
	};

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
														<img style="width: 400px; height: 265px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 400px; height: 265px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
												</div>
												<div class="owl-carousel sync2">
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
													<div class="item">
														<img style="width: 90px; height: 60px" src="{{ asset('images/no11.png') }}" alt="" />
													</div>
												</div>
											</div>
										</div>
										<div class="summary entry-summary">
											
											<h1 class="product_title entry-title border_bottom">ไม่มีข้อมูล</h1>

											<div class="product_meta">
												<table class="detail">
													<tr>
														<td>จำนวน:</td>
														<td>ไม่มีข้อมูล</td>
													</tr>
													<tr>
														<td>ติดต่อผู้ขาย:</td>
														<td>ไม่มีข้อมูล</td>
													</tr>
													<tr>
														<td>ตั้งแต่วันที่:</td>
														<td>ไม่มีข้อมูล</td>
													</tr>
													<tr>
														<td>ถึงวันที่:</td>
														<td>ไม่มีข้อมูล</td>
													</tr>
													<tr>
														<td>สถานะการรับรอง:</td>
														<td>ไม่มีข้อมูล</td>
													</tr>
													<tr>
														<td>ผลผลิตของสวน:</td>
														<td>
															ไม่มีข้อมูล
														</td>
													</tr>
													

												</table>
											</div>

											<div>
												<a href="{{url('orchards',[$plot->orchard->idOrchard])}}">
													<button type="button" class="single_add_to_cart_button button">
														<i class="fa fa-eye">&nbsp;</i>ชมสวน
													</button>
												</a>
											</div>	
											<div>
												@if (Auth::check())
													 @if ($plot->orchard->user->first()->id == Auth::user()->id)
										            	<a href="{{url('plot/' . $plot->idOrchardPlot . '/edit')}}">
										            		<button type="button" class="single_add_to_cart_button button editProfile" style="margin-top: 5px">
										            			<i class="fa fa-cog">&nbsp;</i>แก้ไขแปลง
										            		</button>
										            	</a>
										            	<a href="{{url('product/' .$plot->idOrchardPlot. '/create')}}">
										            		<button type="button" class="single_add_to_cart_button plot">
										            		<i class="fa fa-eye">&nbsp;</i>เพิ่มผลผลิต
										            		</button>
										            	</a>
														
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
									    		<a data-toggle="tab" href="#tab-2">ประวัติการผลิต</a>
									    	</li>
									    	
									  	</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="tab-1">
												<p>ไม่มีข้อมูล</p>
											</div>
											<div id="tab-2" class="tab-pane fade">
												<div class="widget commerce widget_products">
													<p>ไม่มีข้อมูล</p>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="noo-sidebar col-md-3">
								<div class="noo-sidebar-wrap">
									<!-- <div class="widget commerce widget_product_search">
										<h3 class="widget-title">ค้นหา</h3>
										<form>
											<input type="search" class="search-field" placeholder="ค้นหาสวน&hellip;" value="" name="s"/>
											<input type="submit" value="Search"/>
										</form>
									</div> -->
									<div class="widget commerce widget_products">
										<h3 class="widget-title">ผลผลิตยอดนิยม</h3>
										@foreach($popProducts as $key => $popProduct)
										<ul class="product_list_widget">
											<li>
												<a href="{{url('product', [$popProduct->idProductSprint])}}">
													<img style="width: 70px; height: 70px;" src="{{asset($popProduct->picture1)}}" alt="" /> 
													<span class="product-title">{{$popProduct->orchardPlot->fruitSpecie->specieName}}จาก {{$popProduct->orchardPlot->orchard->nameOrchard}}</span>
												</a>
												<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;
														{{$popProduct->orchardPlot->province->provinceName}}
													</span>
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
@endsection