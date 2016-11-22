<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"/>
		<title>FASTFRUIT</title>

		{{-- <link rel='stylesheet' href='{{asset('css/font-awesome.min.css')}}' type='text/css' media='all'/> --}}
		<link rel='stylesheet' href='{{asset('css/bootstrap.min.css')}}' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset('css/owl.carousel.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/owl.theme.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('https://fonts.googleapis.com/css?family=Prompt:100,300,400,700,900,300italic,400italic,700italic,900italic')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/style.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('css/custom.css')}}' type='text/css' media='all'/>
		<link rel="stylesheet" href='{{asset('css/magnific-popup.css')}}' type='text/css' media='all' />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://use.fontawesome.com/03b93caede.js"></script>


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="{{-- {{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}} --}}"></script>
            <script src="{{-- {{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}} --}}"></script>
        <![endif]-->
	</head>
	<body>
		{{-- <script type="text/javascript">
		    window.onload = function(){
		        document.getElementById("{{ "nav-".Request::path() }}").className="active";   
		    }
		    
		</script> --}}
		{{-- <div class="noo-spinner">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div> --}}
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

										@if (Auth::user())
										<li>
											<a href="cart.html">
												<span class="has-cart">
													<i class="fa fa-bell"></i>
													<em>1</em>
												</span>
											</a>
										</li>
											<li class="menu-item fly-right">
												<a href="{{ url('profile/'.Auth::user()->id) }}">
													<i class="fa fa-user"></i>{{Auth::user()->firstName}} 
												</a>
											</li>									
											<li class="menu-item fly-right">
												<a href="{{url('logout')}}">
													<i class="fa fa-sign-out"></i>ออกจากระบบ
												</a>
											</li>
										@else
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
										@endif
										
										
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
										@if (Auth::user())
											<li>
												<a href="{{ url('orchard')}}">เพิ่มสวน</a>
											</li>
										@endif
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
			

		    @yield('content')

		    <!--Error-Handling-->
		    @if($errors->any())
		        <div class="row">
		            <div class="col-md-4"></div>
		            <div class="col-md-4">
		                <div class="modal-body real-spa">
		                    <div class="login-grids">
		                        <div class="login">                                 
		                            <div class="login-right">
		                                <ul class="alert alert-danger" style="font-size: 100%; margin-top:-30px; padding-left:40px;">

		                                    @foreach($errors->all() as $error)
		                                        <li>{{ $error }}</li>
		                                    @endforeach		                                    
		                                </ul>
		                            </div>
		                        </div>        
		                    </div>
		                </div>
		            </div>
		        </div>
		    @endif
		    
		    <div id="div_errors" class="row" style="display:none">
	            <div class="col-md-4"></div>
            	<div class="col-md-4">
                	<div class="modal-body real-spa">
                    	<div class="login-grids">
                        	<div class="login">                                 
                            	<div id="errors" class="login-right">
                                	<ul id="ul_errors" class="alert alert-danger" style="font-size: 100%; margin-top:-30px; padding-left:40px;">

                                	</ul>
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
									<a href="javascript:void(0)">
										<img src="{{asset('images/fastfruit1.png')}}" alt="" />
									</a>
									<p>
										เว็บแอพพลิเคชันสื่อกลางระหว่างสวนและคุณ
									</p>
									<p>
										ที่จะทำให้การซื้อขายผลไม้
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
										<a href="tel:0909709049">090 970 9049</a>
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
		<script type='text/javascript' src='{{asset('js/core.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/widget.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/mouse.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/slider.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/jquery.ui.touch-punch.js')}}'></script>
		<script type='text/javascript' src='{{asset('js/price-slider.js')}}'></script>
	</body>
</html>