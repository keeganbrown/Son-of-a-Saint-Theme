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
					<div class="col-md-6 footer-left">
						<?php 
						if (!dynamic_sidebar('footer-left')) {
							?>
							<ul class="list-inline">
								<li><a href="https://facebook.com/sonofasaintorg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/sonofasaintorg"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://instagram.com/sonofasaintorg"><i class="fa fa-instagram"></i></a></li>
							</ul>
							<?php
						} 
						?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php 
							if (!dynamic_sidebar('footer-right')) { 
						?> 
						<a href="mailto:sonny@sonofasaint.org" class="btn btn-default">Email</a>
						<?php 
							} 
						?>
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>