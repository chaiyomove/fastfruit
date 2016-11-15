@extends('layouts/master')
@section('content')
<link rel="stylesheet" href="{{asset('css/main.css')}}">

			<section class="noo-page-heading eff">
				<div class="container">
					<div class="noo-heading-content">
						<h1 class="page-title eff">เพิ่มสวน</h1>
					</div>
				</div>
			</section>
			<div class="main">
				<div class="commerce commerce-account noo-shop-main pt-5 pb-7">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-12">
								<div class="col-md-3"></div>
								<div id="addOrchard">
	                				<div class="col-md-6">
	                					<h2>เพิ่มสวน</h2>
	                					<form method="POST" enctype="multipart/form-data" action="{{url('/addorchard')}}">
										{{ csrf_field() }}
										<input type="hidden" name="idUser" value="{{Auth::user()->id}}">
	                						<div class="form-row form-row-wide">
												<label for="username">
													ชื่อสวน :
													<span class="required">*</span>
													<input type="text" class="input-text" name="nameOrchard" id="username" value="{{old('nameOrchard')}}" style="width: 70%; float: right;" />
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													รายละเอียดสวน :
													<span class="required">*</span>
													<textarea name="description" class="input-text" style="resize: none; width: 70%; float: right;">{{old('description')}}</textarea>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													พื้นที่สวน :
													<span class="required">*</span>
													<input type="text" class="input-text" name="area" id="username" placeholder="หน่วยเป็นไร่" value="{{old('area')}}" style="width: 70%; float: right;" />
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													อัพโหลดรูป :
													<span class="required">*</span>
													<div style="float: right;">
														<input name="pictures[]" id="exampleInputFile" type="file" />
														<input name="pictures[]" id="exampleInputFile" type="file" />
														<input name="pictures[]" id="exampleInputFile" type="file" />
														<input name="pictures[]" id="exampleInputFile" type="file" />
													</div>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													โทรศัพท์ :
													<span class="required">*</span>
													<input type="text" class="input-text" name="phone" id="username" placeholder="กรอกหมายเลขโทรศัพท์" value="{{old('phone')}}" style="width: 70%; float: right;" />
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													ที่อยู่สวน :
													<span class="required">*</span>
													<textarea name="address" class="input-text" style="resize: none; width: 70%; float: right;">{{old('address')}}</textarea>
												</label>
											</div>
											<div class="form-row form-row-wide">
												<label for="username">
													จังหวัด :
													<span class="required">*</span>
													<select name="idProvince" id="idProvince" class="form-matching" style="width: 70%; float: right;">
														<option value="0" selected='selected'>กรุณาเลือก</option>
														@foreach ($provinces as $province)
											 			@if ($province->idProvince == old('idProvince'))
												 			<option value="{{$province->idProvince}}" selected>{{$province->provinceName}}</option>				
											 			@else
												 			<option value="{{$province->idProvince}}">{{$province->provinceName}}</option>				
											 			@endif
											 		@endforeach	
													</select>
												</label>
											</div>
											<div>
												<input type="hidden" name="lat" id="lat" >
												<input type="hidden" name="lng" id="lng">
											</div>

											 <script>
													
											   		jQuery(function($) {
											   		    $(document).ready(function() {
													        var center = {lat: -25.363, lng: 131.044 };
													        var curLat;
													        var curLng;

													        // MAP
													        var map = new google.maps.Map(document.getElementById('map'), {
													          zoom: 4,
													          // center: center
													        });
													        // Marker
													        var marker = new google.maps.Marker({
													          // position: center,
													          map: map
													        });
													        // Bubble
													        var infoWindow = new google.maps.InfoWindow({map: map});

											                // Try HTML5 geolocation.
											                if (navigator.geolocation) {
											                  	navigator.geolocation.getCurrentPosition(function(position) {
											                  		curLat = position.coords.latitude;
											                  		curLng = position.coords.longitude;
											                    	var pos = {
											                      		lat: curLat,
											                      		lng: curLng
											                    	};

												                 	//set map,marker   
												                    map.setCenter(pos);
												                    marker.setPosition(pos);

												                    //set bubble
												                    infoWindow.setPosition(pos);
												                    infoWindow.setContent('Location found.');

												                    //set input's value
												                    $("#lat").val(curLat);
												                    $("#lng").val(curLng);
											                  	}, function() {
											                    handleLocationError(true, infoWindow, map.getCenter());
											                  });
											                } else {
											                  // Browser doesn't support Geolocation
											                  handleLocationError(false, infoWindow, map.getCenter());
											                }

											                


											                // map.addListener('click', function(e) {
											                //     var marker = new google.maps.Marker({
											                //       position: e.latLng,
											                //       map: map
											                //     });
											                //     map.panTo(latLng);
											                //   });
											                

											                // function placeMarkerAndPanTo(latLng, map) {
											                //   var marker = new google.maps.Marker({
											                //     position: latLng,
											                //     map: map
											                //   });
											                //   map.panTo(latLng);
											                // }


													       
												    	});
												    });	
											   		
											    </script>		
											    <div id="map"></div>
											<div class="form-row">
												<button type="submit" class="button" style="float: right;">
													เสร็จสิ้น
												</button>
											</div>
	                						<div class="form-row form-row-wide"></div>
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
							<h4>- Medium between orchards and you -</h4>
							<h3>FastFruit</h3>
						</div>
						<img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
					</div>
				</div>
			</div>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWKPwTquIvNcVchkVTbdougmPk9xbOt38&callback=initMap&language=th" async defer>

@endsection