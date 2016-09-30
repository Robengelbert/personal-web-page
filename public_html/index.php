<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags always come first -->
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge"/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

<!--		Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">

		<!-- custom css -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="javascript/form-validate.js"></script>

		<script src="javascript/script.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>


		<!--		google recaptcha-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--		font awesome-->

		<script src="https://use.fontawesome.com/304dbb25bb.js"></script>

		<title>robertengelbert.com</title>
	</head>
	<body>
		<a id="home"></a>
		<!-- navigation begins -->
		<nav class="navbar navbar-light navbar-fixed-top move">

			<!-- Hamburger Logo for small screens -->
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<!-- Navbar brand-->
					<span>
			<a class="navbar-brand name" href="#">Robert Engelbert</a>
			</span>
				</div>

				<!-- Menu Items -->
				<div class="collapse navbar-collapse move" id="mainNavBar">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#home">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#call">Contact</a>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="nav-item">
							<a class="nav-link" href="mailto:rob@robertengelbert.com">rob@robertengelbert.com</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navigation ends -->
		<!-- Added a image with text over it -->
		<div class="image">
			<div class="container text-center about">
				<p class="lead">After working in manufacturing for the past 13 years, as a welder and
					aircraft assembler, I have decided to update my skills and become a professional Web Developer. Soon
					after I began learning the LAMP stack, I quickly realized that there is a connection between what I had
					done in manufacturing and where I was heading with web development. Both use problem solving skills,
					system diagnostics, troubleshooting, and patience. I am searching for a position as a Web Developer,
					where I can continue to utilize and grow these same strengths.</p>
				<hr class="m-y-2">
			</div>
		</div>

		<!-- Resume paragraph and technical toolbox -->
		<div class="container">
			<div class="row">
				<p class="lead text-center about">Hi, my name is Robert, and I love to code. I started out learning online and then decided to
					go to the Deep Dive Coding Bootcamp at Central New Mexico's STEMulus center in Albuquerque New Mexico.
					I'm a
					PHP, JavaScript, JQuery, Angular JS, CSS3, Bootstrap and HTML5 developer. I can't wait to start working
					with you.
				</p>
				<h4 class="lead">Technical toolbox</h4>
				<div class="table-responsive">
					<table class=" table table-hover">
						<tbody>
							<tr>
								<th>Languages</th>
								<td>HTML5, CSS3, Bootstrap, PHP, MySQL, JavaScript, JQuery, Angular JS</td>
							</tr>
							<tr>
								<th>Operating Systems</th>
								<td>Windows: Vista, 7, 8, 8.1, 10</td>
							</tr>
							<tr>
								<th>Software</th>
								<td>Microsoft Office, Mozilla Firefox, Dropbox, GitHub, Google Chrome, Google Applications:
									Docs,
									Gmail, Calendar, Maps
								</td>
							</tr>
							<tr>
								<th>Troubleshooting</th>
								<td>Diagnosis of laptops, printers, and network connections</td>
							</tr>
							<tr>
								<th>Other skills</th>
								<td>Basic networking skills
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

<!--		Portfolio-->
		<div class="container">
			<div class="row">
				<h4 class="lead">Portfolio</h4>
				<div class="col-xs-12 col-md-3">
					<div class="thumbnail">
						<a href="http://skooliesfreedom.com/" target="_blank">
							<img src="images/skoolie-done.jpg" alt="Image of finished skoolie"/>
						</a>
						<div class="caption">
							<h4>Skoolie video blog</h4>
							<p>This is a collection of all my past, present and future videos and some pictures of my school bus conversion.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="images/jeopardy1.jpg" alt="Jeopardy image" />
						</a>
						<div class="caption">
							<h4>DDCBJeopardy</h4>
							<p>Deep Dive Coding Bootcamp Jeopardy is a game I'm working on with a team of other developers. Coming soon.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="images/coming-soon.jpg" alt="Coming soon image" />
						</a>
						<div class="caption">
							<h4>Future project</h4>
							<p>Project coming soon</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="thumbnail">
						<a href="#">
							<img src="images/coming-soon.jpg" alt="Coming soon image" />
						</a>
						<div class="caption">
							<h4>Future project</h4>
							<p>Project comming soon</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact information -->
		<div class="container">
			<div class="row">
				<a id="call"></a>
				<h3 id="contact" class="display-4 text-center">contact</h3>

				<!-- change this form to a jquery toggle.-->
				<!-- contact form -->
				<div class="col-md-4"></div>
				<div class="container form-wrap">
					<div class="row">
						<div class="col-md-4 text-center contact">
							<form id="contact-form" action="php/mailer.php" method="POST" novalidate>
								<div class="form-group">
									<label for="name"><span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
									</div>
								</div>
								<div class="form-group">
									<label for="email"><span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email"/>
									</div>
								</div>
								<div class="form-group">
									<label for="subject"></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject"
												 placeholder="Subject"/>
									</div>
								</div>
								<div class="form-group">
									<label for="message"><span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="5" id="message" name="message"
													 placeholder="Message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<!--									reCAPTCHA-->
									<div class="g-recaptcha" data-sitekey="6Le4sykTAAAAALWVR-sEaPTEYl2d3SHaleUgB-8L"></div>
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</form>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</div>
		<footer>
			<!--			font awesome links-->
			&copy;2016 Robert Engelbert
			<a href="https://twitter.com/robengelbert" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
			</a>
			<a href="https://github.com/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i>
			</a>
		</footer>
	</body>
</html>