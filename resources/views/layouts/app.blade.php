<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Babble</title>
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=be-vietnam-pro:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
		@vite('resources/css/app.css')
	</head>
	<body>
		@yield('content')

    @yield('scripts')
	</body>
</html>
