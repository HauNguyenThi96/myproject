@extends('layouts.client')
@section('title','Thông tin khách sạn')
@section('slide')
slide
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<section class="thumbnail hotel-thumbnail">
				<div class="">
					<div class="col-md-3 col-sm-3">
						<div class="thumbnail">
							<img src="{{asset('travel/images/hotel/27032018_famiana-phu-quocpool.jpg')}}">
						</div>
					</div>
					<div class="col-md-9 col-sm-9">
						<div class="">
					         <h3 class="thumbnailheader">Thumbnail label</h3>
					         	<ul class="list-hotel">
					         		<li>
					         			<strong>SĐT: </strong>
					         			01695xxxxx
					         		</li>
					         		<li>
					         			<strong>Gía: </strong>
					         			Liên hệ
					         		</li>
					         		<li>
					         			<strong>Tiêu chuẩn: </strong>
					         			hạng 5 sao
					         		</li>
					         		<li>
					         			<strong>Địa chỉ: </strong>
					         			124 tây sơn
					         		</li>
					         	</ul>
     					 </div>
					</div>
				</div>
				
			</section>
			<div class="clearfix"></div>
			<section class="">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto tenetur nihil perferendis modi, nesciunt non reprehenderit cumque, voluptatum nobis assumenda dicta, amet consequatur soluta, ratione vitae ad! Repellat, blanditiis, ducimus?
			</section>
		</div>
	</div>
@endsection