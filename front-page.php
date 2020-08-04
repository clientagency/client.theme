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
        <p class="lead">p.lead This is just typography testing content. Please remove this.
        <p> Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.

Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.

Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.

Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.

Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.Nulla vitae elit libero, a pharetra augue. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.

Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
</p>

        <a class="btn btn-rounded btn-primary" href="#" role="button">Learn more</a>

    </article>
    </div>

  </div>
</div>

<?php get_template_part( 'page', 'modules' ); ?>

</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
