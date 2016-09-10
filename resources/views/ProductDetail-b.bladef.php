@extends('layouts/master')
@section('content')

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


			<!--profile-->
			<div class="feature-section">
				<div class="container">
					<h3>ส้มส้ม สวนสิรภัทร</h3>
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
									        <h4>ส้ม จาก สวนสิรภัทร</h4>
									        <div class="clearfix"></div>
									    </div>
									        <div class="x_content">

									            <table class="table table-striped">
									                <tbody>
									                <tr>
									                    <th scope="row" width="15%">รายละเอียด</th>
									                    <td colspan="2" align="left">
									                    ติวเตอร์ไฟลท์โบรชัวร์บัตเตอร์สัตหีบ จัมโบ้หงวนอมาตยาธิปไตย เจลอินเตอร์สเตริโอหลวงพี่ไทเฮา รูบิกอึ๋มฟลอร์ฮอตแฟรี่ เรตโปรเจกต์แชเชือนแครอท ซูชินครพนมเอ๋อ เทคโนแครต ทอมวาซาบิลามะ วาซาบิเบอร์รี โบรชัวร์สมุยยะเยือก ฮาราคีรีเบิร์น เชฟเตี๊ยมอยุธยาซัพพลาย ราเม็งดอนเมืองอโยธยาตู้เซฟเอาต์ โทรโข่งคอลัมนิสต์ คอมเพล็กซ์ป๊อกแจ็กพ็อตบางปะกง ราเมนแคปลิสต์มัฟฟินโทรโข่ง	
									                    </td>
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
									                            <h5>
										                            <i class="glyphicon glyphicon-user"> </i>
											                        <i class="glyphicon glyphicon-comment"> </i>&nbsp;&nbsp;แชท
										                        </h5>
					                            			</button>


					                            			<a href="OrchardDetail-bf.html">
									                			<button type="button" class="btn btn-danger btn-sm" style="margin-left: -14px; margin-top:10px"> 
										                            <h5>
											                            <i class="glyphicon glyphicon-eye-open">&nbsp;ชมสวน</i>
											                        </h5>
					                            				</button>														
															</a>
									                    </td>
									                    <td>
									                    	<button type="button" class="btn btn-warning btn-sm" style="margin-left: -15px"> 
									                            <h5>
										                            <i class="glyphicon glyphicon-star"> </i>
										                        </h5>
					                            			</button>
									                    </td>
									                    <td></td>
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