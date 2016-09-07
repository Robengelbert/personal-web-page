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
		<!-- custom css -->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>

		<script src="javascript/script.js"></script>

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
				<p class="lead">Hi, my name is Robert, and I love to code. I started out learning online and then decided to
					go to the Deep Dive Coding Bootcamp at Central New Mexico's STEMulus center in Albuquerque New Mexico.
					I'm a
					PHP, JavaScript, JQuery, Angular JS, CSS3, Bootstrap and HTML5 developer. I can't wait to start working
					with you.</p>
				<hr class="m-y-2">
				<p class="lead">I like to give myself code challenges to solve in my spare time to help keep my skills
					sharp.<!--I've worked in manufacturing as a welder, and a aircraft assembler. Before that I worked in construction
					as a sheetrock finisher.--></p>
			</div>
		</div>

		<!-- Resume paragraph and technical toolbox -->
		<div class="container">
			<div class="row">
				<p class="lead text-center about">After working in manufacturing for the past 13 years, as a welder and
					aircraft assembler, I have decided to update my skills and become a professional Web Developer. Soon
					after I began learning the LAMP stack, I quickly realized that there is a connection between what I had
					done in manufacturing and where I was heading with web development. Both use problem solving skills,
					system diagnostics, troubleshooting, and patience. I am searching for a position as a Web Developer,
					where I can continue to utilize and grow these same strengths.

				</p>
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

		<!-- Contact information -->
		<div class="container">
			<div class="row">
				<a id="call"></a>
				<h3 id="contact" class="display-4 text-center">contact</h3>

				<!-- change this form to a jquery toggle.-->
				<!-- contact form -->
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center contact">
					<form>
						<div class="form-group">
							<label for="inputName"></label>
							<input type="text" class="form-control" placeholder="Name"/>
						</div>
						<div class="form-group">
							<label for="inputEmail"></label>
							<input type="email" class="form-control" placeholder="Email"/>
						</div>
						<div class="form-group">
							<label for="inputText"></label>
							<textarea class="form-control" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
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
		<!-- jQuery first, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
	</body>
</html>