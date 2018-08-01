@extends('layouts.client')
@section('title','Thông tin khách sạn')
@section('slide')
slide
@endsection
@section('content')
<div class="Hotel">
	<div class="search-hotel">
		<form action="">
			<input type="text" name="" value="" placeholder="điểm đến" class="form-control hotel-sr">
			<input type="date" name="" value="" placeholder="ngày khởi hành" class="form-control hotel-sr">
			<select name="" id="" class="form-control hotel-sr">
				<option value="">Số sao</option>
				<option value="">*</option>
				<option value="">**</option>
				<option value="">***</option>
			</select>
			<button type="" class="btn btn-danger">Tìm kiếm</button>
		</form>
	</div>
	<div class="title">
		Trang chủ>>Khách sạn việt nam
	</div>
	<div class="Titlehotel">
		<h4>khách sạn việt nam</h4>
	</div>
	<div class="ColHotel">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="hotel-detail">
						<div class="img-hotel">
							<img src="{{asset('travel/images/hotel/27032018_famiana-phu-quocpool.jpg')}}" alt="">
							<div class="frame-cost">
								<span class="cost">3,340,000</span>
							</div>
							<div class="star">
								***
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="content-hotel">
							<div class="title-content">
								<h4>DV PHÒNG KHU BIỂN RESORT FAMIANA 4* PHÚ QUỐC 3N2Đ (Giá bán/phòng 02 khách)</h4>
							</div>

							<div class="hotel-ct">
								<i class="fa fa-clock-o" aria-hidden="true"></i> 2N3Đ |
								<a href="{{route('hotel.details')}}">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									Chi tiết
								</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hotel-detail">
						<div class="img-hotel">
							<img src="{{asset('travel/images/hotel/27032018_famiana-phu-quocpool.jpg')}}" alt="">
							<div class="frame-cost">
								<span class="cost">3,340,000</span>
							</div>

						</div>
						<div class="clearfix"></div>
						<div class="content-hotel">
							<div class="title-content">
								<h4>DV PHÒNG KHU BIỂN RESORT FAMIANA 4* PHÚ QUỐC 3N2Đ (Giá bán/phòng 02 khách)</h4>
							</div>

							<div class="hotel-ct">
								<i class="fa fa-clock-o" aria-hidden="true"></i> 2N3Đ |
								<a href="">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									Chi tiết
								</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="hotel-detail">
						<div class="img-hotel">
							<img src="{{asset('travel/images/hotel/27032018_famiana-phu-quocpool.jpg')}}" alt="">
							<div class="frame-cost">
								<span class="cost">3,340,000</span>
							</div>

						</div>
						<div class="clearfix"></div>
						<div class="content-hotel">
							<div class="title-content">
								<h4>DV PHÒNG KHU BIỂN RESORT FAMIANA 4* PHÚ QUỐC 3N2Đ (Giá bán/phòng 02 khách)</h4>
							</div>

							<div class="hotel-ct">
								<i class="fa fa-clock-o" aria-hidden="true"></i> 2N3Đ |
								<a href="">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									Chi tiết
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection