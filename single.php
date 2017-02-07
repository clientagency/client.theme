<?php get_header(); ?>
<main class="navbar-margin">

<div class="container pt-5"> 
	<div class="row">
    <div class="col col-md-10 col-centered">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="mb-4"><?php the_title(); ?></h1>
			
			<?php the_content(); ?>

			<?php edit_post_link(); ?>

			<?php // comments_template(); ?>

		</article>
	
	<?php endwhile; ?>

	<?php else: ?>

		<article>

			<h1>Sorry page can not be found.</h1>

		</article>

	<?php endif; ?>
	</div>
	</div>	
</div>

</main>

<?php get_footer(); ?>
