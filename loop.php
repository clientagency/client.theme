<div class="col col-sm-6 col-lg-4 mb32 post item" id="post-<?php the_ID(); ?>" >
	
    <div class="post__thumb text-center mb16">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid' ) ); ?>
      </a>
    </div>
    
    <div class="post__content">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>
      
</div>
