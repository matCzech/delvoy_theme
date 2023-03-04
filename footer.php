<?php

/*
@package delvoy_theme
    Template for footer
*/

?>

<footer class="footer-bckg text-light std-pd" id="contact">
  <div class="container">
    <div class="row">

      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="col-md-4 foot-pd-rt">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="col-md-4 foot-pd-rt">
          <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <div class="col-md-4 foot-pd-rt">
          <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
      <?php endif; ?>
      
    </div>
  </div>
</footer>
<div class="copyright-div text-white text-center">
    <p>&copy; <?php echo date('Y'); ?> xxxsite | Realizacja <a href="https://matweb.net/" rel="nofollow" target="_blank">matWeb.net</a></p>
</div>

<?php wp_footer(); ?>

</body>
</html>