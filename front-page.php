<?php
/*
Template Name: Home
*/
get_header(); ?>

<main class="navbar-margin">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php
    if ( wp_is_mobile() ) {
     $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
    } else {
     $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
    }
  ?>

<div class="jumbotron jumbotron-fluid d-flex align-items-center rel" style="background-image: url(<?php echo $img[0]; ?>); ">
<div class="container"><div class="row"><div class="col text-center text-white lead z-fix">

  <?php the_content(); ?>

</div></div></div>
<div class="mask"></div>
</div>

<div class="container my-5">
  <div class="row">

    <div class="col">
    <article>
      <h1>h1. Title</h1>
        <h2>h2. Title</h2>
        <h3>h3. Title</h3>
        <h4>h4. Title</h4>
        <h5>h5. Title</h5>
        <p class="lead">p.lead This is a modified jumbotron that occupies the entire horizontal space of its parent.
        <p class="lead">
        <a class="btn btn-rounded btn-primary btn-lg" href="#" role="button">Learn more</a>
      	</p>

    </article>
    </div>

  </div>
</div>

</main>

<?php endwhile; endif; ?>
<?php edit_post_link( __('<ion-icon name="settings"></ion-icon>'), '', '', 0, 'edit-post-link' ); ?>
<?php get_footer(); ?>
