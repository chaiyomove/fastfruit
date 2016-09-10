<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Dashboard</title>
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

<!--Gentelella-->
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
<!--Gentelella-->


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

	<!--Featured Properties-->
	<div class="feature-section">
		<div class="container">
		<div class="x_panel" style="height: 650px">
		<div class="x_content">

			<div class="col-xs-2">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active">
                    	<a href="#profile" data-toggle="tab"><h4>สถิติ</h4></a>
                    </li>
                    <li>
                    	<a href="#follow" data-toggle="tab"><h4>สวนที่ติดตาม</h4></a>
                    </li>
                    <li>
                    	<a href="#bookmark" data-toggle="tab"><h4>สวนที่ติดดาว</h4></a>
                    </li>
                </ul>
            </div>

            <div class="col-xs-10">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                    <br>
                        <p class="lead">&nbsp;&nbsp;&nbsp;สถิติของแต่ละสวน</p>
                        <!--Profile-->
						<div class="col-md-6">
							<div class="x_panel tile overflow_hidden" style="height: 220px">
								<div class="x_content">

									<div class="testmonial-img">
										<img src="images/t1.png" width="40%" style="float: left;" />
									</div>
									<div>
										<p style="font-size: x-large; float: right;">สุเมธ เบ็ญจวรรณ์</p>
									</div>
									<br><br><br><br>							
									<div class="testmonial-text">
										<a href="AddOrchard.html" class="btn btn-info btn-sm" style="float: right;">
						          			<h4><span class="glyphicon glyphicon-plus-sign"></span> เพิ่มสวน</h4>
						       		 	</a>   					
									</div>
									<br><br>
									<div class="testmonial-text">
										<a href="EditProfile.html" class="btn btn-info btn-sm" style="float: right;">
					          				<h4><span class="glyphicon glyphicon-cog"></span> แก้ไขโปรไฟล์ของคุณ</h4>
					        			</a>      					
									</div>	
										
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<!--Profile-->

                        <!--Gentelella_Graph-->		
                        <div class="col-md-6">				
							<div class="x_panel tile overflow_hidden" style="height: 220px">								
								<div class="x_content">
									<table class="" style="width:100%">
										<tbody><tr>
											<th style="width:37%;">
												<p>อันดับ</p>
											</th>
											<th>
												<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
													<p class="">สวน</p>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
													<p class="">ร้อยละ</p>
												</div>
											</th>
										</tr>
										<tr>
											<td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
												<canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
											</td>
											<td>
												<table class="tile_info">
													<tbody><tr>
														<td>
															<p><i class="fa fa-square blue"></i>สวนเบ็ญจวรรณ์ </p>
														</td>
														<td>30%</td>
													</tr>
													<tr>
														<td>
															<p><i class="fa fa-square green"></i>สวนกุลภัสร์ </p>
														</td>
														<td>10%</td>
													</tr>
													<tr>
														<td>
															<p><i class="fa fa-square purple"></i>สวนพุดทรัพย์ </p>
														</td>
														<td>20%</td>
													</tr>
													<tr>
														<td>
															<p><i class="fa fa-square aero"></i>สวนสิริจรรยา </p>
														</td>
														<td>15%</td>
													</tr>
													<tr>
														<td>
															<p><i class="fa fa-square red"></i>สวนรุจิระธราพันธุ์ </p>
														</td>
														<td>30%</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
								</div>
							</div>
						</div>
						<!--Gentelella_Graph-->

                    </div>
                   
                    <div class="tab-pane" id="follow">
                    <br>
                    	<p class="lead">&nbsp;&nbsp;&nbsp;สวนที่ติดตาม</p>
			            <div class="row">
			            <div class="col-md-11">
			            <div class="x_panel tile overflow_hidden">
			            <div class="x_content">
			                <div class="row">
				                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
				                    <div class="btn-toolbar">
				                        <div class="btn-group">
								            <button class="btn btn-info active" type="button">1</button>
								            <button class="btn btn-info" type="button">2</button>
								            <button class="btn btn-info" type="button">3</button>
								            
								        </div>
				                    </div>
				                </div>
				                <br>
				                <div class="clearfix"></div>
				                <br>
			                <div class="container">
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนสิรภัทร</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>สวนเราขายส้มเขียวหวาน</p>
					                            <p>ส้มของเราคุณภาพดี สดใหม่</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">   
					                        <div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                         </div>                         
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-success btn-xs"> 
					                              	<i class="fa fa-check"> </i> กำลังติดตาม
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนวศิน</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>สวนวศิน ขายลำไย๊ลำไย</p>
					                            <p>เนื้อกรอบ รสหวานหอมอร่อย</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a2.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">   
					                        <div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                         </div>                         
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-success btn-xs"> 
					                              	<i class="fa fa-check"> </i> กำลังติดตาม
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
			                </div>
			                <div class="container">
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนวิมลรัตน์</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>สวนนี้มีส้มสายน้ำผึ้ง</p>
					                            <p>สดๆสวยๆ ให้ราคาดีจ้า</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a3.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">   
					                        <div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                         </div>                         
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-success btn-xs"> 
					                              	<i class="fa fa-check"> </i> กำลังติดตาม
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนจำเริญ</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>ขายเงาะโรงเรียน</p>
					                            <p>เงาะอร่อยๆต้องเงาะโรงเรียน</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a4.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">   
					                        <div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                         </div>                         
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-success btn-xs"> 
					                              	<i class="fa fa-check"> </i> กำลังติดตาม
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
			                </div>
			                </div>
			            </div>
			            </div>
			            </div>
			            </div>
                    </div>

                    <div class="tab-pane" id="bookmark">
                    <br>
                    	<p class="lead">&nbsp;&nbsp;&nbsp;สวนที่ติดดาว</p>
                    	<div class="row">
			            <div class="col-md-11">
			            <div class="x_panel tile overflow_hidden">
			            <div class="x_content">
			                <div class="row">
				                
				                <br>
				                <div class="clearfix"></div>
				                <br>
			                <div class="container">
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนปาณระวี</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>ขายมะม่วงเขียวเสวย</p>
					                            <p>ลูกใหญ่ ผลสวย</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a5.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">
				                        	<div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                        </div>                            
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-warning btn-xs"> 
					                              	<i class="fa fa-star"> </i> ติดดาว
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนจำปาเงิน</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>ขายมังคุด</p>
					                            <p>มังคุดลูกใหญ่ เนื้อหวานๆ</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a6.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">
				                        	<div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                        </div>                            
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-warning btn-xs"> 
					                              	<i class="fa fa-star"> </i> ติดดาว
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
			                </div>
			                <div class="container">
				                <div class="col-md-4 profile_details">
				                    <div class="well profile_view" style="padding: 0px">
				                        <div class="col-sm-12">
					                        <div class="left col-xs-7">
					                            <p style="font-size: 20px">สวนนภัสสกร</p>
					                            <p><strong>รายละเอียด: </strong></p>
					                            <p>ขายมะม่วงแรด</p>
					                            <p>มาอุดหนุนมะม่วงแรดกันนะคะ</p>
					                        </div>
									        <div class="right col-xs-5">
									            <img src="images/a7.jpg" alt="" class="img-circle img-responsive">
									        </div>
				                        </div>
				                        <div class="col-xs-12 bottom">
				                        	<div class="emphasis" style="float: left; margin-left: 20px">
					                            <button type="button" class="btn btn-info btn-xs"> 
					                            	<i class="glyphicon glyphicon-user"> </i>
						                            <i class="glyphicon glyphicon-comment"> </i>
					                            </button>					                              
					                        </div>                            
				                            <div class="emphasis" style="float: right; margin-right: 15px">
				                              	<button type="button" class="btn btn-warning btn-xs"> 
					                              	<i class="fa fa-star"> </i> ติดดาว
				                              	</button>
				                              	<button type="button" class="btn btn-primary btn-xs">
				                                	<i class="fa fa-user"> </i> ดูข้อมูล
				                              	</button>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				                
			                </div>
			                </div>
			            </div>
			            </div>
			            </div>
			            </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
		</div>
		</div>
		</div>
	</div>
	<!--Featured Properties-->


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


					<!--Gentelella-->
                    <!-- jQuery -->
                    <script src="vendors/jquery/dist/jquery.min.js"></script>
                    <!-- Bootstrap -->
                    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                    <!-- FastClick -->
                    <script src="vendors/fastclick/lib/fastclick.js"></script>
                    <!-- NProgress -->
                    <script src="vendors/nprogress/nprogress.js"></script>
                    <!-- Chart.js -->
                    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
                    <!-- gauge.js -->
                    <script src="vendors/bernii/gauge.js/dist/gauge.min.js"></script>
                    <!-- bootstrap-progressbar -->
                    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
                    <!-- iCheck -->
                    <script src="vendors/iCheck/icheck.min.js"></script>
                    <!-- Skycons -->
                    <script src="vendors/skycons/skycons.js"></script>
                    <!-- Flot -->
                    <script src="vendors/Flot/jquery.flot.js"></script>
                    <script src="vendors/Flot/jquery.flot.pie.js"></script>
                    <script src="vendors/Flot/jquery.flot.time.js"></script>
                    <script src="vendors/Flot/jquery.flot.stack.js"></script>
                    <script src="vendors/Flot/jquery.flot.resize.js"></script>
                    <!-- Flot plugins -->
                    <script src="js/flot/jquery.flot.orderBars.js"></script>
                    <script src="js/flot/date.js"></script>
                    <script src="js/flot/jquery.flot.spline.js"></script>
                    <script src="js/flot/curvedLines.js"></script>
                    <!-- jVectorMap -->
                    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
                    <!-- bootstrap-daterangepicker -->
                    <script src="js/moment/moment.min.js"></script>
                    <script src="js/datepicker/daterangepicker.js"></script>

                    <!-- Custom Theme Scripts -->
                    <script src="js/custom.js"></script>

                    <!-- Flot -->
                    <script>
                        $(document).ready(function() {
                            var data1 = [
                            [gd(2012, 1, 1), 17],
                            [gd(2012, 1, 2), 74],
                            [gd(2012, 1, 3), 6],
                            [gd(2012, 1, 4), 39],
                            [gd(2012, 1, 5), 20],
                            [gd(2012, 1, 6), 85],
                            [gd(2012, 1, 7), 7]
                            ];

                            var data2 = [
                            [gd(2012, 1, 1), 82],
                            [gd(2012, 1, 2), 23],
                            [gd(2012, 1, 3), 66],
                            [gd(2012, 1, 4), 9],
                            [gd(2012, 1, 5), 119],
                            [gd(2012, 1, 6), 6],
                            [gd(2012, 1, 7), 9]
                            ];
                            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                                data1, data2
                                ], {
                                    series: {
                                        lines: {
                                            show: false,
                                            fill: true
                                        },
                                        splines: {
                                            show: true,
                                            tension: 0.4,
                                            lineWidth: 1,
                                            fill: 0.4
                                        },
                                        points: {
                                            radius: 0,
                                            show: true
                                        },
                                        shadowSize: 2
                                    },
                                    grid: {
                                        verticalLines: true,
                                        hoverable: true,
                                        clickable: true,
                                        tickColor: "#d5d5d5",
                                        borderWidth: 1,
                                        color: '#fff'
                                    },
                                    colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                                    xaxis: {
                                        tickColor: "rgba(51, 51, 51, 0.06)",
                                        mode: "time",
                                        tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });

                            function gd(year, month, day) {
                                return new Date(year, month - 1, day).getTime();
                            }
                        });
                    </script>
                    <!-- /Flot -->

                    <!-- jVectorMap -->
                    <script src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
                    <script src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
                    <script src="js/maps/gdp-data.js"></script>
                    <script>
                        $(document).ready(function(){
                            $('#world-map-gdp').vectorMap({
                                map: 'world_mill_en',
                                backgroundColor: 'transparent',
                                zoomOnScroll: false,
                                series: {
                                    regions: [{
                                        values: gdpData,
                                        scale: ['#E6F2F0', '#149B7E'],
                                        normalizeFunction: 'polynomial'
                                    }]
                                },
                                onRegionTipShow: function(e, el, code) {
                                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                                }
                            });
                        });
                    </script>
                    <!-- /jVectorMap -->

                    <!-- Skycons -->
                    <script>
                        $(document).ready(function() {
                            var icons = new Skycons({
                                "color": "#73879C"
                            }),
                            list = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                            ],
                            i;

                            for (i = list.length; i--;)
                                icons.set(list[i], list[i]);

                            icons.play();
                        });
                    </script>
                    <!-- /Skycons -->

                    <!-- Doughnut Chart -->
                    <script>
                        $(document).ready(function(){
                            var options = {
                                legend: false,
                                responsive: false
                            };

                            new Chart(document.getElementById("canvas1"), {
                                type: 'doughnut',
                                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                                data: {
                                    labels: [
                                    "Symbian",
                                    "Blackberry",
                                    "Other",
                                    "Android",
                                    "IOS"
                                    ],
                                    datasets: [{
                                        data: [15, 20, 30, 10, 30],
                                        backgroundColor: [
                                        "#BDC3C7",
                                        "#9B59B6",
                                        "#E74C3C",
                                        "#26B99A",
                                        "#3498DB"
                                        ],
                                        hoverBackgroundColor: [
                                        "#CFD4D8",
                                        "#B370CF",
                                        "#E95E4F",
                                        "#36CAAB",
                                        "#49A9EA"
                                        ]
                                    }]
                                },
                                options: options
                            });
                        });
                    </script>
                    <!-- /Doughnut Chart -->
                    
                    <!-- bootstrap-daterangepicker -->
                    <script>
                        $(document).ready(function() {

                            var cb = function(start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                            };

                            var optionSet1 = {
                                startDate: moment().subtract(29, 'days'),
                                endDate: moment(),
                                minDate: '01/01/2012',
                                maxDate: '12/31/2015',
                                dateLimit: {
                                    days: 60
                                },
                                showDropdowns: true,
                                showWeekNumbers: true,
                                timePicker: false,
                                timePickerIncrement: 1,
                                timePicker12Hour: true,
                                ranges: {
                                    'Today': [moment(), moment()],
                                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                },
                                opens: 'left',
                                buttonClasses: ['btn btn-default'],
                                applyClass: 'btn-small btn-primary',
                                cancelClass: 'btn-small',
                                format: 'MM/DD/YYYY',
                                separator: ' to ',
                                locale: {
                                    applyLabel: 'Submit',
                                    cancelLabel: 'Clear',
                                    fromLabel: 'From',
                                    toLabel: 'To',
                                    customRangeLabel: 'Custom',
                                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                    firstDay: 1
                                }
                            };
                            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                            $('#reportrange').daterangepicker(optionSet1, cb);
                            $('#reportrange').on('show.daterangepicker', function() {
                                console.log("show event fired");
                            });
                            $('#reportrange').on('hide.daterangepicker', function() {
                                console.log("hide event fired");
                            });
                            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                            });
                            $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
                                console.log("cancel event fired");
                            });
                            $('#options1').click(function() {
                                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                            });
                            $('#options2').click(function() {
                                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                            });
                            $('#destroy').click(function() {
                                $('#reportrange').data('daterangepicker').remove();
                            });
                        });
                    </script>
                    <!-- /bootstrap-daterangepicker -->

                    <!-- gauge.js -->
                    <script>
                        var opts = {
                            lines: 12,
                            angle: 0,
                            lineWidth: 0.4,
                            pointer: {
                                length: 0.75,
                                strokeWidth: 0.042,
                                color: '#1D212A'
                            },
                            limitMax: 'false',
                            colorStart: '#1ABC9C',
                            colorStop: '#1ABC9C',
                            strokeColor: '#F0F3F3',
                            generateGradient: true
                        };
                        var target = document.getElementById('foo'),
                        gauge = new Gauge(target).setOptions(opts);

                        gauge.maxValue = 6000;
                        gauge.animationSpeed = 32;
                        gauge.set(3200);
                        gauge.setTextField(document.getElementById("gauge-text"));
                    </script>
                    <!-- /gauge.js -->
                    <!---Gentelella-->
</body>
</html>