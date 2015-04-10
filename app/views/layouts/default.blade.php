<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calcio</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,700,300italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/main.css">
		
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		
		<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		
		@include('calcio.navbar')
		
		<div class="container">
		
			@yield('content')
			
		</div>
	</body>
</html>