<?php get_header(); ?>

<main id="main" class="site-main" role="main">

<div class="container">
	<div class="row pb48 pt48">
		<div class="col-xs-12 text-center">
			<h2><?php single_cat_title(); ?></h2>
			<p><?php echo category_description(); ?></p>
          
   		</div>
	</div>
</div>

<?php if ( have_posts() ) : ?>
<div class="container-fluid">
	<div class="row masonry">

	<?php while ( have_posts() ) : the_post(); ?>
    
    
		<?php get_template_part('loop'); ?>
        

	<?php endwhile; ?>
	
    </div>
</div>

    
<?php get_template_part('pagination'); 
endif; ?>


</main>

<?php get_footer(); ?>
