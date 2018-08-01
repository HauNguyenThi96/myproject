@extends('layouts.client')
@section('title','Đăng nhập')
@section('content')
<div class=" panel panel-login">
    <div class="panel-heading-login">
        <h3 class="login-title">Login</h3>
        <span id="fr-close">&times</span>
    </div>
    <div class="panel-body-login">
        <form action="" method="POST">
            <div class="fr-group">
                <input type="text" name="name" value="" placeholder="Your name" class="fr-control" id="fr_name" required>
                <div class="required">
                 <i class="fa fa-exclamation-circle" aria-hidden="true" id="important"></i>
                </div>
                 <div class="required">
                    <i class="fa fa-check" aria-hidden="true" id="check-sucess"></i>
                </div>

                <div class="val_error" id="name_error">
                  Vui lòng nhập dữ liệu
              </div>
             </div>
             <div class="fr-group">
                <input type="password" name="name" value="" placeholder="Password" class="fr-control" id="fr_pass" required>
                <div class="required1">
                     <i class="fa fa-exclamation-circle" aria-hidden="true" id="important"></i>
                 </div>
                 <div class="required1">
                    <i class="fa fa-check" aria-hidden="true" id="check-sucess"></i>
                </div>
                <div class="val_error" id="pass_error">
                  Vui lòng nhập dữ liệu
                 </div>
            </div>
            <div class="fr-group">
                <input type="checkbox" required>
                Remember me
                <span class="title-login"><a href="">Quên mật khẩu</a></span>
            </div>
            <div class="fr-group">
                <input type="submit" value="Login" name="login" class="btn-login btn" id="login">
                <input type="submit" value="Cacel" name="login" class="btn-cancel btn-login">
            </div>
            <div class="fom-control">
                <span >Bạn chưa có tài khoản?<a href="{{route('register')}}" id="register"> Đăng ký</a></span>
            </div>
        </form>
    </div>
</div>
@endsection