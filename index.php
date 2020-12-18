<!DOCTYPE html>
<html>
<head>
	<title>C++ Tutorial</title>
	<link rel="stylesheet" type="text/css" href="css/startup.css">
	<link rel="stylesheet" type="text/css" href="css/vegas.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="slider">
		<div class="header" style="background: #230F2B;">
			<div class="container">
				<div class="logo"><a href="index.php" style="color: #fff; font-size: 30px;">C<SUP>++</SUP>Tutorial</a></div>
				<nav>
					<ul>
						<li><a href="login.php">HOME</a></li>
						<li><a href="login.php">START LEARNING</a></li>
						<li><a href="login.php">LOGIN</a></li>
					</ul>
				</nav>
			</div>
			</div>
		<div class="slider-text" style="">
			<div>
				<h2>WELCOME TO </h2>
				<h2>C<SUP>++</SUP> Tutorial </h2>
				<p>Learning made easier...</p>
			</div>
		</div>
	</section>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/vegas.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		
		$(function(){
			$('#slider').vegas({
				slides: [
					{src: 'img/image1.png'},
					{src: 'img/image2.jpg'},
					{src: 'img/image3.jpg'},
					{src: 'img/image5.png'},
					{src: 'img/image4.jpg'}
				]
			});
			
		});
	</script>

</body>
</html>