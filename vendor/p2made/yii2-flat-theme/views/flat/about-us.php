<?php
	$title = 'About Us';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title; ?> | Flat Theme</title>

	<!-- Assets -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" type="text/css">

	<link href="assets/css/flat-theme.css" rel="stylesheet">
	<link href="assets/images/favicon.ico" rel="shortcut icon">
	<!-- / Assets -->
</head>
<body>

	<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><i class="fa fa-heart"></i> Flat Theme</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="about-us.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="career.php">Career</a></li>
							<li><a href="blog-item.php">Blog Single</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="404.php">404</a></li>
							<li class="divider"></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
						</ul>
					</li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact-us.php">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Log In</a></li>
							<li><a href="signup.php">Sign Up</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<section id="title" class="emerald">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
				</div>
				<div class="col-sm-6">
					<ul class="breadcrumb pull-right">
						<li><a href="index.php">Home</a></li>
						<li class="active"><?= $title; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Page Content Block -->
		<section id="about-us" class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2>What we are</h2>
					<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
				</div><!--/.col-sm-6-->
				<div class="col-sm-6">
					<h2>Our Skills</h2>
					<div>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
								<span>HTML/CSS</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
								<span>Wordpress</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
								<span>Joomla</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
								<span>Drupal</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
								<span>PHP</span>
							</div>
						</div>
					</div>
				</div><!--/.col-sm-6-->
			</div><!--/.row-->

			<div class="gap"></div>
			<h1 class="center">Meet the Team</h1>
			<p class="lead center">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
			<div class="gap"></div>

			<div id="meet-the-team" class="row">
				<div class="col-md-3 col-xs-6">
					<div class="center">
						<p><img class="img-responsive img-thumbnail img-circle" src="assets/images/team-member.jpg" alt="" ></p>
						<h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
						<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
						<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="center">
						<p><img class="img-responsive img-thumbnail img-circle" src="assets/images/team-member.jpg" alt="" ></p>
						<h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
						<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
						<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="center">
						<p><img class="img-responsive img-thumbnail img-circle" src="assets/images/team-member.jpg" alt="" ></p>
						<h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
						<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
						<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="center">
						<p><img class="img-responsive img-thumbnail img-circle" src="assets/images/team-member.jpg" alt="" ></p>
						<h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
						<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
						<a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
					</div>
				</div>
			</div><!--/#meet-the-team-->
		</section>
	<!-- / Page Content Block -->

	<!-- Footer Block -->
		<section id="bottom" class="wet-asphalt">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<h4>About Us</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
						<p>Pellentesque habitant morbi tristique senectus.</p>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Company</h4>
						<div>
						<ul class="arrow">
							<li><a href="about-us.php">Company Overview</a></li>
							<li><a href="#">Meet The Team</a></li>
							<li><a href="#">Our Awesome Partners</a></li>
							<li><a href="services.php">Our Services</a></li>
							<li><a href="faq.php">Frequently Asked Questions</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
							<li><a href="#">Copyright</a></li>
						</ul>
					</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Latest Blog</h4>
						<div>
							<div class="media">
								<div class="pull-left">
								<img src="assets/images/blog/thumb1.jpg" alt="">
							</div>
								<div class="media-body">
									<span class="media-heading">
										<a href="#">Pellentesque habitant morbi tristique senectus</a>
									</span>
									<small class="muted">Posted 17 Aug 2013</small>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
								<img src="assets/images/blog/thumb2.jpg" alt="">
							</div>
								<div class="media-body">
									<span class="media-heading">
										<a href="#">Pellentesque habitant morbi tristique senectus</a>
									</span>
									<small class="muted">Posted 13 Sep 2013</small>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
									<img src="assets/images/blog/thumb3.jpg" alt="">
								</div>
								<div class="media-body">
									<span class="media-heading">
										<a href="#">Pellentesque habitant morbi tristique senectus</a>
									</span>
									<small class="muted">Posted 11 Jul 2013</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Address</h4>
						<address>
							<strong>p2made</strong><br>
							Downtown<br>
							Nambour Qld 4560 AU<br>
							<abbr title="Phone">P:</abbr> (+61) 7 9876 5432
						</address>
						<h4>Newsletter</h4>
						<form role="form">
							<div class="input-group">
								<input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="button">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer" class="midnight-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						Crafted with <i class="fa fa-heart"></i> by Pedro fp, on the
						<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
						Sunshine Coast <i class="fa fa-external-link"></i>
					</a> of
						<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
						Queensland <i class="fa fa-external-link"></i>
					</a>,
						<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
						Australia <i class="fa fa-external-link"></i>
					</a>
						<br>
						<i class="fa fa-copyright"></i> 2016
						 &bull; Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a> <i class="fa fa-external-link"></i>
					</div>
					<div class="col-sm-6">
						<ul class="pull-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About Us</a></li>
							<li><a href="faq.php">Faq</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

	<script src="//code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js" type="text/javascript"></script>
	<script src="assets/js/flat-theme.js"></script>
	<!-- / Footer Block -->

</body>
</html>
