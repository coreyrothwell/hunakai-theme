<!doctype html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Hawaii Web Design and Development</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hunakai.css">
	<meta name="description" content="An Oahu grown web design and development company specializing in small businesses and responsive web design">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body>	

	<div class="wrapper">
		
		<header class="logo">

			<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Hawaii Web Design">

			<hgroup>
				<h1 id="ourname">Hunakai</h1>
				<h2>Web Design</h2>
			</hgroup>
			
		</header>

		<nav class="navigation">
			<a href="#about-us">About Us</a>
			<a href="#portfolio">Portfolio</a>
			<a href="#contact-us">Contact Us</a>
		</nav>

		<div class="main">

			<section class="about-us section" id="about-us">
				<h3 class="title">About Us</h3>
				An Oahu grown web design and development company specializing in small businesses and responsive web design.
				<br /><br />
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, quisquam, quaerat, consectetur blanditiis recusandae voluptates magnam eum mollitia fugiat tempore id cumque optio praesentium consequuntur dolores repellat laborum libero eveniet quasi quibusdam distinctio accusantium vitae iure atque aspernatur. Similique, earum, nulla dolorum asperiores itaque aspernatur eligendi a labore.
			</section>			

			<section class="portfolio section" id="portfolio">
				<h3 class="title">Portfolio</h3>

				<div class="grid">
					<div class="item">
						<img src="http://placehold.it/450x200">
						<h4>Site Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, perferendis, quidem facilis ullam corporis at!</p>
					</div>
					<div class="item">
						<img src="http://placehold.it/450x200">
						<h4>Site Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, deserunt, eius voluptatum cupiditate dolorem provident laudantium suscipit minima delectus cum atque molestiae!</p>
					</div>
					<div class="item">
						<img src="http://placehold.it/450x200">
						<h4>Site Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, fugit.</p>
					</div>
					<div class="item">
						<img src="http://placehold.it/450x200">
						<h4>Site Title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, nostrum culpa ipsa soluta iusto officiis esse.</p>
					</div>
				</div>

			</section>

			<section class="contact-us section" id="contact-us">
				<h3 class="title">Contact Us</h3>
				<label for="email">Email</label>
				<input type="text" name="email" id="email">
				<label for="subject">Subject</label>
				<input type="text" name="subject" id="subject">
				<label for="msg">Message</label>
				<textarea name="msg" id="msg" cols="30" rows="10"></textarea>
				<button>Send It!</button>
			</section>

		</div>


	</div>

	
	<?php wp_footer(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>


</body>
</html>
