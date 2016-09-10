<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Product Detail</title>
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
<!---<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>-->
<!---fonts-->
<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
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

<!---Gentelella-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap -->
    <!--<link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
<!---Gentelella-->

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
				<div class="collapse navbar-collapse" >
					<ul class="nav navbar-nav">
						<li><a href="index.html">หน้าแรก</a></li>
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

			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3>ข้อมูลผลผลิต</h3>
					<div id="owl-demo" class="owl-carousel">
						<div class="item">		
							<div class="testmonial-text" style="width: 97.5%; margin: auto; ">
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
										<img src="images/f1.jpg" style="height: 350px; width: 860px;" />
									</div>
									<div class="item">
										<img src="images/f2.jpg" style="height: 350px; width: 860px;" />										
									</div>
									<div class="item">
										<img src="images/f4.jpg" style="height: 350px; width: 860px;" />
									</div>
								</div> 
								<a class="left carousel-control" href="#carousel-824332" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-824332" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
							<br>

								<!--Gentelela_table-->
									<div class="col-md-12 col-sm-12 col-xs-12">
									                <div class="x_panel">
									                  <div class="x_title">
									                    <h4>ส้มเขียวหวาน จาก สวนเบ็ญจวรรณ์</h4>
									                    
									                    <div class="clearfix"></div>
									                  </div>
									                  <div class="x_content">

									                    <table class="table table-striped">
									                      <tbody>
									                        <tr>
									                          <th scope="row" width="15%">รายละเอียด</th>
									                          <td colspan="2" align="left">ติวเตอร์ไฟลท์โบรชัวร์บัตเตอร์สัตหีบ จัมโบ้หงวนอมาตยาธิปไตย เจลอินเตอร์สเตริโอหลวงพี่ไทเฮา รูบิกอึ๋มฟลอร์ฮอตแฟรี่ เรตโปรเจกต์แชเชือนแครอท ซูชินครพนมเอ๋อ เทคโนแครต ทอมวาซาบิลามะ วาซาบิเบอร์รี โบรชัวร์สมุยยะเยือก ฮาราคีรีเบิร์น เชฟเตี๊ยมอยุธยาซัพพลาย ราเม็งดอนเมืองอโยธยาตู้เซฟเอาต์ โทรโข่งคอลัมนิสต์ คอมเพล็กซ์ป๊อกแจ็กพ็อตบางปะกง ราเมนแคปลิสต์มัฟฟินโทรโข่ง	</td>
									                          <td></td>
									                        </tr>
									                        <tr>
									                          <th scope="row">จำนวน</th>
									                          <td align="left" width="5%">500</td>
									                          <td align="left">กิโลกรัม</td>
									                        </tr>
									                        <tr>
									                          <th scope="row">ติดต่อผู้ขาย</th>
									                          <td colspan="2" align="left">0823245698</td>
									                          <td></td>
									                        </tr>
									                        <tr>
									                          <th scope="row">ลงวันที่</th>
									                          <td colspan="2" align="left">10  มิถุนายน  2558</td>
									                          <td></td>
									                        </tr>
									                        <tr>
									                          <th scope="row">หมดอายุวันที่</th>
									                          <td colspan="2" align="left" padding="20px">10  กันยายน  2558</td>
									                          <td></td>
									                        </tr>
									                        <tr>
									                          <td>
									                          	<button type="button" class="btn btn-info btn-sm" style="margin-left: -15px"> 
									                            	<h5><i class="glyphicon glyphicon-user"> </i>
										                            <i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท</h5>
					                            				</button>
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
											<h3>Login</h3>
											<input type="text" value="Enter your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="Login Now" >
										</form>
									</div>
																
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
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
											<h3>Register </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="Register Now" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Register -->
</body>
</html>