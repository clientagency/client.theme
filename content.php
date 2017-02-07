<div class="col-xs-12 col-sm-6 col-md-4 mb24 pb112 item" id="post-<?php the_ID(); ?>" >
	
    <div class="product-thumb text-center">
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
        <a href="<?php echo $src[0]; ?>" data-rel="lightcase:tuotteet" title="<?php the_title(); ?>">
            <?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?>
    	</a>
    </div>
    
	<?php echo '<h3>'.get_the_title().'</h3>'; ?>
    <div class="content"><?php the_excerpt(); ?></div>
      
</div>
