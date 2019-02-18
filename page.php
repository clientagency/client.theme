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
    
	    <h1 data-aos="title-up" data-aos-easing="easeInOutQuart" data-aos-delay="200" data-aos-duration="800">
          <?php the_title(); ?>
        </h1>
    
      </div></div>
    </div>
</div>    
    
<div class="container">
    <div class="row pb24 pt24">
		
        <div class="col">
        	<article>
            
            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
            
          
			    </article>        
         </div>
              
    </div>
</div>

</main>       
<div class="edit-post-link"><?php edit_post_link('<i class="icon ion-edit"></i>', '', ''); ?></div>   

<?php endwhile; endif; ?>	
<?php get_footer(); ?>
