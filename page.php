<?php get_header(); ?>

<main class="navbar-margin">

<div class="container">
    <div class="row pb24 pt24">
		
        <div class="col">
        	<article>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            
            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            
            <?php endwhile; endif; ?>
			    </article>        
         </div>
              
    </div>
</div>

</main>       
        
<?php get_footer(); ?>
