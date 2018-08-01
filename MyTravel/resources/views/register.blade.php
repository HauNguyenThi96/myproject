@extends('layouts.client')
@section('title','Đăng ký')
@section('content')
    <div class="panel panel-register">
        <div class="panel-heading-login">
            <h3 class="login-title">Đăng ký</h3>
             <span id="close-register">&times</span>
        </div>
        <div class="panel-body-login">
            <form action="">
                <div class="fr-group-register">
                    <label for="" class="txt-label">Name:</label>
                    <input type="text" name="name" value="" placeholder="Your name" class=" fr-control-register">
                </div>
                <div class="fr-group-register">
                    <label for="" class="txt-label">Email:</label>
                    <input type="email" name="name" value="" placeholder="Your email" class=" fr-control-register ">
                </div>
                <div class="fr-group-register">
                     <label for="" class="txt-label">PassWord:</label>
                    <input type="password" name="name" value="" placeholder="Password" class="fr-control-register ">
                </div>
                <div class="fr-group-register">
                     <label for="" class="txt-label">Retry PassWord:</label>
                    <input type="password" name="name" value="" placeholder=" retry Password" class=" fr-control-register ">
                </div>
                <div class="fr-group-register">
                    <input type="submit" value="Đăng ký" name="login" class="btn-register">
                    
                </div>
            </form>
         </div>
    </div>
@endsection