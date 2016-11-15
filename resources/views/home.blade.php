<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"/>
		<title>หน้าแรก | FASTFRUIT</title>

		<link rel='stylesheet' href='{{asset('css/bootstrap.min.css')}}' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset('css/settings.css')}}' type='text/css' media='all'/>
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
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
			<header class="noo-header header-5 header-static">
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
										<img class="noo-logo-img noo-logo-normal" src="{{ asset('images/fastfruit1.png') }}" alt="">
									</a>
								</div>  
								<nav class="noo-header-anchor">
									<ul>
										<li>
											<div>
												<span><i class="fa fa-phone"></i></span>
											</div>
											<div>
												<a href="#">090 970 9049</a>
											</div>
										</li>
										@if (Auth::user())							
											<li>
												<div>
													<span class="has-cart">
													<i class="fa fa-bell"></i>
													<em>1</em>
												</span>
												</div>
												<a href="{{ url('profile/'.Auth::user()->id) }}">
												<div>
													<span><i class="fa fa-user""></i></span>
												</div>
												<div style="margin-left: -20px;">
													{{Auth::user()->firstName}} 
												</div>
												</a>
												<div>
													<span><i class="fa fa-sign-out"></i></span>
												</div>
												<div style="margin-left: -20px;">
													<a href="{{ url('logout') }}">ออกจากระบบ</a>
												</div>
											</li>	
										@else
											<li>
												<div>
													<span><i class="fa fa-sign-in"></i></span>
												</div>
												<div>
													<a href="{{ url('login') }}">เข้าสู่ระบบ</a>
												</div>
												<div>
													<span><i class="fa fa-lock"></i></span>
												</div>
												<div>
													<a href="{{ url('register') }}">สมัครสมาชิก</a>
												</div>
											</li>
										@endif
									</ul>
								</nav>
								<nav class="pull-right noo-main-menu">
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
										@if (Auth::user())
											<li>
												<a href="{{ url('addorchard')}}">เพิ่มสวน</a>
											</li>
										@endif
										<li>
											<a href="#" class="fa fa-search noo-search" id="noo-search"></a>
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
							<input type="search" name="search" class="form-control" value="" placeholder="Search...">
							<input type="submit" value="Search">
						</form> 
					</div>
				</div>
			</header>
			<div class="main">
				<div class="noo-simple-product-wrap">
					<ul class="noo-simple-product-slider">
						<li>
							<a href="{{'orchards/6'}}">
								<div class="noo-simple-slider-item" data-bg="{{ asset('images/slider/br2.jpg')}}">
									<div class="n-simple-content">
										<h2>สวนอุดมสิน</h2>
										<span class="price"><span class="amount">สวนเรามีผลไม้หลากหลาย</span></span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="{{'orchards/9'}}">
								<div class="noo-simple-slider-item" data-bg="{{ asset('images/slider/br3.jpg')}}">
									<div class="n-simple-content">
										<h2>สวนลำไยคุณอิน</h2>
										<span class="price"><span class="amount">ลำไยหวานๆ</span></span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="{{'orchards/4'}}">
								<div class="noo-simple-slider-item" data-bg="{{ asset('images/slider/br4.jpg')}}">
									<div class="n-simple-content">
										<h2>สวนบุญสับปะรด</h2>
										<span class="price"><span class="amount">สับปะรดอร่อย</span></span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="noo-simple-slider-item" data-bg="{{ asset('images/slider/br1.jpg')}}">
									<div class="n-simple-content">
										<h2>สนใจลงสวนแนะนำ</h2>
										<span class="price"><span class="amount">ติดต่อ Line ID:fastfruit</span></span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>

				
				<div class="pt-5 pb-7">

					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="noo-product-grid-wrap commerce product-style">
									<div class="noo-sh-title">
										<img width="40" height="39" src="{{ asset('images/icon_p.png')}}" alt=""
										style="margin-bottom: 25px;" />
										<h2>ผลผลิตที่ลงใหม่</h2> 
									</div>
									@foreach ($latestProducts as $key => $product)
										@if ($key%4 == 0)
											<div class="noo-product-grid products row product-grid noo-grid-4">
										@endif
										<div class="fruit organic-fruits masonry-item col-md-4 col-sm-6">
											<div class="noo-product-inner">
												<div class="noo-product-thumbnail">
													@if ($key<=10)
														<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
													@endif

													@if ($product->orchardPlot->idPlotStatus == 1)
														<img src="images/gap.png" style="position: absolute; margin-left: 2px; margin-top: 115px">
													@endif
													<a href="{{url('product', [$product->idProductSprint])}}">
														<img style="width: 260px; height: 160px;" src="{{$product->picture1}}" alt="" />
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
													<span class="fa fa-map-marker" style="margin-bottom: 15px; color: rgb(206, 74, 74);">&nbsp;
														{{$product->orchardPlot->province->provinceName}}
													</span>
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
										@if ((count($latestProducts)===$key+1) || $key%4 == 3)
											</div>
										@endif
									@endforeach	

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="newsletter">
					<div class="noo-sh-mailchimp">
						<div class="container">
							<div class="row">
								<div class="col-md-5 col-xs-12">
									<h3 class="noo-mail-title">Subscribe to us!</h3>
									<p class="noo-mail-desc">
										Enter Your email address for our mailing list to keep yourself update.
									</p>
								</div>
								<div class="col-md-7 col-xs-12">
									<form>
										<div class="newsletter-form-fields">
											<input type="email" name="EMAIL" placeholder="Email address" required />
											<input type="submit" value="submit"/>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>- Medium between orchards and you -</h4>
							<h3>FastFruit</h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
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

		<script type='text/javascript' src='{{asset('js/jquery.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jquery-migrate.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/modernizr-2.7.1.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/off-cavnass.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/script.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/custom.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/imagesloaded.pkgd.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/isotope.pkgd.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/portfolio.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jquery.touchSwipe.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jquery.carouFredSel-6.2.1.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jquery.isotope.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/owl.carousel.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jflickrfeed.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jquery.magnific-popup.js')}}'></script>
	</body>
</html>