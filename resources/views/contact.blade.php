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

		<div class="content">
			<div class="contact-section">
				<div class="container">
					<!--
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25314.705189576223!2d-122.04163718289803!3d37.52352544242605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbee225b54b73%3A0xd9e9e38c14446fd!2sReal+Estate+Residential+Homes!5e0!3m2!1sen!2sin!4v1453458032800" ></iframe>
					</div>
					-->
					<div class="contact-grids">
						<div class="col-md-8 contact-grid">
							<h5>ติดต่อเรา</h5>
							<br>							
							<form>
								<input type="text" value="ชื่อ " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'ชื่อ';}" required="">
								<input type="email" value="อีเมล์" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'อีเมล์';}" required="">
								<input type="text" value="เบอร์โทรศัพท์" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'เบอร์โทรศัพท์';}" required="">
								<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'รายละเอียดที่จะแจ้ง';}" required="">รายละเอียดที่จะแจ้ง</textarea>
								<input type="submit" value="ส่งอีเมล์" >
							</form>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>

@endsection