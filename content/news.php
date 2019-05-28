<?php 
	$args = array( 'post_type' => 'news' );
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ) { ?>
	
	<div class="news-lista">
	
	<?php while( $loop->have_posts() ) {
			$loop->the_post(); ?>

		<div class="news-item">
				<?php the_post_thumbnail(); ?>

				<h2><?php the_title(); ?></h2>

				<p><?php the_content(); ?></p>
		</div>

	<?php } ?>
	
	</div>

<?php	} ?>