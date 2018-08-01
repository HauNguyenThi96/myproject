@extends('layouts.client')
@section('title','trang chủ')
@section('slide')
<style>
	.headnofix{
		display: none;
	}
	.headfix{
		position:fixed;
		width: 100%;
		z-index: 999;
	}
	.headfix .main-menu>ul>li >a{
		color:#fff;
	}
</style>
<div class="headfix">
	<div class="header-top">
		<div class="container">
			<div class="header-top-left col-md-4 col-sm-4">
				<nav class="menu">
					<ul>
						<li>
							<a href="">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								Email
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa fa-phone" aria-hidden="true"></i>
							HotLine:01695722171</a>
						</li>
					</ul>
				</nav>					
			</div>
			<div class="header-top-right col-md-4 col-sm-4">
				<nav class="menu">
					<ul>
						<li><a href="" >Chọn điểm khởi hành</a></li>
						<li><a href="{{route('login')}}" id="login">Đăng nhập</a></li>
						<li><a href="">Ngôn ngữ</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="header-main container">
		<div class="logo col-sm-2">
			<a href="index.php">
				<img src="{{asset('travel/images/Logo.png')}}" alt="Trải nghiệm cùng chúng tôi">
			</a>
		</div>
		<div class="col-sm-10">
			<nav class="main-menu">
				<ul class="text-center">
					<li class="active"><a href="{{route('homepage')}}">Trang chủ</a></li>
					<li class="dropdown-tour mega-dropdown"><a href="tour.php" >Tour Trong nước</a>
						<div class="dropdown-menu mega-dropdown-menu">
							<div class="col-sm-3">
								<ul>
									<li class="dropdown-header">Miền Bắc</li>
									<li><a href="">Hà Nội</a></li>
									<li><a href="">Hạ Long</a></li>
									<li><a href="">Đà Nẵng</a></li>
								</ul>
							</div>	
							<div class="col-sm-3">
								<ul>
									<li class="dropdown-header">Miền Bắc</li>
									<li><a href="">Hà Nội</a></li>
									<li><a href="">Hạ Long</a></li>
									<li><a href="">Đà Nẵng</a></li>
								</ul>
							</div>		
							<div class="col-sm-3">
								<ul>
									<li class="dropdown-header">Miền Bắc</li>
									<li><a href="">Hà Nội</a></li>
									<li><a href="">Hạ Long</a></li>
									<li><a href="">Đà Nẵng</a></li>
								</ul>
							</div>		
							<div class="col-sm-3">
								<ul>
									<li class="dropdown-header">Miền Bắc</li>
									<li><a href="">Hà Nội</a></li>
									<li><a href="">Hạ Long</a></li>
									<li><a href="">Đà Nẵng</a></li>
								</ul>
							</div>			
						</div> 
					</li>
					<li><a href="{{route('tour')}}">Tour Ngoài Nước</a></li>
					<li><a href="{{route('promotion')}}">Khuyến Mại</a></li>
					<li><a href="{{route('hotel')}}">Khách Sạn</a>
						<ul class="sub-menu">
							<li><a href="">Trong nước</a></li>
							<li><a href="">Nước ngoài</a></li>
						</ul>
					</li>
					<li><a href="{{route('new')}}">Tin tức</a></li>
					<li><a href="{{route('contact')}}">Liên hệ</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
	 <div id="myCarousel" class="carousel slide" data-ride="carousel"  data-type="multi" data-interval="10000"> 
		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<img src="{{asset('travel/images/slide/slider-templates-nga.jpg')}}" alt="">
				<div class="carousel-caption">
					<h3>
					SỰ KIỆN NGÀY HỘI CHÀO HÈ 2018</h3>
					<p>  Chỉ diễn ra ngày 12 - 13/5/2018</p>
					<a href="#" class="btn btn-warning btn-lg">Xem Thêm</a>
				</div>
			</div>


			<div class="item ">
				<img src="{{asset('travel/images/slide/slider-templates-nga.jpg')}}" alt="">
				<div class="carousel-caption">
					<h3> KHÁM PHÁ NƯỚC NGA</h3>
					<p> 13 ngày - 79.990.000đ</p>
					<a href="#" class="btn btn-warning btn-lg">Xem Thêm</a>
				</div>
			</div>

		</div>	
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	     </a> 
	 </div> 
{{--end slider --}}

