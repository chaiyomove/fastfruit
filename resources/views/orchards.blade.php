@extends('layouts/master')
@section('content')
		<section class="noo-page-orchard eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1  class="page-title eff">สวนทั้งหมด</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
								<div class="noo-catalog">
									<p class="commerce-result-count">แสดง {{$orchards->count()}} จากทั้งหมด {{App\Orchards::all()->count()}}</p>
								
									<form class="commerce-ordering">
										<select name="orderby" class="orderby">
											<option value="" selected='selected'>เรียงตามค่าเริ่มต้น</option>
											<option value="">เรียงตามจังหวัด</option>
											<option value="">เรียงตามรอบการผลิต</option>
											<option value="">Sort by newness</option>
											<option value="">Sort by price: low to high</option>
										</select>
									</form>
								</div>
								@foreach ($orchards as $key => $orchard)
								@if ($key%3 == 0)
								<div class="products row product-grid">
								@endif
									<div class="masonry-item noo-product-column col-md-4 col-sm-6 product">
								
										<div class="noo-product-inner">
											<div class="noo-product-thumbnail">
												<a href="{{'orchards/'.$orchard->idOrchard}}">
													@if ($key<=10)
														<img src="{{asset('images/new.png')}}" style="position: absolute; margin-left: -5px; margin-top: -2px">
													@endif

													@foreach ($orchard->orchardPlots as $orchardPlot)
														@if ($orchardPlot->idPlotStatus == 1)
															<img src="{{asset('images/gap.png')}}" style="position: absolute; margin-left: 2px; margin-top: 115px">
														@endif
													@endforeach
													<img style="width: 260px; height: 160px;" src="{{asset($orchard->picture1)}}" alt="" />
												</a>
												<!-- <div class="noo-rating">
													<div class="star-rating">
														<span style="width:0%"></span>
													</div>
												</div> -->
											</div>
											<div class="noo-product-title"> 
												<h3><a href="{{'orchards/'.$orchard->idOrchard}}">{{$orchard->nameOrchard}}</a></h3>

												<?php $speciesTmp = array(); 
													  $strSpecies = "";
												?>

												@foreach ($orchard->orchardPlots as $plotKey => $orchardPlot)
													@if (!array_has($speciesTmp, $orchardPlot->fruitSpecie->specieName))
														<?php $speciesTmp[] =  $orchardPlot->fruitSpecie->specieName; ?>
														@if($plotKey==0)
															<?php $strSpecies = $orchardPlot->fruitSpecie->specieName;
															?>
															
														@elseif(count($orchard->orchardPlot)===$plotKey+1)
															<?php $strSpecies .= $orchardPlot->fruitSpecie->specieName; ?>
															
														@else
															<?php $strSpecies .= ", ".$orchardPlot->fruitSpecie->specieName; ?>
															
														@endif	
													@endif
													
												@endforeach

												<p class='spac'><i class='fa fa-lemon-o' style='color: green; margin-top: 10px;'></i>&nbsp;

												{{-- {{ str_limit($string, $limit = 10, $end = '...') }} --}}

												{!! str_limit($strSpecies, $limit = 100)!!}
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
									
									@if ((count($orchards)===$key+1) || $key%3 == 2)
											</div>
										@endif
									@endforeach	
								<div class="pagination list-center" style="margin-left:343px">
									{!! $orchards->Links(); !!}
								</div>
							</div>
							<div class="noo-sidebar col-md-3">
								<div class="noo-sidebar-wrap">
									<div class="widget commerce widget_product_search">
										<h3 class="widget-title">ค้นหา</h3>
										<form method="GET" action="{{ url('search') }}" class="form-horizontal">
											{{ csrf_field() }}
											<input type="search" class="search-field" placeholder="ค้นหาสวน&hellip;" value=""/>
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
									</div> -->
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
@endsection