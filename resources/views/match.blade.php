@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">จับคู่สวน</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce commerce-account noo-shop-main pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-12">
								<div id="matching">
	                				<div class="col-md-8">
	                					<h2>เลือกจับคู่</h2>
	                					<form class="login" method="POST" action="{{ url('/login') }}">
	                						<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกผลไม้
														<span class="required">*</span>
													</label>
													<select name="idFruit" id="idFruit" class="form-matching">
														<option value="0" selected='selected'>กรุณาเลือก</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกสายพันธุ์
														<span class="required">*</span>
													</label>
													<select name="idFruitSpecie" id="idFruitSpecie" class="form-matching">
														<option value="0" selected='selected'>กรุณาเลือก</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกจังหวัด
														<span class="required">*</span>
													</label>
													<select name="idProvince" id="idProvince" class="form-matching">
														<option value="0" selected='selected'>กรุณาเลือก</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกเดือนและปี
														<span class="required">*</span>
													</label>
													<div class='input-group date' id='datepickerstart'>
											            <input type='text' class="form-control" name="startDate" id="date" data-select="datepicker" placeholder="ตั้งแต่" />
											            <span class="input-group-addon datepicker" data-toggle="datepicker">
											            	<span class="fa fa-calendar"></span>
											            </span>
											        </div>
											    </div>
											    <div class="form-row form-row-wide">    
											        <div class='input-group date' id='datepickerend'>
											            <input type='text' class="form-control" name="endDate" id="date" data-select="datepicker" placeholder="ถึง" />
											            <span class="input-group-addon datepicker" data-toggle="datepicker">
											                <span class="fa fa-calendar"></span>
											            </span>
											        </div>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														จำนวน
														<span class="required">*</span>
													</label>
													<input type="text" class="input-text" name="email" id="username" value=""/>
												</div>
												<div class="form-row form-row-wide">
													<label for="username">
														GAP
														<span class="required">*</span>
														<select name="unit" class="form-matching" style="width: 60%; float: right;">
															<option value="1" selected='selected'>มี GAP</option>
									   						<option value="2">ไม่มี GAP</option>	
														</select>
													</label>
												</div>
											</div>
											<div class="col-md-4">
		                						<div class="form-row form-row-wide">
													<label for="username">
														เลือกหน่วย
														<span class="required">*</span>
													</label>
													<select name="unit" class="form-matching">
														<option value="0" selected='selected'>หน่วย</option>
														<option value="1">กิโลกรัม</option>
							   							<option value="2">ตัน</option>	
													</select>
												</div>
												<div class="form-row">
													<button type="submit" class="button" style="float: right;">
														เพิ่ม
													</button>
												</div>
											</div>
											<div class="form-row form-row-wide"></div>
										</form>
									</div>
								</div>
								<div id="matching">
	                				<div class="col-md-4">
	                					<h2>ผลไม้ที่สนใจ</h2>
	                					<form class="login" method="POST" action="{{ url('/login') }}">
	                						<div class="form-row form-row-wide">
												
											</div>
											<div class="form-row">
												<button type="submit" class="button" style="float: right;">
													จับคู่
												</button>
											</div>
											<div class="form-row form-row-wide"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
							<div class="pt-2 pb-4">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											<div class="noo-product-grid-wrap commerce product-style">
												<div class="noo-sh-title">
													<img width="40" height="39" src="images/organicfood-2.png" alt=""
													style="margin-bottom: 15px;" />
													<h2>ผลลัพธ์</h2> 
												</div>
												<div class="noo-product-filter masonry-filters" style="margin-top: 0px;">
													<ul class="noo-header-filter" data-option-key="filter">
														<li>
															<a data-option-value="*" href="#all" class="selected">
																<span>All products</span>
															</a>
														</li>
														<li>
															<a data-option-value=".fruit" href="#fruit">
																<span>Fruit</span>
															</a>
														</li>
														<li>
															<a data-option-value=".vegetable" href="#vegetable">
																<span>Vegetable</span>
															</a>
														</li>
														<li>
															<a data-option-value=".bread" href="#bread">
																<span>Bread</span>
															</a>
														</li>
														<li>
															<a data-option-value=".others" href="#others">
																<span>Others</span>
															</a>
														</li>
													</ul>
												</div>
												<div class="noo-product-grid products row product-grid noo-grid-4">
													<div class="fruit organic-fruits masonry-item col-md-4 col-sm-6">
														<div class="noo-product-inner">
															<div class="noo-product-thumbnail">
																<a href="shop-detail.html">
																	<img width="600" height="760" src="images/product/product_1.jpg" alt="" />
																</a>
																<!-- <div class="noo-rating">
																	<div class="star-rating">
																		<span style="width:0%"></span>
																	</div>
																</div> -->
															</div>
															<div class="noo-product-title"> 
																<h3><a href="shop-detail.html">Apples</a></h3>
																<span class="price"><span class="amount">&#36;3.95</span></span>
																<div class="noo-product-action">
																	<div class="noo-action">
																		<a href="#" class="button product_type_simple info_circle_button">
																			<span>ดูรายละเอียด</span>
																		</a>
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