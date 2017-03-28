
<div class="col col-sm-6 col-lg-4 mb32 item" id="post-<?php the_ID(); ?>" >
	
    <div class="loop-thumb text-center mb16">
      <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?>
    </div>
    
    <div class="post-content">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    </div>
      
</div>
