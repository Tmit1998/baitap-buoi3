<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
<!-- 
	@yield('css')

	@yield('scrip') -->

</head>
<body>

	@include('layout.header')

	@yield('content')

	@include('layout.footer')

</body>
</html>