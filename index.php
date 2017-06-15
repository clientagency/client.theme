<?php get_header(); ?>
<div class="container">
	<main role="main">
	
    	<section>
        <div class="row"><div class="col-xs-12">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>

                    <?php edit_post_link(); ?>

            <?php // comments_template( '', true ); ?>

          </article>

        <?php endwhile; ?>

        <?php else: ?>


          <article>

            <h2><?php _e( 'Sorry, page missing.', 'client' ); ?></h2>

          </article>

        <?php endif; ?>

        </div></div>
		  </section>
        
	</main>
</div>   
<?php get_footer(); ?>