@endsection
@section('content')
<div class="promotionWrapper1">
	<div class="container">
		<div class="row">
			<!-- begin tour nước ngoài -->
			<div class="col-xs-12">
				<div class="section-title text-center">
					<h2><span>
						du lịch nước ngoài
					</span></h2>
					<p>Rực rỡ 5 châu
						<a href="" >Xem Thêm</a>
					</p>
				</div>
				<div class="content-tour">
					<div class="row">
						<div class="owl-carousel">
							<div class="item col-xs-12 ">
								<div class="tour-detail item">
									<div class="img-section">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">				
										<h4><a href="">
												DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
									</div>
									<div class="tour-sc">
									<div class="overlay">
										<div class="overlayInfo">
											<h5>
												Gía
												<span>12.000.000đ</span>
											</h5>
											<p>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												6/5/2018
											</p>

										</div>
										<div class=" btn-view ">
											<a href="#" class="btn btn-ct">Chi tiết</a>
										</div>

									</div>
									</div>
								</div>
							</div>
							<div class="item col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section">
									<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">				
									<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
										</a>
									</h4>
									</div>
									<div class="tour-sc">
									<div class="overlay">
										<div class="overlayInfo">
											<h5>
												Gía
												<span>12.000.000đ</span>
											</h5>
											<p>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												6/5/2018
											</p>

										</div>
										<div class=" btn-view ">
											<a href="#" class="btn btn-ct">Chi tiết</a>
										</div>

									</div>
									</div>
							</div>
							</div>
							<div class="item col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">				
										<h4><a href="">
												DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
									</div>
									<div class="tour-sc">
										<div class="overlay">
											<div class="overlayInfo">
												<h5>
													Gía
													<span>12.000.000đ</span>
												</h5>
												<p>
													<i class="fa fa-calendar" aria-hidden="true"></i>
													6/5/2018
												</p>

											</div>
											<div class=" btn-view ">
												<a href="#" class="btn btn-ct">Chi tiết</a>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- <div class="owl-btn">
						<button type="button" id="btn1-owl">&#10094;</button>
						<button type="button"  id="btn2-owl">&#10095;</button>
					</div> --}}					
				</div>
			</div>
			<!-- begin tour trong nước -->
			<div class="col-xs-12">
				<div class="section-title text-center">
					<h2><span>
						du lịch trong nước
					</span></h2>
					<p>Vui hè quê hương
						<a href="" >Xem Thêm</a>
					</p>
				</div>
				<div class="content-tour">
					<div class="row">
						<div class="owl-carousel">
							<div class="item col-xs-12 ">
								<div class="tour-detail item">
									<div class="img-section">
										<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">				
										<h4><a href="">
												DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
											</a>
										</h4>
									</div>
									<div class="tour-sc">
									<div class="overlay">
										<div class="overlayInfo">
											<h5>
												Gía
												<span>12.000.000đ</span>
											</h5>
											<p>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												6/5/2018
											</p>

										</div>
										<div class=" btn-view ">
											<a href="#" class="btn btn-ct">Chi tiết</a>
										</div>

									</div>
									</div>
								</div>
							</div>
							<div class="item col-xs-12 ">
								<div class="tour-detail">
									<div class="img-section">
									<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">				
									<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
										</a>
									</h4>
									</div>
									<div class="tour-sc">
									<div class="overlay">
										<div class="overlayInfo">
											<h5>
												Gía
												<span>12.000.000đ</span>
											</h5>
											<p>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												6/5/2018
											</p>

										</div>
										<div class=" btn-view ">
											<a href="#" class="btn btn-ct">Chi tiết</a>
										</div>

									</div>
									</div>
							</div>
							</div>
							<div class="item col-xs-12 ">
								<div class="tour-detail">
								<div class="img-section">
									<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}">				
									<h4><a href="">
											DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW]
										</a>
									</h4>
								</div>
								<div class="tour-sc">
									<div class="overlay">
										<div class="overlayInfo">
											<h5>
												Gía
												<span>12.000.000đ</span>
											</h5>
											<p>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												6/5/2018
											</p>

										</div>
										<div class=" btn-view ">
											<a href="#" class="btn btn-ct">Chi tiết</a>
										</div>

									</div>
								</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
			<!-- -end tour trong nước -->
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="promotionWrapper" style="background-image:url('travel/images/slide/slider-templates-vinhhy-nhatrang.jpg')}};">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="promotionTable">
					<div class="promotionInfo">
						<span>Mua Tour Sớm</span>
						<h2>Ưu đãi lớn</h2>
						<p>Giảm giá sau khi mua sớm và mua theo nhóm</p>
						<a href="" class="btn btn-tour">Xem Thêm</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Tuyến điểm du lịch -->
