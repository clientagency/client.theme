<?php get_header(); ?>

	<main role="main">
		<section class="container">
			<div class="row pt96 pb96"><div class="col-sm-12 text-center">
			<article id="post-404">

				<h1><?php _e( 'Page missing', 'client' ); ?></h1>
				<p>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Frontpage', 'client' ); ?></a>
				</p>

			</article>
			</div></div>
            
		</section>
	</main>

<?php get_footer(); ?>
