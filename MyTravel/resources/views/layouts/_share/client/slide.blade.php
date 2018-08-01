<div class="main-wrapper">
	<!-- begin slider  -->
	{{-- <div class="col-sm-12 col-xs-12 "> --}}
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

	{{-- </div> --}}
	<!-- end -slider -->
	<div class="container">
		<div class="col-sm-2 icons">
			<a href="">
				<img src="{{asset('travel/images/premium.png')}}" alt="">
			</a>
			<div class="link-icon">
				<a href="">
					<span class="title-icon">Cao Cấp</span>
				</a>
			</div>
		</div>
		<div class="col-sm-2 icons">
			<a href="">
				<img src="{{asset('travel/images/tietkiem.png')}}" alt="">
			</a>
			<div class="link-icon">
				<a href="">
					<span class="title-icon">Tiết Kiệm</span>
				</a>
			</div>
		</div>
		<div class="col-sm-2 icons">
			<a href="">
				<img src="{{asset('travel/images/giasoc.png')}}" alt="">
			</a>
			<div class="link-icon">
				<a href="">
					<span class="title-icon">Giarm giá</span>
				</a>
			</div>
		</div>
		<div class="col-sm-2 icons">
			<a href="">
				<img src="{{asset('travel/images/duthuyen.png')}}" alt="">
			</a>
			<div class="link-icon1">
				<a href="">
					<span class="title-icon">Du thuyền</span>
				</a>
			</div>

		</div>
		<div class="col-sm-2 icons">
			<a href="">
				<img src="{{asset('travel/images/deluxe.png')}}" alt="">
			</a>
			<div class="link-icon">
				<a href="">
					<span class="title-icon">Cao Cấp</span>
				</a>
			</div>
		</div>
		<div class="col-sm-2 icons">
			<a href="">
				<img src="{{asset('travel/images/premium.png')}}" alt="">
			</a>
			<div class="link-icon1">
				<a href="">
					<span class="title-icon">Cao Cấp</span>
				</a>
			</div>
		</div>
	</div>
</div>