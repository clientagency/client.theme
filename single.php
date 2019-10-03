<?php get_header(); ?>

<main class="navbar-margin">

	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php
				if ( wp_is_mobile() ) {
				 $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
				} else {
				 $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
				}
			?>
			<div class="jumbotron jumbotron-fluid d-flex align-items-center" style="background-image: url(<?php echo $img[0]; ?>); ">
			<div class="container">
					<div class="row"><div class="col text-center">
						 <h1 class="m-0"><?php the_title(); ?></h1>
					</div></div>
				</div>
			</div>

		<div class="container py-5">
			<div class="row">
		    <div class="col-12 col-xl-10 col-centered">

		      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		        <h1 class="mb-4"><?php the_title(); ?></h1>

		        <?php the_content(); ?>

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
<div class="edit-post-link"><?php edit_post_link('<i class="icon ion-edit"></i>', '', ''); ?></div>
<?php get_footer(); ?>
