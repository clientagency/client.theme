<footer class="footer mt48 mb0 pb0">
	
  <div class="container">
    <div class="row pt32 pb32">
       	
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
  <div class="container"><div class="row">
    <div class="col">
      <p><small> 
      &copy; <?php echo date('Y');?> <?php bloginfo( 'name' ); ?>
      </small></p>
    </div>
    <div class="col text-right">
      <p><small>
      Made by Client
      </small></p>
    </div>        
  </div></div>
</div>

<?php wp_footer(); ?>

</body>
</html>