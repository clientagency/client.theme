<?php get_header(); ?>

<main class="navbar-margin">

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>h1. Title</h1>
    <h2>h2. Title</h2>
    <h3>h3. Title</h3>
    <h4>h4. Title</h4>
    <h5>h5. Title</h5>
    <p class="lead">p.lead This is a modified jumbotron that occupies the entire horizontal space of its parent.
    <p class="lead">
    <a class="btn btn-rounded btn-primary btn-lg" href="#" role="button">Learn more</a>
  	</p>
  </div>
</div>

</main>   

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="container mt-4 mb-4">
  <div class="row">

    <div class="col">
    <article>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </article>
    </div>

  </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
