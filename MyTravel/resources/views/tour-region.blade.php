@extends('layouts.client')
@section('title','Tour theo miền')
@section('slide')
<!-- begin page title -->
<!-- begin slider  -->
	<div class="slide-img">
		<img src="{{asset('travel/images/cover-tour-halong.jpg')}}" alt="">
	</div>
	<div class="bg-img">
		<p class="txt-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga necessitatibus, ab quaerat iure sint nostrum vel recusandae maxime odit. Ipsam quae minima provident illum ipsum dolor sint odit placeat optio!</p>
	</div>
<!-- end page title -->
@endsection
@section('content')
<div class="sc-main">
	<div class="container">
		<div class="row">
			{{-- <aside class="col-sm-3 col-md-3 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title panel-primary">Tìm kiếm</h3>
					</div>
					<div class="panel-body">
						<form action="" method="POST">
							<div class="input-group txt-search">
								<input type="text" class="form-control" placeholder="Điểm đến" value="">
								<span class="input-group-addon">
									<i class="fa fa-search" aria-hidden="true"></i>
								</span>
							</div>
							<div class="input-group txt-search date" data-provide="datepicker">
								<input type="text" name="Date go" placeholder="MM/DD/YY" class="form-control">
								<span class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</span>
							</div>
							<div class="input-group txt-search">
								<input type="date" name="Date go" placeholder="MM/DD/YY" class="form-control">
								<span class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</span>
							</div>
							<div class="col-xs-12">
								<button type="submit" class="btn btn-warning btn-block" name="search">Search</button>
							</div>

						</form>
					</div>
				</div>
				
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title panel-primary">Gía</h3>
					</div>
					<div class="panel-body">
						<div class="seachFillter txt-search">
							<select name="" id="" class="form-control cost-select">
								<option value="0">100</option>
								<option value="1">200</option>
								<option value="2">300</option>
								<option value="3">400</option>
							</select>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title panel-primary">Tour đã xem</h3>
					</div>
					<div class="panel-body">
						<div class="col-sm-4 new-img">
							<img src="../../images/Halong-hn.jpg" alt="">
						</div>
						<div class="new-sc col-sm-8">
							<h6 class=""><a href="">DU LỊCH HÀ NỘI - HẠ LONG - SAPA</a></h6>
							<p>
								Thời gian : 5 ngày 4 đêm
								<br>
								Phương tiện : Hàng không Vietjet
							</p>
						</div>
					</div>
				</div>
			
				
			</aside> --}}
			
			<section class="col-md-12 col-sm-12 col-xs-12">
				<div class="row ">
					<div class="col-xs-12">
						<!-- begin cotent 1 -->
						
						<div class="sc-content">
							<div class="col-md-4 col-sm-4 col-xs-12 sc-img">
									<a href="#">
										<img src="{{asset('travel/images/Halong-hn.jpg')}}" alt="">
									</a>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12 sc-body">
								<div class="row">
									<div class="col-xs-12">
										<div class="body-left">
											<h4 class="media-heading"><a href="">DU LỊCH HÀ NỘI - HẠ LONG - SAPA</a></h4>
											<span>TP. HỒ CHÍ MINH - HÀ NỘI | HẠ LONG | SAPA</span><br>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 col-sm-9 body-left-detail">
										<p>
											Tham quan Quốc Tử Giám - từng là trung tâm thờ tự và giáo... 
											<br>
											Thời gian : 5 ngày 4 đêm
											<br>
											Phương tiện : Hàng không Vietjet
										</p>
										<div class="date-dif col-md-9 col-sm-9">
											<ul class="date-tour-details">
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
										</div><br>
										<div id="date-more">
											Xem thêm...
										</div>
										<div class="list-datemore">
											<div class="date-dif col-md-9 col-sm-9">
												<ul class="date-tour-details">
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
									<div class="col-md-3 col-sm-3 body-right text-center">
										<div class="ft-sr">Đánh giá<br>
											<a href="">
												<i class="fa fa-star-o" aria-hidden="true"></i>
												<i class="fa fa-star-o" aria-hidden="true"></i>
												<i class="fa fa-star-o" aria-hidden="true"></i>
												<i class="fa fa-star-o" aria-hidden="true"></i>
												<i class="fa fa-star-o" aria-hidden="true"></i>
											</a>	
										</div>
										<a href="{{route('details')}}" class="btn btn-detail">Xem Chi tiết</a>
									</div>
								</div>	
								<div class="frame-sale">
									<div class="corner"></div>
									<div class=" ribbon ribbon-ct">
										Giảm giá
									</div>
								</div>													
							</div>
						</div>
					</div>
				</div>
							<!-- end nội dung 1 -->		
				<!-- page -->
				<div class="page">
					<div class="col-md-6 col-sm-6 col-md-offset-6">
						<nav>
							<ul class="page-tion">
								<li class="page-item"><a  href="#">Previous</a></li>
								<li class="page-item"><a href="#">1</a></li>
								<li class="page-item"><a href="#">2</a></li>
								<li class="page-item"><a href="#">Next</a></li>
							</ul>
						</nav>

					</div>
				</div>
			</section>

		</div>
	</div>
</div>
@endsection