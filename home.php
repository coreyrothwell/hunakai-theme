<?php get_header(); ?>

		<div class="main">	

			<section id="home" class="home section">
				<h1 class="huge">We are the best or whatever.</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, quos, molestias nemo sunt ea doloribus corporis adipisci sed quasi voluptates. Ipsa, facilis, assumenda, ex eligendi quas quam placeat amet alias magnam neque corrupti asperiores hic totam qui sit doloremque dolores iure consectetur magni enim et voluptatem sint provident officia repellat!</p>
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
