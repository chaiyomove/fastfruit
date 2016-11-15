@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">ติดต่อเรา</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<form class="form" action="{{url('contactus')}}" method="POST">
								{{ csrf_field() }}
									<h3>ติดต่อเรา</h3>
									<div class="row">
										
										<div class="col-md-6 col-sm-12">
											<div class="form-control-wrap your-phone">
												<input type="text" name="subject" value="" size="40" class="form-control" placeholder="ชื่อเรื่อง"/>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-control-wrap your-email">
												<input type="email" name="email" value="" size="40" class="form-control" placeholder="อีเมล"/>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-control-wrap your-message">
												{{-- <input type="text" name="message" value="" size="40" class="form-control" placeholder="ข้อความ"/> --}}
												<textarea name="message" cols="40" rows="10" class="form-control" placeholder="ข้อความ"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<input type="submit" value="ส่งเมล" class="form-control submit btn-primary"/>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
				<div class="noo-footer-shop-now">
					<div class="container">
						<div class="col-md-7">
							<h4>- Medium between orchards and you -</h4>
							<h3>FastFruit</h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>
@endsection