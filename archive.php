<?php get_header(); ?>

<div class="main">
	<?php if(have_posts()) : while(have_posts()): the_post() ?>
	<section id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
		<header>
			<h3 class="title"><?php the_title(); ?></h3>
		</header>
		<?php the_content('Read More ...', true); ?>
	</section>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>