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
									<form method="POST" action="{{ url('/login') }}">
									{{ csrf_field() }}
										<h3>เข้าสู่ระบบ</h3>
										<input type="text" name="email" placeholder="อีเมล์"  required="">	
										<input type="password" name="password" placeholder="รหัสผ่าน" required="">	
										<h4><a href="#">ลืมรหัสผ่าน?</a></h4>
										<h4><a href="#">สมัครสมาชิก</a></h4>
										<div class="single-bottom">
											<input type="checkbox"  id="brand" value="">
											<label for="brand"><span></span>จดจำฉัน</label>
										</div>
										<input type="submit" value="เข้าสู่ระบบ">
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

	
	