<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
	<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'wpmu' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title();?></a></h2>
	
	<div class="entry-content">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
		<?php the_content('<p class="left"></p>');?>
	</div><!--.entry-content-->		
	
	<div class="entry-meta">
		<?php 
		$terms = get_the_terms( $post->ID, 'service' );
		if ( ! is_wp_error( $terms ) ) {
			_e( 'Services', 'wpmu' );
			the_terms( $post->ID, 'service', ': ', ', ' );
		} 
		?>
	</div>

</article>	