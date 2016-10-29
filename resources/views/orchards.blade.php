<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"/>
		<title>สวน | FASTFRUIT</title>

		<link rel='stylesheet' href='{{asset('css/bootstrap.min.css')}}' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset('css/owl.carousel.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/owl.theme.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/font-awesome.min.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('https://fonts.googleapis.com/css?family=Prompt:100,300,400,700,900,300italic,400italic,700italic,900italic')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/style.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/custom.css')}}' type='text/css' media='all'/>
		<link rel="stylesheet" href='{{asset('css/magnific-popup.css')}}' type='text/css' media='all' />
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
            <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
	</head>
	<body>
		<div class="noo-spinner">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
		<div class="site">
			<header class="noo-header header-3 header-static">
				<div class="navbar-wrapper">
					<div class="navbar navbar-default">
						<div class="container">
							<div class="menu-position">
								<div class="navbar-header pull-left">
									<div class="noo_menu_canvas">
										<div class="btn-search noo-search">
											<i class="fa fa-search"></i>
										</div>
										<div data-target=".nav-collapse" class="btn-navbar">
											<span></span>
											<span></span>
											<span></span>
										</div>
									</div>
									<a href="{{url('/')}}" class="navbar-brand">
										<img class="noo-logo-img noo-logo-normal" src="{{asset('images/fastfruit4.png')}}" alt="">
									</a>
								</div>  
								<nav class="pull-right noo-menu-option">
									<a href="#" class="button-expand-option"><i class="fa fa-ellipsis-v"></i></a>
									<ul>
										<!-- <li class="menu-item fly-right">
											<a href="index-Fastfruit.html">
												<i class="fa fa-user"></i>ฉัน 
											</a>
										</li> -->
										<li class="menu-item fly-right">
											<a href="{{ url('login') }}">
												<i class="fa fa-sign-in"></i>เข้าสู่ระบบ 
											</a>
										</li>
										<li class="menu-item fly-right">
											<a href="{{ url('register') }}">
												<i class="fa fa-lock"></i>สมัครสมาชิก
											</a>
										</li>
										<!-- <li class="menu-item fly-right">
											<a href="index-Fastfruit.html">
												<i class="fa fa-sign-out"></i>ออกจากระบบ
											</a>
										</li> -->
										
										<li class="menu-item fly-right">
										<form method="GET" action="{{ url('search') }}" class="form-horizontal">
										{{ csrf_field() }}
											<a id="noo-search" class="search-button noo-search" href="#">
												<i class="fa fa-search"></i> ค้นหา
											</a>
											</form>
										</li>

									</ul>
									<a href="#" class="button-menu-extend"><i class="fa fa-bars"></i></a>
								</nav>
								<nav class="pull-left noo-main-menu">
									<ul class="nav-collapse navbar-nav">
										<li class="current-menu-item">
											<a href="{{url('/')}}">หน้าแรก</a>
										</li>
										<li>
											<a href="{{ url('orchards') }}">ชมสวน</a>
										</li>
										<li>
											<a href="{{ url('products') }}">ดูผลผลิต</a>			
										</li>
										<li>
											<a href="{{ url('matching') }}">จับคู่สวน</a>
										</li>
										<li>
											<a href="{{ url('contactus') }}">ติดต่อเรา</a>
										</li>
										<li>
											<a href="{{ url('addorchard')}}">เพิ่มสวน</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="search-header5">
					<div class="remove-form"></div>
					<div class="container">
						<form method="GET" action="{{ url('search') }}" class="form-horizontal">
						{{ csrf_field() }}
							<label class="note-search">ค้นหา</label>
							<input type="search" name="s" class="form-control" value="" placeholder="Search...">
							<input type="submit" value="Search">
						</form> 
					</div>
				</div>
			</header>
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">สวนทั้งหมด</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
								<div class="noo-catalog">
									<p class="commerce-result-count">แสดง 1&ndash;9 of 18 ทั้งหมด</p>
								
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
									
									@if ((count($orchards)===$key+1) || $key%3 == 2)
											</div>
										@endif
									@endforeach	
									{{--  --}}
								<div class="pagination list-center" style="margin-left:343px">
									{!! $orchards->Links(); !!}
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
									<div class="widget commerce widget_price_filter">
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
									</div>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="wrap-footer footer-2 colophon wigetized newsletter">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3 col-sm-6 item-footer-four">
							<div class="widget widget_about"> 
								<div class="noo_about_widget">
									<a href="#">
										<img src="images/fastfruit1.png" alt="" />
									</a>
									<p>
										เว็บแอพสื่อกลางระหว่างสวนและคุณ
									</p>
									<p>
										ที่จะทำให้การเลือกผลไม้
									</p>
									<p>
										เป็นเรื่องง่ายและสะดวกขึ้น
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-3 col-sm-6 item-footer-four">
							<div class="widget widget_text">
								<h4 class="widget-title">ติดต่อ</h4> 
								<div class="textwidget">
									<h5>ที่อยู่</h5>
									<p>75 ซ.28 ถ.ประชาอุทิศ บางมด ทุ่งครุ กทม. 10140</p>
									<h5>โทร</h5>
									<p>
										<a href="#">090 970 9049</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 item-footer-four">
							<div class="widget widget_text">
								<h4 class="widget-title">อีเมล</h4> 
								<div class="textwidget">
									<p>
										<a href="mailto:fastfruit@gmail.com">
											fastfruit@gmail.com
										</a>
									</p>
								</div>
								<div class="widget widget_noo_social"> 
									<div class="noo_social">
										<div class="social-all">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-google-plus"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-youtube"></a>
											<a href="#" class="fa fa-skype"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</footer>
		</div>
		<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

		<script type='text/javascript' src='js/jquery.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='js/modernizr-2.7.1.min.js'></script>
		<script type='text/javascript' src='js/off-cavnass.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
		<script type='text/javascript' src='js/custom.js'></script>
		<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
		<script type='text/javascript' src='js/portfolio.js'></script>
		<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='js/jquery.carouFredSel-6.2.1.js'></script>
		<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
		<script type='text/javascript' src='js/owl.carousel.min.js'></script>
		<script type='text/javascript' src='js/jflickrfeed.min.js'></script>
		<script type='text/javascript' src='js/jquery.magnific-popup.js'></script>
		<script type='text/javascript' src='js/core.min.js'></script>
		<script type='text/javascript' src='js/widget.min.js'></script>
		<script type='text/javascript' src='js/mouse.min.js'></script>
		<script type='text/javascript' src='js/slider.min.js'></script>
		<script type='text/javascript' src='js/jquery.ui.touch-punch.js'></script>
		<script type='text/javascript' src='js/price-slider.js'></script>
	</body>
</html>