<div class="clearfix"></div>
<div class="RouteTour">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title text-center">
					<h2><span>
						Tuyến điểm du lịch
					</span></h2>
					<p>Hãy để mỗi hành trình là 1 trải nghiệm
						<!-- <a href="" >Xem Thêm</a> -->
					</p>
				</div>
				<div class="RouteTour-content">
					<div class="row">
						<div class="col-md-6">
							<div class="Route-img">
								<img src="{{asset('travel/images/Westminster-london.jpg')}}" alt="">
								<div class="sticker">
									Anh
								</div>
							</div>


						</div>
						<div class="col-md-6">
							<img src="{{asset('travel/images/Halong-Bay-Vietnam_433429624.jpg')}}" alt="">
							<div class="sticker">
								Việt Nam
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end tuyến diểm du lịch -->
<div class="content-view">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="tour-view">
					<div class="img-section ">
						<img src="{{asset('travel/images/saigontourist-anh-4.jpg')}}">
					</div>
					<div class="view-body">
						<a href="" class="tour-destination">Whiskey, The Beatles và mùa Đông London</a>
						<p class="summary">Hành trình đến Vương quốc Anh vào mùa Đông là cơ hội để bạn tận hưởng không khí trong lành, tránh đám đông khách du...</p>
					</div>

				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="tour-view">
					<div class="img-section ">
						<img src="{{asset('travel/images/saigontourist-anh-4.jpg')}}">
					</div>
					<div class="view-body">
						<a href="" class="tour-destination">Whiskey, The Beatles và mùa Đông London</a>
						<p class="summary">Hành trình đến Vương quốc Anh vào mùa Đông là cơ hội để bạn tận hưởng không khí trong lành, tránh đám đông khách du...</p>
					</div>

				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="tour-view">
					<div class="img-section ">
						<img src="{{asset('travel/images/saigontourist-anh-4.jpg')}}">
					</div>
					<div class="view-body">
						<a href="" class="tour-destination">Whiskey, The Beatles và mùa Đông London</a>
						<p class="summary">Hành trình đến Vương quốc Anh vào mùa Đông là cơ hội để bạn tận hưởng không khí trong lành, tránh đám đông khách du...</p>
					</div>

				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="tour-view">
					<div class="img-section ">
						<img src="{{asset('travel/images/saigontourist-anh-4.jpg')}}">
					</div>
					<div class="view-body">
						<a href="" class="tour-destination">Whiskey, The Beatles và mùa Đông London</a>
						<p class="summary">Hành trình đến Vương quốc Anh vào mùa Đông là cơ hội để bạn tận hưởng không khí trong lành, tránh đám đông khách du...</p>
					</div>

				</div>
			</div>
		</div>
	</div>		
</div>
<!-- tiêu chí -->
<div class="Select">
	<div class="container">
		<div class="row">
			<div class="Title-select">
				<h4>
					Lựa chọn Tour chúng tôi
				</h4>
			</div>
			<div class="col-md-4">
				<div class="select-one">
					<div class="select-left">
						1
					</div>
					<div class="select-right">
						<h5>Mạng bán tour số 1 Việt Nam</h5>
						<p>ứng dụng công nghệ mới nhất</p>
					</div>
				</div>
				<div class="select-one">
					<div class="select-left">
						2
					</div>
					<div class="select-right">
						<h5>Thanh Toán An toàn </h5>
						<p>Liên kết với các tổ chức tài chính</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="select-one">
					<div class="select-left">
						3
					</div>
					<div class="select-right">
						<h5>Đặt Tour dễ dàng</h5>
						<p>Đặt tour chỉ với 3 bước</p>
					</div>
				</div>
				<div class="select-one">
					<div class="select-left">
						4
					</div>
					<div class="select-right">
						<h5>Sản phẩm đa dạng,chất lượng</h5>
						<p>Đạt chất lượng tốt nhất</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="select-one">
					<div class="select-left">
						5
					</div>
					<div class="select-right">
						<h5>Gía cả đảm bảo </h5>
						<p>Luôn có mứa giá tốt nhất</p>
					</div>
				</div>
				<div class="select-one">
					<div class="select-left">
						6
					</div>
					<div class="select-right">
						<h5>Hỗ trợ 24/7 </h5>
						<p>Hotline và hỗ trợ trực tuyến</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end tiêu chí -->
<!-- begin promotion -->
<div class="promotion">
	<div class="container">
		<h2>Chương trình khuyến mãi</h2>
		<p>Từ ngày 20/5 đến hết ngày 10/6 </p>
		<div class="count-down">
			<span id="clock"></span>

		</div>
	</div>
	<!-- end promotion -->
@endsection
@section('js')
<script>
	
   $(document).ready(function() {
   	$(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 30) {
            $(".headfix .header-main").show();
            $(".headfix .header-top").hide();
            $(".headfix").css("background",'#0a7979');
        } else{
        	 $(".headfix .header-top").show();
        	$(".headfix").css("background",'none');
        }
    });
  });

</script>
@endsection
