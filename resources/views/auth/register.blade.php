@extends('layouts/master')
@section('content')
<!-- pop-up -->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>

<!-- pop-up -->


										

		<!--banner-->
		<div class="banner-section">
			<div class="container">
			</div>
		</div>
		<!--banner-->
		<br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="modal-body real-spa">
						<div class="login-grids">
							<div class="login">									
								<div class="login-right">
									<form  method="POST" action="{{ url('/register') }}">
									 {{ csrf_field() }}
										<h3>สมัครสมาชิก</h3>
										<input type="text" name="firstName" placeholder="ชื่อ" required="">
										<input type="text" name="lastName" placeholder="นามสกุล" required="">
										<input type="text" name="email" placeholder="อีเมล์" required="">	
										<input type="password" name="password" placeholder="รหัสผ่าน" required="">	
										<input type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required="">	
										
										<input type="submit" value="สมัครสมาชิก" >
									</form>
								</div>																
							</div>								
						</div>
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			
		</div>
@endsection

	
		