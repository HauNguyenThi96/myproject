@extends('layouts.client')
@section('title','trang chủ')
@section('slide')
<!-- begin slider  -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
		<!-- data-ride:bắt đầu hiệu ứng khi load trang -->
		<!-- data-interval:thời gian chuyển động giữa các slide -->
		<!-- phần 1:chỉ số ảnh -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<!-- <li data-target="#mycarousel" data-slide-to="2"></li> -->
		</ol>
		<!-- phần 2:các ảnh -->
		<div class="carousel-inner">

			<div class="item active">
				<img src="{{asset('travel/images/slide/promotion-beach.jpg')}}" alt="">
				<div class="carousel-caption">
					<h3>
					SỰ KIỆN NGÀY HỘI CHÀO HÈ 2018</h3>
					<p>  Chỉ diễn ra ngày 12 - 13/5/2018</p>
					<a href="" class="btn btn-warning btn-lg">Xem Thêm</a>
				</div>
			</div>


			<div class="item">
				<img src="{{asset('travel/images/slide/promotion-beach.jpg')}}" alt="">
				<div class="carousel-caption">
					<h3> KHÁM PHÁ NƯỚC NGA</h3>
					<p> 13 ngày - 79.990.000đ</p>
					<a href="" class="btn btn-warning btn-lg">Xem Thêm</a>
				</div>
			</div>

		</div>	
		<!-- end ảnh -->
		<!-- Carousel controls -->
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
<!-- end -slider -->
@endsection
@section('content')
<section class="list-news">
	<div class="new-title text-center">
		<h4>Tin tức du lịch</h4>
	</div>
	<div class="container">
		<div class=" row news-body">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<a href="#">
					<img src="{{asset('travel/images/news/Oshino-Hakkai.jpg')}}" alt="">
				</a>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="frame-news">
					<div class="title-news">
						<h2>
							<a href="">
								HÀNH TRÌNH TUYỆT ĐẸP THƯỞNG NGOẠN TRỌN MÙA THU NHẬT BẢN
							</a>
						</h2>
						<div class="news-date">02/7/2018</div>
					</div>
					<div class="summary-body">
						Là quốc gia nổi tiếng nhất Đông Bắc Á với những cung đường lá vàng, lá đỏ tuyệt đẹp, những hồ nước thu trong xanh… một hành trình mang đến cho du khách sự thưởng ngoạn trọn vẹn những vẻ đẹp đặc trưng của mùa thu xứ sở mặt trời mọc, hành trình từ Tokyo đến thành phố Fukushima.
					</div>
					<div class="more-news">
						<a href="{{route('news.details')}}">
							Xem tiếp &nbsp&nbsp  
							<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>			
	</div>
</section>
@endsection