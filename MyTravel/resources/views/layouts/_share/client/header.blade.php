<div class="headnofix">
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
			<a href="">
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
