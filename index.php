<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="res/img/favicon.ico">
		
		<title>Thomas Gaubert</title>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="res/js/animate.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href="res/css/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="profile">
			<img class="profile-picture" src="res/img/profile.jpg"/>
			<p class="name">Thomas Gaubert</p>
			<div id="links">
				<ul>
					<li class="animate"><a href="http://github.com/TexasGamer">GITHUB</a></li>
					<li class="animate"><a href="resume.pdf">RESUME</a></li>
					<li class="animate"><a href="http://google.com/+ThomasGaubert">GOOGLE+</a></li>
					<li class="animate"><a href="http://twitter.com/ThomasGaubert">TWITTER</a></li>
					<li class="animate"><a href="mailto:tpgaubert@gmail.com">EMAIL</a></li>
				</ul>
			</div>
			<a class="projects-btn animate" href="#">Projects</a>
		</div>

		<div class="projects">
			<div class="cards">
				<div class="card card-1">
					<div class="image" id="card-1-image">
						<img src="res/img/card-1.jpg">
						<span class="title title-lobster">Tockle</span>
					</div>
					<div class="content" id="card-1-content">
						<p>Control your phone from Android Wear.</p>
					</div>
					<div class="content" id="card-1-content-more">
						<div class="title title-lobster">Tockle</div>
						<ul class="no-bullets">
							<li><b>Launched:</b> August 2014</li>
							<li><b>Platform:</b> Android</li>
							<li><b>Active users:</b> 8,000</li>
							<li><b>Downloads:</b> 20,000</li>
						</ul>
						<b>Coverage</b>
						<ul>
							<li>Gizmodo, Android Police, and more</li>
							<li>Featured at Google I/O 2015</li>
						</li>
					</div>
					<div class="action" id="card-1-action">
						<a href="https://play.google.com/store/apps/details?id=com.texasgamer.tockle">Play Store</a>
						<a href="#" id="info-more-1">More Info</a>
					</div>
					<div class="action" id="card-1-action-more">
						<a href="projects/tockle">Website</a>
						<a href="#" id="info-less-1">Less Info</a>
					</div>
				</div>
				<div class="card card-2">
					<div class="image darken" id="card-2-image">
						<img src="res/img/card-2.png">
						<span class="title title-lobster">Ensemble</span>
					</div>
					<div class="content" id="card-2-content">
						<p>Unified streaming music.</p>
					</div>
					<div class="content" id="card-2-content-more">
						<div class="title title-lobster">Ensemble</div>
						<ul class="no-bullets">
							<li><b>Launched:</b> Under Development</li>
							<li><b>Platform:</b> Web</li>
						</ul>
						<b>Notes</b>
						<ul>
							<li>Created as part of HackDFW 2015</li>
							<li>Currently supports Google Play Music and YouTube</li>
						</li>
					</div>
					<div class="action" id="card-2-action">
						<a href="https://ensembleplayer.me">Web</a>
						<a href="#" id="info-more-2">More Info</a>
					</div>
					<div class="action" id="card-2-action-more">
						<a href="http://github.com/EnsemblePlayer">GitHub</a>
						<a href="#" id="info-less-2">Less Info</a>
					</div>
				</div>
				
				<div class="card card-3">
					<div class="image" id="card-3-image">
						<img src="res/img/card-3.png">
					</div>
					<div class="content" id="card-3-content">
						<p>UT Austin's annual premiere hackathon.</p>
					</div>
					<div class="content" id="card-3-content-more">
						<div class="title">HackTX 2015</div>
						<ul>
							<li>Designed and developed Electron, a lightning fast check-in system for Android.</li>
							<li>Designed and developed schedule view for event's Android application.</li>
						</li>
					</div>
					<div class="action" id="card-3-action">
						<a href="https://hacktx.com">Web</a>
						<a href="#" id="info-more-3">More Info</a>
					</div>
					<div class="action" id="card-3-action-more">
						<a href="http://github.com/hacktx/electron">Electron</a>
						<a href="http://github.com/hacktx/android">Android</a>
						<a href="#" id="info-less-3">Less Info</a>
					</div>
				</div>
				
				<div class="stacked-cards">
					<div class="card card-4">
						<div class="content">
							<span class="title">More Projects</span>
							<p>Even more projects available on GitHub.</p>
						</div>
						<div class="action">
							<a href="https://github.com/TexasGamer">GitHub</a>
						</div>
					</div>
					<div class="card card-5">
						<div class="content">
							<span class="title">About Me</span>
							<p>I'm a second year Computer Science major at The University of Texas at Austin with a passion for tech and the outdoors.</p><br>
						</div>
					</div>
				</div>
				<div class="buttons">
					<a class="back-btn animate" href="#">Back</a>
				</div>
			</div>
		</div>
	</body>
</html>