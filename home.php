<?php get_header(); ?>

		<div class="main">	

			<section id="home" class="home section">
				<?php $home = new WP_Query(array(
					'pagename' => 'home-quote'
				)); ?>
				<?php if($home->have_posts()) : while($home->have_posts()): $home->the_post() ?>
					<h1 class="huge"><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				<?php endwhile; endif; ?>
			</section>	

			<section class="portfolio section" id="portfolio">
				<h3 class="title">Recent Projects</h3>

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
					<a href="#">Check Out All of our Amazing Projects</a>
				</div>

			</section>

			<section id="blog" class="blog section">
				<h3 class="title">Recent Thoughts</h3>
				<?php query_posts('posts_per_page=3'); ?>
				<?php if(have_posts()) : while(have_posts()): the_post() ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<h4><?php the_title(); ?></h4>
					</header>
					<?php the_content('Read More ...', true); ?>
				</article>
				<?php endwhile; endif; ?>
				<a href="#">See all</a>
			</section>

		</div>


	</div>

<?php get_footer(); ?>
