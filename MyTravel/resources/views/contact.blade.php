@extends('layouts.client')
@section('title','Liên hệ')
@section('slide')
	<div class="col-sm-12 col-xs-12 ">
		<div class="slide-img">
			bản đồ
		</div>
	</div>
@endsection
@section('content')

<main class="container">
	<div class="row">
		<aside class="col-sm-4 col-md-4">
			<div class="aside-title">
				<h3>Công ty du lịch </h3>
			</div>
			<div class="aside-sc">
				<div class="aside-left">
					<a href="#">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</a>
				</div>
				<div class="aside-body">
					<h5 class="media-heading">ĐỊA CHỈ</h5>
					<p>
						124 Tây sơn, Quận Đống Đa,<br>Hà Nội
					</p>
				</div>	
			</div>
			<div class="aside-sc">
				<div class="aside-left">
					<a href="#">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</a>
				</div>
				<div class="aside-body">
					<h5 class="media-heading">Dịch Vụ & Tư vấn</h5>
					<p>
						Tư vấn :19008198<br>
						Hotline:01695722171
					</p>
				</div>
			</div>
			<div class="aside-sc">
				<div class="aside-left">
					<a href="#">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</a>
				</div>
				<div class="aside-body">
					<h5 class="media-heading">Email</h5>
					<p>
						haunguyen27111997@gmail.com
					</p>
				</div>	
			</div>
		</aside>
		
		<section class="col-md-8 col-sm-8 ">
			<div class="row">
				<div class="contact">
					<form action="" method="POST" >
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Your name">
						</div>
						<div class="form-group">
							<label for="name">Email:</label>
							<input type="email" name="name" class="form-control" id="name" placeholder="Your email">
						</div>
						<div class="form-group">
							<label for="name">SĐT:</label>
							<input type="number" name="name" class="form-control" id="name" placeholder="Phone number">
						</div>
						<div class="form-group">
							<label for="name">Địa chỉ:</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Address">
						</div>
						<div class="form-group">
							<label for="content">Content:</label>
							<textarea name="content" cols="70" rows="5" class="form-control" placeholder="Nội dung"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="submit" name="submit" value="Send" class="btn btn-primary">
						</div>
					</form>
				</div>
				
			</div>			
		</section>
		
	</div>	
</main>
@endsection