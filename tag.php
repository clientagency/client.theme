<?php get_header(); ?>
<div class="container">
	<main role="main">
		<section>
        <div class="row"><div class="col-xs-12">

			<h1><?php single_tag_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
            
		</div></div>
        
		</section>
	</main>
</div>
<?php get_footer(); ?>
