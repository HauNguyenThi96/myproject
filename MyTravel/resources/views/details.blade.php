@extends('layouts.client')
@section('title','Tour')
@section('slide')
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12 ">
				<div class="pageTitle">
					<h1>DU LỊCH CHARTER HÀN QUỐC 4 NGÀY [ĐẢO JEJU]
					</h1>
					<div class="under-border"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- begin content -->
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<section class="col-md-9 col-sm-9">
				<div class="row">
					<div class="col-xs-12">
						<div class="slideShow">
							<img class="slides" src="{{asset('travel/images/Halong-hn.jpg')}}" alt="">
							<img class="slides" src="{{asset('travel/images/vinpearl-resort.jpg')}}" alt="">
							<img class="slides" src="{{asset('travel/images/Halong-Bay-Vietnam_433429624.jpg')}}" alt="">
							<img class="slides" src="{{asset('travel/images/cover-tour-halong.jpg')}}" alt="">
							<button class="btn-show"  id="btn1">&#10094;</button>
							<button class="btn-show" id="btn2">&#10095;</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="tour-details">
							<div class="row">
								<div class="col-md-5 col-sm-5 infoImage">
									<a href="#">
										<img src="{{asset('travel/images/Halong-hn.jpg')}}" alt="">
									</a>
								</div>
								<div class="col-md-7 col-sm-7 tour-body">
									<h4 class="media-heading">DU LỊCH HÀ NỘI - HẠ LONG - SAPA</h4>
									<div class="tour-dt">
										<dl class="dl-horizontal">
											<dt>Thời gian:</dt>
											<dd>4 ngày 3 đêm</dd>
											<dt>Phương tiện:</dt>
											<dd>Hàng không Vietjet</dd>
											<dt>Điểm xuất phát:</dt>
											<dd>Tp hcm</dd>
											<dt>Điểm đến:</dt>
											<dd>Hà Nội - Sapa</dd>
										</dl>
									</div>
									<div class="text-center">
										<button class="btn btn-warning">Gọi lại sau cho tôi</button>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 depart-tour ">
								<table class="depart-table">
									<tr>
										<th>Khởi hành</th>
										<th>Mã Tour</th>
										<th>Gía</th>
										<th>Gía Trẻ em </th>
										<th>Gía em bé</th>
										<th></th>
									</tr>
									<tr>
										<td><strong>21/4/2018</strong></td>
										<td><strong>tou1</strong></td>
										<td><strong class="price">200</strong></td>
										<td><strong class="price">200</strong></td>
										<td><strong class="price">200</strong></td>
										<td>
											<button type="submit" class="btn btn-warning">
											<a href="{{route('details-tour')}}">Mua Tour</a>
											</button>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="clearfix"></div> --}}
				<div class="row">
					<div class="col-sx-12">
						<div class="description">
							<p>
								- Tìm hiểu đời sống dân tộc thiểu số tại bản Tả Phìn<br>
								- Dạo bộ dọc theo “36 phố phường”- khu phố cổ với những ngành nghề đặc trưng và truyền thống của cư dân Thủ đô <br>
								- Viếng chùa Trấn Quốc - danh lam cổ tự được xây dựng từ thế kỷ VI
							</p>
						</div>
					</div>
				</div>
				<!-- begin tab -->
				<div class=" row">
					<div class="col-xs-12">
						<div class="tab-tour">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tour" data-toggle="tab">Chương trình tour</a></li>
								<li><a href="#info" data-toggle="tab">Chính sách tour</a></li>
								<li><a href="#cmt" data-toggle="tab">Bình luận</a></li>
							</ul>
							<div class="tab-content">
							<div class="tab-pane fade in active" id="tour">

								<div class="tour-one">
									<div class="title-tour">
										<strong>NGÀY 01: TP. HỒ CHÍ MINH - NHA TRANG (Ăn chiều)</strong> 
									</div>
									<div class="tour-ct col-sm-12">

										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, numquam, inventore? Tempora, impedit corrupti cum pariatur earum. Optio reiciendis dolores eum, laboriosam non rerum sint enim repellendus ut aliquam! Nulla?
										<div class="ct-img">
											<img src="../../images/vinpearl-resort.jpg" alt="">
											<p class="text-center"><strong>Vinpearl Nha Trang Resort</strong></p>
										</div>
									</div>
								</div>
								<!-- end tour one -->
								<div class="tour-one">
									<div class="title-tour">
										<strong>NGÀY 01: TP. HỒ CHÍ MINH - NHA TRANG (Ăn chiều)</strong> 
									</div>
									<div class="tour-ct col-sm-12">

										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, numquam, inventore? Tempora, impedit corrupti cum pariatur earum. Optio reiciendis dolores eum, laboriosam non rerum sint enim repellendus ut aliquam! Nulla?
										<div class="ct-img">
											<img src="../../images/vinpearl-resort.jpg" alt="">
											<p class="text-center"><strong>Vinpearl Nha Trang Resort</strong></p>
										</div>
									</div>
								</div>

							</div>
							<div class="tab-pane fade" id="info">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum qui quia nemo voluptates, veritatis, quis officiis distinctio quas nam sint voluptas ratione nisi molestiae fuga error! Eaque repudiandae optio, harum.
							</div>
							<div class="tab-pane fade" id="cmt">
								<div class="comment">
									<h5>Bình luận</h5>
									<form action="" class="col-sm-12 col-md-12">
										<div class="fr-group">
											<input type="text" name="name" value="" placeholder="name (required)" class="fr-control">
										</div>
										<div class="fr-group">
											<input type="email" name="email" value="" placeholder="Email (required)" class="fr-control">
										</div>
										<div class="fr-group">
											<input type="text" name="web" value="" placeholder="Website" class="fr-control">
										</div>
										<div class="fr-group">
											<textarea class="fr-control" placeholder="Comment" cols="10" rows="5"></textarea>
										</div>
										<div class="fr-group text-center">
											<input type="submit" value="Gửi" name="comment" class="btn-fr btn btn-lg">
										</div>
									</form>
								</div>
								<div class="clearfix"></div>
								<div class="comment-ct">
									<div class="cm-img col-sm-3">
										<img src="" alt="">
									</div>
									<div class="cm-ct col-sm-9">
										<div class="name">
											<span>22:10</span>

										</div>
										<p>Nội dung</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- end tab -->
				<!-- begin Tour liên quan  -->
				<div class="row">
					<div class="col-xs-12">
						<div class="tour-con">
							<h4>TOUR LIÊN QUAN</h4>
							<div class="owl-carousel">
								<div class="item">
									<div class="tou-rel">
										<a href="#" >
											<img src="{{asset('travel/images/Kiyomizu-Temple_248704504.jpg')}}" class="opactiy">
											<h4 class="title-con">
												DU LỊCH HÀN QUỐC [SEOUL - NAMI - EVERLAND - VƯỜN TRÁI CÂY - PAINTERS HERO SHOW
											</h4>
										</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="clearfix"></div>
				<!-- end tour lien quan -->
			</section>
			<aside class="col-md-3 col-sm-3">
				<div class="tab-aside">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#view">Đã xem</a></li>
						<li><a data-toggle="tab" href="#new">Mới</a></li>
					</ul>

					<div class="tab-content">
						<div id="view" class="tab-pane fade in active"> 
						</div>
						<div id="new" class="tab-pane fade">
							<div class="col-sm-5 new-img">
								<img src="../../images/Halong-hn.jpg" alt="">
							</div>
							<div class="new-sc col-sm-7">
								<h6 class=""><a href="">DU LỊCH HÀ NỘI - HẠ LONG - SAPA</a></h6>
								<p>
									Thời gian : 5 ngày 4 đêm
									<br>
									Phương tiện : Hàng không Vietjet
								</p>
							</div>

						</div>
					</div>
				</div>
			</aside>
		</div>

	</div>
<!-- end content -->
@endsection