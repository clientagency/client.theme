<footer class="footer">

  <div class="container">
    <div class="row py-5">

      <div class="col-12 col-sm-4">
       	<?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
		  </div>

		  <div class="col-12 col-sm-4">
        <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
		  </div>

   	</div>
  </div>

</footer>

<div class="copyright">
  <div class="container">
      <div class="row">
        <div class="col">
          <p>
          &copy; <?php echo date('Y');?> <?php bloginfo( 'name' ); ?> All rights reserved.
          </p>
        </div>
        <div class="col text-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">Privacy Policy </li>
            <li class="list-inline-item">Terms of use </li>
          </ul>
        </div>
      </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
