@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">เข้าสู่ระบบ</h1>
						<div class="noo-page-breadcrumb eff">
							<a href="index-Fastfruit.html" class="home">FastFruit</a>/<span>เข้าสู่ระบบ</span>
						</div>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce commerce-account noo-shop-main pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-12">
								<div class="col-md-3"></div>
								<div id="customer_login">
	                				<div class="col-md-6">
	                					<h2>เข้าสู่ระบบ</h2>
	                					<form class="login" method="POST" action="{{ url('/login') }}">
	                						{{ csrf_field() }}
	                						<div class="form-row form-row-wide">
												<label for="username">
													อีเมล
													<span class="required">*</span>
												</label>
												<input type="text" class="input-text" name="email" id="username" value="" autofocus/>
											</div>
											<div class="form-row form-row-wide">
												<label for="password">
													รหัสผ่าน
													<span class="required">*</span>
												</label>
												<input class="input-text" type="password" name="password" id="password" />
											</div>
											<div class="form-row">
												<input type="submit" class="button" name="login" value="เข้าสู่ระบบ" />
											</div>
											<div class="lost_password">
												<a href="{{url('/password/reset')}}">ลืมรหัสผ่าน?</a>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>- Every day fresh -</h4>
							<h3>organic food</h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>
@endsection		