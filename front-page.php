<?php get_header(); ?>

<main class="navbar-margin">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="jumbotron jumbotron-fluid d-flex align-items-center">
  <div class="container"><div class="row"><div class="col">

	  <?php the_content(); ?>

  </div></div></div>
</div>

<div class="container my-5">
  <div class="row">

    <div class="col">
    <article>

	<h1>h1. Title</h1>
    <h2>h2. Title</h2>
    <h3>h3. Title</h3>
    <h4>h4. Title</h4>
    <h5>h5. Title</h5>
    <p class="lead">p.lead This is a modified jumbotron that occupies the entire horizontal space of its parent.
    <p class="lead">
    <a class="btn btn-rounded btn-primary btn-lg" href="#" role="button">Learn more</a>
  	</p>

    </article>
    </div>

  </div>
</div>

</main>

<?php endwhile; endif; ?>
<div class="edit-post-link"><?php edit_post_link('<i class="icon ion-edit"></i>', '', ''); ?></div>
<?php get_footer(); ?>
