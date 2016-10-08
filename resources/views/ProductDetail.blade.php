@extends('layouts/master')
@section('content')

<script src="js/responsiveslides.min.js"></script>
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
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
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
					<h3>ข้อมูลผลผลิต</h3>
					<div id="owl-demo" class="owl-carousel">
						<div class="item">		
							<div style="width: 55%; margin: auto; float: left;">
								<div class="carousel slide" id="carousel-824332" 	>
									<ol class="carousel-indicators" >
										<li class="active" data-slide-to="0" data-target="#carousel-824332">
										</li>
										<li data-slide-to="1" data-target="#carousel-824332">
										</li>
										<li data-slide-to="2" data-target="#carousel-824332">
										</li>
									</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img src="{{$product->picture}}" style="height: 300px; width: 850px;" />
									</div>
									<div class="item">
										<img src="{{$product->picture}}" style="height: 300px; width: 850px;" />										
									</div>
									<div class="item">
										<img src="{{$product->picture}}" style="height: 300px; width: 850px;" />
									</div>
								</div> 
								<a class="left carousel-control" href="#carousel-824332" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-824332" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
							<div style="margin-top: 15px">
							<table>
								<tr>
								<form method="GET" action="{{url('/orcharddetail')}}">
									{{ csrf_field() }}
						            <input type="hidden" name="idProductSprint" value="{{$product->idProductSprint}}">

									<td>
										<button type="button" class="btn btn-info btn-sm"> 
											<h5>
											<i class="glyphicon glyphicon-user"> </i>
											<i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท
											</h5>
							            </button>
									</td>
									<td>
										{{-- <a href="OrchardDetail-bf.html"> --}}
								                			
								            <input type="hidden" name="idOrchard" value="{{$product->orchardPlot->orchard->idOrchard}}">	
												<button type="submit" class="btn btn-danger btn-sm">
													<h5>
													<span class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</span>
													</h5>
												</button>														
										{{-- </a> --}}
									</td>
									<td>
								        <button type="button" class="btn btn-warning btn-sm"> 
								            <h5>
									        <i class="glyphicon glyphicon-star"> </i>
									        </h5>
				                        </button>
								    </td>
								</form>
								</tr>
							</table>
								
					            
							</div>
						</div>

								<!--Gentelela_table-->
									<div class="col-md-12 col-sm-12 col-xs-12" style="width: 45%; margin: auto; float: right;">
						                <div class="x_panel">
						                  <div class="x_title">
						                    <h4>{{$product->orchardPlot->fruitSpecie->specieName}} จาก {{$product->orchardPlot->orchard->nameOrchard}}</h4>
						                    
						                    <div class="clearfix"></div>
						                  </div>
						                  <div class="x_content" style="font-size: 16px">

						                    <table class="table table-striped">
						                      <tbody>
						                        <tr>
						                          <th scope="row" width="40%">รายละเอียด</th>
						                          <td colspan="2" align="left">{{$product->description}}	</td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">จำนวน</th>
						                          <td align="left" width="5%">{{$product->fruitNum}}</td>
						                          <td align="left">กิโลกรัม</td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">ติดต่อผู้ขาย</th>
						                          <td colspan="2" align="left">{{$product->orchardPlot->orchard->phone}}</td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">ตั้งแต่วันที่</th>
						                          <td colspan="2" align="left">{{$product->startDate}}</td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                          <th scope="row" width="40%">ถึงวันที่</th>
						                          <td colspan="2" align="left" padding="20px">{{$product->endDate}}</td>
						                          <td></td>
						                        </tr>
						                        <tr>
						                        	<form method="GET" action="{{url('/orcharddetail')}}">
													{{ csrf_field() }}
						                       		<input type="hidden" name="idProductSprint" value="{{$product->idProductSprint}}">

								                    <td>
								                    	@if ($product->orchardPlot->idPlotStatus == 1)
								                    		<img src="../images/gap.png" style="float:right;height:48px;width:50px">
								                    	@endif
								                    </td>
								                    </form>
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