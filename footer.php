<?php
/**
 * The theme footer
 *
 * @package son-of-a-saint
 */
?>

      </div><!--.site-content-->


      <footer id="site-footer" role="contentinfo" class="container">
        <div id="footer-row" class="row site-footer">
          <div class="col-md-6 footer-left sharing-links">
            <?php
            if (!dynamic_sidebar('footer-left')) {
              ?>
              <ul class="list-inline">
                <li><a href="https://facebook.com/sonofasaintorg" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/sonofasaintorg" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/sonofasaintorg" target="_blank"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <?php
            }
            ?>
          </div>
          <div class="col-md-6 footer-right text-right">
            <?php
              if (!dynamic_sidebar('footer-right')) {
            ?>
            <p>
            <a href="mailto:sonny@sonofasaint.org" class="btn btn-default">Email</a> &nbsp; &nbsp; <small>3425 Palmyra Street, New Orleans, LA 70119, USA  504.655.8416</small>
            </p>
            <?php
              }
            ?>
          </div>
        </div>
      </footer>
    </div><!--.container page-container-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.3/jquery.gsap.min.js"></script>

    <!--wordpress footer-->
    <?php wp_footer(); ?>
  </body>
</html>
