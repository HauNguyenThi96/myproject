@extends('layouts.client')
@section('title','Khuyến mãi')
@section('slide')
	<div class="col-md-12">
		<div class="pageTitle saleTitle">
			<h1>Chương trình khuyến mãi
			</h1>
			<span>
				áp dụng từ ngày 1/7-30/9
			</span>
			<div class="under-border"></div>
		</div>
	</div>
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<aside class="col-md-3 col-sm-3">
				<div class="aside-sale">
					<h5 class="sale-search">Tìn kiếm sản phẩm</h5>
					<div class="list">
						<ul>
							<li>
								<input type="checkbox">
								Tên
							</li>
							<li>
								<input type="checkbox">
								giá < 2000
							</li>
							<li>
								<input type="checkbox">
								giá >3000
							</li>
							<li>
								<input type="checkbox">
					
							</li>
						</ul>
					</div>
				</div>
				
			</aside>
			<section class="col-md-9 col-sm-9">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="box-sale">
							<div class="box-top">
								<h4>KM001</h4>
								<p>
									<span class="">
										Giảm 400.000 VNĐ
									</span>
									<span class="get-sale">
										<a href="">Lấy mã</a>
									</span>
								</p>

							</div>
							<div class="box-bottom">
								<span>
									áp dụng cho các tour từ 12.000.000 Đ
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="box-sale">
							<div class="box-top">
								<h4>KM001</h4>
								<p>
									<span class="">
										Giảm 400.000 VNĐ
									</span>
									<span class="get-sale">
										Lấy mã
									</span>
								</p>

							</div>
							<div class="box-bottom">
								<span>
									áp dụng cho các tour từ 12.000.000 Đ
								</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="box-sale">
							<div class="box-top">
								<h4>KM001</h4>
								<p>
									<span class="">
										Giảm 400.000 VNĐ
									</span>
									<span class="get-sale">
										Lấy mã
									</span>
								</p>

							</div>
							<div class="box-bottom">
								<span>
									áp dụng cho các tour từ 12.000.000 Đ
								</span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="row">
					<div class="content-sale">
						<div class="main-sale">
							<div class="sale-img">
								<a href="#">
									<img src="{{asset('travel/images/Halong-hn.jpg')}}" alt="">
								</a>
								<div class="sale-price">
									SALE 5%
								</div>			
							</div>
							<div class="body-sale">
								<div class="body-left-ct sale-left">
									<h4 class="media-heading"><a href="">DU LỊCH HÀ NỘI - HẠ LONG - SAPA</a></h4>
									<span>TP. HỒ CHÍ MINH - HÀ NỘI | HẠ LONG | SAPA</span><br>

									<p>
										Tham quan Quốc Tử Giám - từng là trung tâm thờ tự và giáo... 
										<br>
										Thời gian : 5 ngày 4 đêm
										<br>
										Phương tiện : Hàng không Vietjet
									</p>
								</div>
								<div class="body-left-list">
									<ul>
										<li>
											<span>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												27/04/2018
											</span>
										</li>
										<li>
											<span>
												<i class="fa fa-calendar" aria-hidden="true"></i>
												9,979,000
											</span>
										</li>
										<li>
											<a href="" class="btn btn-warning btn-tour"><span>Mua Tour</span></a>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="cost-sale">
							<span >
									Hiệu lực: 25/6-30/6/2018
							</span>
							
							<p class="sc-sale">
								Gía chỉ còn :9,000,000
								(áp dụng cho các tour từ 12.000.000 Đ)
							</p>
						</div>	
					</div>	
				</div>			
			</section>
		</div>	
	</div>	
@endsection