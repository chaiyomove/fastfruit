@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">เข้าสู่ระบบ</h1>
						
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

	                					@if (session('status'))
	                					    <div class="alert alert-success">
	                					        {{ session('status') }}
	       										<?php session()->forget('status');  ?>
	                					    </div>
	                					@endif

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
												<a href="{{url('/auth/facebook')}}">
													<button type="button" class="button fblogin" name="fblogin">
														<i class="fa fa-facebook" >&nbsp;</i>เข้าสู่ระบบด้วย Facebook
													</button>
												</a>
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
			</div>
@endsection		