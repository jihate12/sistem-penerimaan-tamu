<!DOCTYPE html>
<html>
<head>
	<title>@yield('head_title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/dashboardadmin.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://unpkg.com/gridjs/dist/gridjs.production.min.js"></script>
	<link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
</head>
<body>

	<!-- Table Template -->
	@yield('table')

	<!-- JS Template -->
	@yield('script')

</body>
</html>