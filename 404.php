<?php get_header(); ?>

	<main role="main">
		<section class="container">

    <div class="row my-5 py-5">
        <div class="col-12 text-center">
          <article id="post-404">

            <h1><?php _e( 'Page missing', 'client' ); ?></h1>
            <p>
              <a href="<?php echo home_url(); ?>"><?php _e( 'Return to frontpage', 'client' ); ?></a>
            </p>

          </article>
        </div>
      </div>

		</section>
	</main>

<?php get_footer(); ?>
