<?php get_header(); ?>

<main class="navbar-margin">

<div class="container pt-5"> 
	<div class="row">
    <div class="col col-md-10 col-centered">
	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
        if ( wp_is_mobile() ) {
         $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium', false, '' );	
        } else {
         $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
        } ?>

        <div class="single-image mb16">
          <img src="<?php echo $src[0]; ?>" class="img-fluid">
        </div>


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