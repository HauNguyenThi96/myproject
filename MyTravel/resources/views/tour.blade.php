@extends('layouts.client')
@section('title','Tour nước ngoài ')
@section('slide')
<!-- begin page title -->
<!-- begin slider  -->
<div class="slide-img">
	<img src="{{asset('travel/images/cover-tour-halong.jpg')}}" alt="">
</div>
<div class="bg-img">
	<h5 class="text-bg">Tour trong nước</h5>
</div>
<!-- end page title -->
@endsection
@section('content')
	<section class="search-tour">
		<div class="panel-tour">
			<div class="tour-heading">
				<h5 class="title-search">Bạn muốn đến đâu?</h5>
			</div>
			<div class="toursr-body">
				<form action="">
					<select name="" id="" class="form-control sr-tour">
						<option value="">Điểm xuất phát</option>
						<option value="1">Hà Nội</option>
						<option value="2">Hồ Chí Minh</option>
					</select>
					<select name="" id="" class="form-control sr-tour">
						<option value="">Điểm đến</option>
						<option value=""></option>
					</select>
					<input type="date" name="" placeholder="ngày khởi hành" class="form-control sr-tour">			
					<select name="" id="" class="form-control sr-tour">
						<option value="">Gía tour</option>
						<option value="">100</option>
						<option value="">100</option>
						<option value="">100</option>
					</select>
					<button type="" class="btn btn-danger">Tìm kiếm</button>
				</form>
			</div>				
		</div>		
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="tour-region">
					<div class="section-title">
						<div class="tour-title">
							<span class="title-south">			
								Du lịch miền bắc
								<a href="{{route('tour-region')}}" class="continue-tour">Xem thêm...</a>	
							</span>	
							<div class="hr"></div>						
						</div>
					</div>
					<div class="content-tour">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section col-md-12 col-sm-12 col-xs-12 ">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">
										<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													<span>Tour: 5 ngày 4 đêm</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class="overlay-right">
													<span>
														 12.000.000 đ
													</span>
												<div class=" btn-region">
													<a href="#" class="btn btn-ct">Mua Tour</a>
												</div>
											</div>
											

										</div>
									</div>
									
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section col-md-12 col-sm-12 col-xs-12 ">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">
										<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													<span>Tour: 5 ngày 4 đêm</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class="overlay-right">
													<span>
														 12.000.000 đ
													</span>
												<div class=" btn-region">
													<a href="#" class="btn btn-ct">Mua Tour</a>
												</div>
											</div>
											

										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section col-md-12 col-sm-12 col-xs-12 ">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">
										<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													<span>Tour: 5 ngày 4 đêm</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class="overlay-right">
													<span>
														 12.000.000 đ
													</span>
												<div class=" btn-region">
													<a href="#" class="btn btn-ct">Mua Tour</a>
												</div>
											</div>
											

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- tour miền nam --}}
				<div class="tour-region">
					<div class="section-title">
						<div class="tour-title">
							<span class="title-south">			
								Du lịch miền nam
								<a href="#" class="continue-tour">Xem thêm...</a>	
							</span>	
							<div class="hr"></div>						
						</div>
					</div>
					<div class="content-tour">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section col-md-12 col-sm-12 col-xs-12 ">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">
										<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													<span>Tour: 5 ngày 4 đêm</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class="overlay-right">
													<span>
														 12.000.000 đ
													</span>
												<div class=" btn-region">
													<a href="#" class="btn btn-ct">Mua Tour</a>
												</div>
											</div>
											

										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section col-md-12 col-sm-12 col-xs-12 ">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">
										<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													<span>Tour: 5 ngày 4 đêm</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class="overlay-right">
													<span>
														 12.000.000 đ
													</span>
												<div class=" btn-region">
													<a href="#" class="btn btn-ct">Mua Tour</a>
												</div>
											</div>
											

										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section col-md-12 col-sm-12 col-xs-12 ">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">
										<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													<span>Tour: 5 ngày 4 đêm</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class="overlay-right">
													<span>
														 12.000.000 đ
													</span>
												<div class=" btn-region">
													<a href="#" class="btn btn-ct">Mua Tour</a>
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
	</section>	
@endsection