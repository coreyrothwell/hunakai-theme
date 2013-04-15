<?php get_header(); ?>

<div class="main">
	<section class="section">
		<?php if(have_posts()) : while(have_posts()): the_post() ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h3 class="title"><?php the_title(); ?></h3>
			</header>
			<?php the_content('Read More ...', true); ?>
		</article>
		<?php endwhile; endif; ?>
	</section>
</div>

<?php get_footer(); ?>