 <?php
/*
Template Name: Masonry
*/
get_header(); ?>

<main class="navbar-margin">

<div class="container pt-5">
<div class="row masonry">

<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 12,
    'paged' => $paged
  );
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();  ?>

<?php get_template_part('loop');  ?>

<?php endwhile; ?>

<?php if (function_exists(custom_pagination)) { ?>
	  </div>
    <div class="row">
        <?php custom_pagination($the_query->max_num_pages,"",$paged); ?>
      <?php } ?>
    
<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>


</div>
</div>

</main>   

<?php get_footer(); ?>
