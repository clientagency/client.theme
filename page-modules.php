<?php $i = 1; ?>

<?php // get ACF modules using flexible content ?>

<?php if( have_rows('module') ): while ( have_rows('module') ) : the_row(); ?>

        <?php if( get_row_layout() == 'feature' ): ?>

             <div class="container-fluid">
              <div class="row d-flex align-items-center">

                <?php $img = get_sub_field('feature-image'); ?>
                <?php if( $img ): ?>
                <div class="col-12 col-md-6 <?php if($i%2 == 0) : ?>md-order-2<?php endif; ?>">
                    <img src="<?php echo $img['sizes']['medium']; ?>" class="img-fluid" />
                </div>
                <?php endif; ?>

                <?php if( get_sub_field('feature-text') ): ?>
                <div class="col-12 col-md-6 <?php if($i%2 == 0) : ?>md-order-1<?php endif; ?>">
                    <?php the_sub_field('feature-text'); ?>
                </div>
                <?php endif; ?>

              </div>
            </div>

        <?php $i++ ?>
        <?php endif; ?>

        <?php if( get_row_layout() == 'text' ): ?>

            <div class="container py-4">
              <div class="row">
                  <div class="col col-lg-9 mx-auto text-center">
                    <article><?php the_sub_field('text_text'); ?></article>
                  </div>
              </div>
            <?php
            $link = get_sub_field('text_link');
            if( $link ):
            	$link_url = $link['url'];
            	$link_title = $link['title'];
            	$link_target = $link['target'] ? $link['target'] : '_self';
            	?>
              <div class="row mb-3"><div class="col my-3 text-center">
              	<a class="btn btn-outline" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              </div></div>
            <?php endif; ?>
          </div>

        <?php endif; ?>


<?php endwhile; endif; ?>
