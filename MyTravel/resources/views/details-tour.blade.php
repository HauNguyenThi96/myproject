@extends('layouts.client')
@section('title','Tour')
@section('slide')
<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12 ">
				<div class="pageTitle">
					
					<div class="under-border"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')
<!-- begin content -->
	<div class="container">
		<div class="row">
			<section class="col-md-8 col-sm-8">
				<div class="form-wizard">
					<ul id="progress">
						<li class="active">Nhập số lượng</li>
						<li >Thông tin khách hàng</li>
						<li >Thành công</li>
					</ul>
					<div class="clearfix"></div>
					<fieldset>
						<form action="" method="POST">
							<div class="fr-group">
								<label for="">Người lớn <span class="alert-im">(*)</span></label>
								<input type="number" value="" placeholder="Số lượng " class="fr-control">
								<div class="val_error" id="number_error">
									Vui lòng nhập dữ liệu
								</div>
								
							</div>
							<div class="fr-group">
								<label for="" class="list-circle">Trẻ em</label><br>
								<span class="list-circle">
									<li>
										Tour nước ngoài: áp dùng từ 2 đến dưới 12 tuổi
									</li>
									<li>
										Tour trong nước: áp dụng từ 6 đến 11 tuổi
									</li>
								</span>
								<input type="number" value="" placeholder="Số lượng " class="fr-control">
							</div>

							<div class="fr-group">
								<label for="">Em bé</label><br>
								<span  class="list-circle">
									<li>
										Tour nước ngoài: áp dùng từ dưới 2 tuổi
									</li>
									<li>
										Tour trong nước: áp dụng từ 2 đến 5 tuổi
									</li>
								</span>
								<input type="number" value="" placeholder="Số lượng " class="fr-control">
							</div>
							<div class="fr-group">
								<label for="">Phương thức thanh toán</label>
								<div class="fr-radio">
									<input type="radio" value="">  Bằng tiền mặt tại văn phòng<br>
									<input type="radio" value="">   Thanh toán qua ngân hàng
								</div>
								
							</div>
							
							
						</form>   
						<input type="button" name="next" class="next-check btn" value="Next" />   
					</fieldset>
					
					<fieldset>
						<div class="fr-inline">
							<div class="fr-group">
								<label for="">Tên<span class="alert-im">(*)</span></label>
								<input type="text" name="name" value="" placeholder="Tên khách hàng" class="fr-control">
								<div class="val_error" id="name_error">
									Vui lòng nhập dữ liệu
								</div>
							</div>
							<div class="fr-group">
								<label for="">Giới tính</label>
								<div class="fr-gender">
									<input type="radio" name="gender" value="">Nam
									<input type="radio" name="gender" value="">Nữ
								</div>
								
							</div>
						</div>
						<div class="fr-inline">
							<div class="fr-group">
								<label for="">Email</label>
								<input type="email" name="name" value="" placeholder="Email@gmail.com" class="fr-control">
								<div class="val_error" id="email_error">
									Vui lòng nhập dữ liệu
								</div>
							</div>
							<div class="fr-group">
								<label for="">SĐT</label>
								<input type="number" name="name" value="" placeholder="01695xxxxx" class="fr-control">
								<div class="val_error" id="number_error">
									Vui lòng nhập dữ liệu
								</div>
							</div>
						</div>
						<div class="fr-group">
							<label for="">Địa chỉ</label>
							<textarea class="fr-control"></textarea>
							<div class="val_error" id="address_error">
								Vui lòng nhập dữ liệu
							</div>
						</div>
						<div class="fr-group">
							<label for="">Ghi chú</label>
							<textarea class="fr-control"></textarea>
						</div>
						<!-- <div class="fr-group"> -->
							<input type="button" name="previous" class="previous-check btn " value="Previous" />
							<input type="button" name="next" class="next-check  btn " value="Next" />
							<!-- </div> -->
							
						</fieldset>

						<fieldset>
							<h5>
								Bạn đã đặt hàng thành công.Thông tin đơn hàng
							</h5>

							<input type="button" name="previous" class="previous-check btn" value="Previous" />
							<input type="submit" name="submit" class="submit btn" value="Submit" />
						</fieldset>
					</div>
				</section>
				<aside class="col-ms-4 col-sm-4">

					<div class="img-section">
						<img src="../../images/Halong-hn.jpg" alt="">
					</div>
					<div class="infoArea">
						<h3>
							<a href="">Du Lịch Hà Nội - Lào Cai - Sapa - Hạ Long 5 Ngày [Vietjet]</a>
						</h3>
						<ul>
							<li>
								<i class="fa fa-barcode" aria-hidden="true"></i>
								Code:
								<span>STN084-2018-00880</span>
							</li>
							<li>
								<i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
								Ngày đi:
								<span>22/10/2018</span>
							</li>
							<li>
								<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
								Ngày về:
								<span>STN084-2018-00880</span>
							</li>
							<li>
								<i class="fa fa-calendar" aria-hidden="true"></i>
								Thời gian:
								<span>5 ngày 3 đêm</span>
							</li>
							<li>
								<i class="fa fa-user-secret" aria-hidden="true"></i>
								Gía người lớn:
								<span><strong>7,979,000</strong> X 1 VND</span>
							</li>
							<li>
								<i class="fa fa-child" aria-hidden="true"></i>
								Giá trẻ em:
								<span><strong>5,315,000</strong> X 1 VND</span>
							</li>
							<li>
								<i class="fa fa-user-times" aria-hidden="true"></i>
								Giá em bé:
								<span><strong>2,650,000</strong> X 1 VND</span>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			
		</div>
	<!-- end content -->
	@endsection