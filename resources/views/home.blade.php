<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Orchard</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Space Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js--->
<!---fonts-->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>-->
<!---fonts-->
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

</head>
<body>
		<!--header-->
	<div class="header-section">
		<div class="container">
			<div class="head-top" style="height: 80px">				
				<div class="navbar-brand">
					<a href="index.html">
						<img src="images/fastfruit.png" style="width: 300px; height: 70px; position: absolute;">
					</a>
				</div>
				
				<div class="email">
					<ul>
						<li>
							<a href="chat.html" >
								<i class="glyphicon glyphicon-comment" aria-hidden="true"></i>แชท
							</a>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<i class="glyphicon glyphicon-bell" aria-hidden="true"></i>แจ้งเตือน
							</a>
						</li>
						<li>
							<select>
								<option value="sumet" selected>สุเมธ</option>
								<option value="suan1" >สวนเบ็ญจวรรณ์</option>
								<option value="suan2" >สวนกุลภัสร์</option>
								<option value="suan3" >สวนพุดทรัพย์</option>
								<option value="suan4" >สวนสิริจรรยา</option>
								<option value="suan5" >สวนรุจิระธราพันธุ์</option>
							</select>
						</li>
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal">
								<i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>ออกจากระบบ
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<nav class="navbar navbar-default">
				<!--Brand and toggle get grouped for better mobile display-->

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>				  

				</div>


				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html">หน้าแรก <span class="sr-only">(current)</span></a></li>
						<li><a href="orchard.html">ชมสวน</a></li>
						<li><a href="product.html">ดูผลผลิต</a></li>
						<li><a href="match.html">จับคู่สวน</a></li>
						<li><a href="contact.html">ติดต่อเรา</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
						    <input type="text" class="form-control" placeholder="ค้นหา">
						</div>
						<button type="submit" class="btn btn-default">
							<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
						</button>
					</form>							
				</div>
			</nav>
		</div>
	</div>
	<!--header-->
	
		<!--banner-->
		<div class="slider" style="height: 500px ">
			<div class="callbacks_container" >
				<ul class="rslides" id="slider">
					<div class="slid banner1" >
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>เงาะ</h3>
								<p>เงาะโรงเรียน</p>
								<a href="#" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner2">	
						  <div class="caption" style="width:350px; height: 150px ">
								<h3>มะม่วง</h3>
								<p>มะม่วงหวานๆ</p>
								<a href="#" class="button">อ่านเพิ่ม</a>
						  </div>
					</div>
					<div class="slid banner3">	
						<div class="caption" style="width:350px; height: 150px ">
							<h3>ทุเรียน</h3>
							<p>หวาน กรอบ อร่อย</p>
							<a href="#" class="button">อ่านเพิ่ม</a>
						</div>
					</div>
				</ul>
			</div>
		</div>

			<!--Featured Properties-->
				<div class="feature-section">
					<div class="container">
						<h3>สวนที่ลงใหม่</h3>
						<div class="feature-grids">
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/f1.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ส้มส้ม จากสวนสิรภัทร</h5>
								<p>ส้มสดๆ ส้มสวยๆ ส้มหวานๆ </p>
								<a href="ProductDetail1.html">
									<span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span>
								</a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/f2.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ทุเรียน จากสวนเปรม</h5>
								<p>ทุเรียนหวานกรอบอร่อย</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/f3.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>มะม่วง สวนนภัสสกร</h5>
								<p>มะม่วงหลายพันธุ์ มาดูได้ค่ะ</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="col-md-3 feature-grid">
								<img src="images/new.png" style="position: absolute; margin-left: -5px; margin-top: -2px">
								<img src="images/f4.jpg" class="img-responsive" alt="/" style=" max-height:155px; width:255px">
								<h5>ลำไย สวนวศิน</h5>
								<p>ลำไยดี ลำไยอร่อย ต้องลำไยสวนวศิน</p>
								<a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;ดูรายละเอียด</span></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--Featured Properties-->
			
			<!--testimonials-->
					<!--<div class="testimonials">
						<div class="container">
							<h3>testimonial</h3>
							<span></span>
							<div id="owl-demo" class="owl-carousel">
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/t1.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>Lorem ipsum dolor sit amet, offendit volutpat sea ex, at omnium scripta pro, at omnium scripta pro, ei mea oratio malorum forensibus. ei mea oratio malorum forensibus. Sed ei omnes laoreet posidonium ei mea oratio malorum forensibus.</p>
										<h4><a href="#">Sumet Benjawan</a></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/t2.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>Lorem ipsum dolor sit amet, offendit volutpat sea ex, at omnium scripta pro, at omnium scripta pro, ei mea oratio malorum forensibus. ei mea oratio malorum forensibus. Sed ei omnes laoreet posidonium ei mea oratio malorum forensibus.</p>
										<h4><a href="#">Sirijanya Rujiratharapun</a></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/t3.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>Lorem ipsum dolor sit amet, offendit volutpat sea ex, at omnium scripta pro, at omnium scripta pro, ei mea oratio malorum forensibus. ei mea oratio malorum forensibus. Sed ei omnes laoreet posidonium ei mea oratio malorum forensibus.</p>
										<h4><a href="#">Kulapat Pudsub</a></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>-->
					<!--testmonials-->

					<!--footer-->
					<div class="footer-section">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-1 footer-grid">
									
								</div>
								<div class="col-md-3 footer-grid">
									<br><br><br>
									<img src="images/fastfruit.png" style="width: 200px; height: 50px; ">
								</div>
								<div class="col-md-3 footer-grid">
									<h4>เมนู</h4>
									<ul>
										<li><a href="#">หน้าแรก</a></li>
										<li><a href="#">ชมสวน</a></li>
										<li><a href="#">จับคู่</a></li>
										<li><a href="#">สมัครสมาชิก</a></li>
										<li><a href="#">เข้าสู่ระบบ</a></li>
										<li><a href="#">แชท</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>ติดต่อ</h4>
									<ul>
										<li><a href="terms.html">ติดต่อเรา</a></li>
									</ul>
								</div>		
								<div class="col-md-2 footer-grid">
								</div>						
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p>&copy; All rights reserved by FASTFRUIT</p>
						</div>
					</div>
					<!--copy-->
			<!-- login -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									
									<div class="login-right">
										<form>
											<h3>เข้าสู่ระบบ</h3>
											<input type="text" value="อีเมล์" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required="">	
											<input type="password" value="รหัสผ่าน" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">ลืมรหัสผ่าน?</a></h4>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>จดจำฉัน</label>
											</div>
											<input type="submit" value="เข้าสู่ระบบ" >
										</form>
									</div>																
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- Register -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form>
											<h3>สมัครสมาชิก</h3>
											<input type="text" value="ชื่อ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FName';}" required="">
											<input type="text" value="นามสกุล" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'LName';}" required="">
											<input type="text" value="อีเมล์" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="รหัสผ่าน" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="สมัครสมาชิก" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Register -->
</body>
</html>