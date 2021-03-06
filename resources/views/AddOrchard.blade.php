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
	                					<form method="POST" enctype="multipart/form-data" action="{{url('/orchard')}}">
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
													<span class=""></span>
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
														<option value="" selected='selected'>กรุณาเลือก</option>
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
															var pos = {lat: 13.755243, lng: 100.495771 };												 
													        var curLat;
													        var curLng;

													        // MAP
													        var map = new google.maps.Map(document.getElementById('map'), {
													          zoom: 8,
													          center: pos,
													        });

													        // Marker
													        var marker = new google.maps.Marker({
													          map: map,
													          position: pos,
													        });

													        // Bubble
													        // var infoWindow = new google.maps.InfoWindow({map: map});

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
												                    // infoWindow.setPosition(pos);
												                    // infoWindow.setContent('Location found.');
												                    
												                    //set input's value
													                $("#lat").val(pos.lat);
													                $("#lng").val(pos.lng);		
												                    
											                  	}, function() {
											                    handleLocationError(true, infoWindow, map.getCenter());
											                  });
											                } else {
											                  // Browser doesn't support Geolocation
											                  handleLocationError(false, infoWindow, map.getCenter());
											                }

											                //Place marker and pan to the click location 
											                map.addListener('click', function(e) {											                    
											                    pos = e.latLng;
											                    marker.setPosition(pos);
											                    // map.panTo(pos);
											                    
											              		//set input's value
												                $("#lat").val(pos.lat());
												                $("#lng").val(pos.lng());	
											                });		

											                google.maps.event.trigger(map, 'resize');
												            map.setCenter(pos);
												        	$("#map").css("width", 500).css("height", 500);
											                										       
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
			</div>
			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWKPwTquIvNcVchkVTbdougmPk9xbOt38&callback=initMap&language=th" async defer>

@endsection