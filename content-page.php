<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header <?php echo (has_post_thumbnail()) ? 'image-header' : ''; ?>">
		<?php the_post_thumbnail(); ?>
		<div class="heading-text-wrap">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php 
			$subheading = get_post_meta( get_the_ID(), 'subheading', true );
			if ( !!$subheading ) {
		?> 
		<h2><?php echo $subheading; ?></h2>
		<?php } ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?> 
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'son-of-a-saint') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
</article><!-- #post-## -->