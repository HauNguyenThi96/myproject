<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layouts._share.client.css')
	@include('layouts._share.client.js')
</head>
<body>
	<header>
		@include('layouts._share.client.header')
		<div class="clearfix"></div>
	</header>

	<div class="main-wrapper">
		@yield('slide')
		<div class="clearfix"></div>
	</div>
	
	<main>
			@yield('content')
	</main>
	<footer>
		@include('layouts._share.client.footer')
	</footer>
	@yield('js')
</body>
</html>

