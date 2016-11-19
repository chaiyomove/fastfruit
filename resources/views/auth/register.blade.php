@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">สมัครสมาชิก</h1>
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
										<h2>สมัครสมาชิก</h2>
										<form class="register" method="POST" action="{{ url('/register') }}">
											{{ csrf_field() }}
											<div class="form-row form-row-wide">
												<label for="reg_fname">
													ชื่อ
													<span class="required">*</span>
												</label>
												<input type="text" class="input-text" name="firstName" id="reg_fname" value="{{old('firstName')}}" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_lname">
													นามสกุล
													<span class="required">*</span>
												</label>
												<input type="test" class="input-text" name="lastName" id="reg_lname" value="{{old('lastName')}}" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_email">
													อีเมล
													<span class="required">*</span>
												</label>
												<input type="email" class="input-text" name="email" id="reg_email" value="{{old('email')}}" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_password">
													รหัสผ่าน
													<span class="required">*</span>
												</label>
												<input type="password" class="input-text" name="password" id="reg_password" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_password">
													ยืนยันรหัสผ่าน
													<span class="required">*</span>
												</label>
												<input type="password" class="input-text" name="password_confirmation" id="reg_password" />
											</div>
											<div class="form-row">
												<input type="submit" class="button" name="register" value="สมัครสมาชิก" />
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection			