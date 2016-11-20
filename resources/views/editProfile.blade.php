@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">แก้ไขโปรไฟล์</h1>
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
										<h2>แก้ไขโปรไฟล์</h2>
										<form class="register" enctype="multipart/form-data" method="POST" action="{{url('user',[Auth::user()->id])}}">
										<input type="hidden" name="_method" value="PATCH">
										{{ csrf_field() }}
											<div class="form-row form-row-wide">
												<label for="reg_fname">
													ชื่อ
													<span class="required">*</span>
												</label>
												<input type="text" class="input-text" name="firstName" id="reg_fname" value="{{Auth::user()->firstName}}" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_lname">
													นามสกุล
													<span class="required">*</span>
												</label>
												<input type="text" class="input-text" name="lastName" id="reg_lname" value="{{Auth::user()->lastName}}" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_email">
													รหัสบัตรประชาชน
													<span class=""></span>
												</label>
												<input type="text" class="input-text" name="citizenId" id="reg_email" value="{{Auth::user()->citizenId}}" />
											</div>
											<div class="form-row form-row-wide">
												<label for="reg_password">
													โทรศัพท์
													<span class="required">*</span>
												</label>
												<input type="text" class="input-text" name="phone" id="reg_email" value="{{Auth::user()->phone}}" placeholder="ตัวเลขเท่านั้น"/>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													ที่อยู่
													<span class="required">*</span>
													<textarea name="address" class="input-text" style="resize: none;">
														{{Auth::user()->address}}
													</textarea>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													จังหวัด
													<span class="required">*</span>
													<select name="idProvince" id="idProvince" class="form-matching">
														<option value="" selected>กรุณาเลือก</option>	
											 		@foreach ($provinces as $province)
											 			@if ($province->idProvince == Auth::user()->idProvince)
											 				<option value="{{$province->idProvince}}" selected>{{$province->provinceName}}</option>
											 			@else
												 			<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
											 			@endif
											 		@endforeach	
													</select>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													รูปโปรไฟล์
													<span class=""></span>
													<div>
														<input name="picture" id="exampleInputFile" type="file" />
													</div>
												</label>
											</div>
											<div class="form-row">
												<input type="submit" class="button" value="บันทึก" />
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>-  -</h4>
							<h3></h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>
@endsection