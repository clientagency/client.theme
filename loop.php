<div class="col col-sm-6 col-lg-4 mb32 item" id="post-<?php the_ID(); ?>" >
	
    <div class="product-thumb text-center">
    <?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
    </div>
    
    <div class="post-content">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    </div>
      
</div>
