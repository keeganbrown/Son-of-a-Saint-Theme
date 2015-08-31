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
							<p>Sharing Links go here</p>
							<?php
						} 
						?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>