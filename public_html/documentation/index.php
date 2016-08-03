<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Required meta tags always come first -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
		<!-- custom css -->
		<link href="../css/style.css" rel="stylesheet" type="text/css" />

		<title>robertengelbert.com</title>
	</head>
	<body>
		<a id="home"></a>
		<!-- navigation begins -->
		<nav class="navbar navbar-light navbar-fixed-top" style="background-color: darkgray">

			<!-- Navbar brand-->
			<a class="navbar-brand" href="#">Robert Engelbert</a>

			<!-- Hamburger Logo for small screens -->
			<div  class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
				</button>
			</div>

			<!-- Menu Items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#call">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- navigation ends -->
		<!-- Added a image with text over it -->
		<div class="image">
			<img class="resize" src="../images/sandia-mtn.jpg" alt="picture of sandia mountains" />
		</div>
		<div class="container about">
			<p class="lead">Hi, my name is Robert, and I love to code. I started out learning online and then decided to go to the deep dive coders bootcamp at central New Mexico's STEMulus center in Albuquerque New Mexico. I'm a PHP, Javascript, JQuery, Angular JS, CSS, Bootstrap and HTML developer. I can't wait to start working with you.</p>
			<hr class="m-y-2">
			<p class="lead">I like to give myself code challenges to solve in my spare time to help keep my skills sharp. I've worked in manufacturing as a welder, and a aircraft assembler. Before that I worked in construction as a sheetrock finisher.</p>
		</div>
		<!-- portfolio images -->
		<a id="portfolio"></a>
		<div class="container">
			<div class="container-fluid">
				<div class="row m-t-3">
					<div class="col-xs-12 col-md-4 me"><img class="port" src="../images/placeholder.png" alt="Placeholder" /></div>
					<div class="col-xs-12 col-md-4 me"><img class="port" src="../images/placeholder.png" alt="Placeholder" /></div>
					<div class="col-xs-12 col-md-4 me"><img class="port" src="../images/placeholder.png" alt="Placeholder" /></div>
				</div>
			</div>
			<!-- end of portfolio images -->
			<div class="container">
				<!-- Contact information -->
				<a id="call"></a>
				<h3 id="contact" class="display-4">contact</h3>
				<div class="col-md-4">
					<address>
						<a href="rob@robertengelbert.com">rob@robertengelbert.com</a>
						<abbr title="Phone">P:</abbr>(918) 568-7203</address>
				</div>
				<!-- contact form -->
				<div class="col-md-4 contact">
					<form>
						<div class="form-group">
							<input type="text" class="form-control"  placeholder="Name" />
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" />
						</div>
						<textarea class="form-control" rows="3"></textarea>
						<button type="button" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<footer>
			&copy2016 Robert Engelbert
			<a href="https://twitter.com/robengelbert" class="twitter-follow-button" data-show-count="false">Follow @robengelbert</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</footer>
		<!-- jQuery first, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>