<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?>-CampusCarpool</title>
	<!-- TODO: add meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="CampusCarpool, Campus, Carpool, Car Sharing, Student, Car, Sharing">
	<meta name="description" content="Student CampusCarpool Carsharing">
	<meta name="author" content="Guotian Tim Ye">
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
</head>
<body lang="en-us">
	<header>
		<!-- logo-->
		<div>
			<img src="./img/logo.jpg" alt="CampusCarpool Logo" height="160" width="180">
		</div>
	</header>

	<div class="mainContainer">
		@yield('content')
	</div>
	<!-- End of the page-specific content. -->
	<footer>
		<p>Copyright &copy; <a href="#">Syntu Ltd.</a> 2015</p>
	</footer>

	<script src="scripts/jquery-1.10.2.js"></script>
	<script src="scripts/jquery-ui-1.10.4.custom.js"></script>
	<script src="scripts/search.js"></script>
</body>
</html>