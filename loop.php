<div class="col-12 col-sm-6 col-lg-4 mb-5 post item" id="post-<?php the_ID(); ?>">

    <div class="post__thumb text-center">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid rounded' ) ); ?>
      </a>
    </div>

    <div class="post__content py-3">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>

</div>
