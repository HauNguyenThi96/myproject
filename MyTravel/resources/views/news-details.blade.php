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
		<div class="row">
			<div class="col-md-9 col-sm-9">
				<div class="frame-news">
					<div class="title-news">
						<h2>
							HÀNH TRÌNH TUYỆT ĐẸP THƯỞNG NGOẠN TRỌN MÙA THU NHẬT BẢN
						</h2>
						<div class="news-date">02/7/2018</div>
					</div>
					<div class="summary-body">
						<i>Là quốc gia nổi tiếng nhất Đông Bắc Á với những cung đường lá vàng, lá đỏ tuyệt đẹp, những hồ nước thu trong xanh… một hành trình mang đến cho du khách sự thưởng ngoạn trọn vẹn những vẻ đẹp đặc trưng của mùa thu xứ sở mặt trời mọc, hành trình từ Tokyo đến thành phố Fukushima.</i>
					</div>
				</div>	
				<div class="details-new-body">
					<div class="col-xs-12">
						<div class="details">
							Được biết đến là nơi ngắm nhìn toàn cảnh núi Phú Sĩ rõ nhất, gần nhất và hoàn hảo nhất, làng cổ Oshino Hakkai và hồ Kawaguchiko còn là nơi thưởng ngoạn sắc thu tuyệt đẹp của “xứ Phù Tang”. Cảnh sắc nơi đây tựa khuôn mẫu cho các bức tranh thủy mặc có mây trời, sông hồ, cây cỏ.
						</div>
						<div class="col-xs-12">
							<div class="img-news">
								<img src="{{asset('travel/images/news/1-Oshino-Hakkai.jpg')}}" alt="">
							</div>
							
						</div>
						<div class="clearfix"></div>
						<div class="details">
							Hàng năm, Oshino Hakkai thu hút một lượng lớn khách du lịch tới thăm. Tuy nhiên, ngôi làng cổ vẫn giữ được vẻ trầm mặc và bình yên vốn có. Trong làng có tám hồ nước, bắt nguồn từ nước băng tuyết tan trên đỉnh núi Phú Sĩ. Mỗi hồ nước được bao quanh bởi những ngôi nhà cổ xưa rêu phủ nóc mái, những bụi thông xanh thẫm, những bụi cây bonsai đủ dáng hình uốn lượn nghệ thuật, guồng nước gỗ xoay vòng tạo nên tiếng nước chảy róc rách vui tai… Bao quanh làng là những hàng cây cổ thụ xanh, vàng, đỏ điểm sắc xòe tán rộng soi mình xuống hồ nước tĩnh lặng.
						</div>
						<div class="col-xs-12">
							<div class="img-news">
								<img src="{{asset('travel/images/news/2-Kawaguchiko-lake.jpg')}}" alt="">
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 new-sidebar">
				<div class="sidebar">
					Tin mới
				</div>
				<div class="row hot-news">
					<div class="col-md-4">
						<a href="">
							<img src="{{asset('travel/images/news/1-Oshino-Hakkai.jpg')}}" alt="">
						</a>
					</div>
					<div class="col-md-8 hot-news-title">
						<a href="">
							Chắp cánh ước mơ' cùng Trung Tâm Tư Vấn Du Học Vietravel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection