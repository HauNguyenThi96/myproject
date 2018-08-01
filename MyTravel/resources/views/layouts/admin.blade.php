<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	@include('layouts._share.admin.style')
	@include('layouts._share.admin.javascript')
</head>
<body>
	<div class="wapper">
		<header>
			@include('layouts._share.admin.header')
		</header>
		<main class="main">
			<aside id="menu">
				@include('layouts._share.admin.aside')
			</aside>
			<section class="content">				
				@yield('content')
			</section>
		</main>

		<footer>
			<p>
				Hệ thống website tour đảm bảo<br>
				copyright@2018
			</p>
			
		</footer>
	</div>
</body>
</html>