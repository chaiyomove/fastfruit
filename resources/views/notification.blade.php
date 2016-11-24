@extends('layouts/master')
@section('content')
			<section class="noo-page-heading eff heading-3">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">การแจ้งเตือน</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce single-product noo-shop-main">
					<div class="container">
						<div class="row">
						<div class="noo-main col-md-3"></div>
						<div class="noo-main col-md-6">
							<div class="widget commerce widget_products">
								<h3 class="widget-title">รายการแจ้งเตือน</h3>
									<ul class="product_list_widget">

										@foreach ($notifications as $key => $notification)
											@if ($notification->seenStatus == 0)
												@if ($notification->idNotiType == 1)
													<li>
														<a href="{{url('profile',[$notification->idOtherUser])}}">
															<img width="100" height="100" src="{{App\User::find($notification->idOtherUser)->userPicture}}" alt="" /> 
															<span class="product-title">{{App\User::find($notification->idOtherUser)->firstName}} {{App\User::find($notification->idOtherUser)->lastName}}</span>
														</a>
														<span class="amount">ได้เริ่มติดตามคุณเมื่อ {{$notification->created_at->diffForHumans()}} </span>
													</li>
												@endif
												@if ($notification->idNotiType == 2)
													<li>
														<a href="{{url('profile',[$notification->idOtherUser])}}">
															<img width="100" height="100" src="{{App\User::find($notification->idOtherUser)->userPicture}}" alt="" /> 
															<span class="product-title">{{App\User::find($notification->idOtherUser)->firstName}} {{App\User::find($notification->idOtherUser)->lastName}}</span>
														</a>
														<span class="amount">ได้เริ่มติดตามสวนของคุณเมื่อ {{$notification->created_at->diffForHumans()}} </span>
													</li>
												@endif
												@if ($notification->idNotiType == 6)
													<li>
														<a href="{{url('profile',[$notification->idOtherUser])}}">
															<img width="100" height="100" src="{{App\User::find($notification->idOtherUser)->userPicture}}" alt="" /> 
															<span class="product-title">{{App\User::find($notification->idOtherUser)->firstName}} {{App\User::find($notification->idOtherUser)->lastName}}</span>
														</a>
														<span class="amount">ได้เพิ่มสวนใหม่เมื่อ {{$notification->created_at->diffForHumans()}} </span>
													</li>
												@endif
												@if ($notification->idNotiType == 7)
													<li>
														<a href="{{url('profile',[$notification->idOtherUser])}}">
															<img width="100" height="100" src="{{App\User::find($notification->idOtherUser)->userPicture}}" alt="" /> 
															<span class="product-title">{{App\User::find($notification->idOtherUser)->firstName}} {{App\User::find($notification->idOtherUser)->lastName}}</span>
														</a>
														<span class="amount">ได้เพิ่มรอบการผลิตใหม่เมื่อ {{$notification->created_at->diffForHumans()}} </span>
													</li>
												@endif
											@endif
										@endforeach								
									</ul>
								</div>
							</div>
							<div class="noo-main col-md-3"></div>
						</div>
					</div>
				</div>
			</div>
@endsection