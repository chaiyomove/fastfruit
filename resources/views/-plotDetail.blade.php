@extends('layouts/master')
@section('content')

<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 1000,
			namespace: "callbacks",
			pager:true,
		  });
		});
	</script>
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
<script src="{{ asset('js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >


			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3>ข้อมูลแปลง</h3>
					<div id="owl-demo" class="owl-carousel">
						<div class="item">		
							<div style="width: 55%; margin: auto; float: left;">
								<div class="carousel slide" id="carousel-824332" 	>
									<ol class="carousel-indicators" >
										<li class="active" data-slide-to="0" data-target="#carousel-824332">
										</li>

										@if (!str_contains($plot->picture2, "no11"))
											<li data-slide-to="1" data-target="#carousel-824332">
											</li>
										@endif
										@if (!str_contains($plot->picture3, "no11"))
											<li data-slide-to="2" data-target="#carousel-824332">
											</li>
										@endif

									</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="{{ asset($plot->picture1) }}" style="height: 300px; width: 850px;" />
									</div>

									@if (!str_contains($plot->picture2, "no11"))
										<div class="item">
										<img src="{{ asset($plot->picture2) }}" style="height: 300px; width: 850px;" />			
									</div>
									@endif

									@if (!str_contains($plot->picture3, "no11"))
										<div class="item">
										<img src="{{ asset($plot->picture3) }}" style="height: 300px; width: 850px;" />
									</div>
									@endif
									
								</div> 
								<a class="left carousel-control" href="#carousel-824332" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-824332" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
							<div style="margin-top: 15px">
							<table>
								<tr>
								

									<!--<td>
										<button type="button" class="btn btn-info btn-sm"> 
											<h5>
											<i class="glyphicon glyphicon-user"> </i>
											<i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท
											</h5>
							            </button>
									</td>-->
									<td>
										<a href="{{url('orchards',[$plot->orchard->idOrchard])}}">        
											<button type="submit" class="btn btn-danger btn-sm">
												<h5>
												<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
												</h5>
											</button>														
										</a>
									</td>
									<td>
								        <button type="button" class="btn btn-warning btn-sm"> 
								            <h5>
									        <i class="glyphicon glyphicon-star"> </i>
									        </h5>
				                        </button>
								    </td>
							
								</tr>
								<tr>
									<td>
										<a href="{{url('products',[$plot->idOrchardPlot])}}">
											<button type="button" class="btn btn-info btn-sm" style="margin-top: 10px"> 
												<h5>
												<i class="glyphicon glyphicon-eye-open">&nbsp;ผลผลิต</i>
												</h5>
							                </button>														
										</a>
									</td>
									@foreach ($plot->orchard->admins as $admin)
										@if ($admin->user == Auth::user())
											<td>
												<a href="{{url('product/' .$plot->idOrchardPlot. '/create')}}">
													<button type="button" class="btn btn-primary btn-sm" style="margin-top: 10px"> 
													    <i class="glyphicon glyphicon-plus">&nbsp;</i>
													    เพิ่มผลผลิต
								                    </button>
							                    </a>
											</td>		
										@endif
									@endforeach					
														
								</tr>
							</table>
								
					            
							</div>
						</div>

								<!--Gentelela_table-->
									<div class="col-md-12 col-sm-12 col-xs-12" style="width: 45%; margin: auto; float: right;">
						                <div class="x_panel">
						                  <div class="x_title">
						                    <h4>{{-- {{$product->orchardPlot->fruitSpecie->specieName}} --}}
											{{array_get($plot->fruitSpeciess,'specieName')}} จาก {{$plot->orchard->nameOrchard}}</h4>
						                    
						                    <div class="clearfix"></div>
						                  </div>
						                  <div class="x_content" style="font-size: 16px">

						                    <table class="table table-striped">
						                      <tbody>

						                      	<tr>
						                          <th scope="row" width="40%">รหัสแปลง</th>
						                          <td colspan="2" align="left">{{$plot->plotNumber}}	</td>
						                          <td></td>
						                        </tr>

						                        <tr>
						                          <th scope="row" width="40%">รายละเอียด</th>
						                          <td colspan="2" align="left">{{$plot->description}}	</td>
						                          <td></td>
						                        </tr>
						                    
						                         <tr>
						                          <th scope="row" width="40%">พื่นที่</th>
						                          <td colspan="2" align="left">{{$plot->area}}</td>
						                          <td></td>
						                        </tr>

						                        <tr>
						                          <th scope="row" width="40%">ที่อยู่แปลง</th>
						                          <td colspan="2" align="left">{{$plot->address}}</td>
						                          <td></td>
						                        </tr>

						                        <tr>
						                          <th scope="row" width="40%">จังหวัด</th>
						                          <td colspan="2" align="left">{{$plot->idProvince!=0?$plot->province->provinceName:$plot->orchard->province->provinceName}}</td>
						                          <td></td>
						                        </tr>

						                        <tr>
						                          <th scope="row" width="40%">จำนวนที่ขายได้</th>
						                          <td colspan="2" align="left">{{$plot->salesVolume}}</td>
						                          <td></td>
						                        </tr>

						                         <tr>
						                          <th scope="row" width="40%">สถานะการรับรอง</th>
						                          <td colspan="2" align="left">{{$plot->plotStatus->status}}</td>
						                          <td></td>
						                        </tr>

						                      

						                       

						                        <tr>
						                        	

								                    <td>
								                    	@if ($plot->idPlotStatus == 1)
								                    		<img src="../images/gap.png" style="float:right;height:48px;width:50px">
								                    	@endif
								                    </td>
								                    
								                </tr>
						                      </tbody>
						                    </table>

						                  </div>
						                </div>
						              </div>


								
									
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>

			<!--profile-->
			
@endsection