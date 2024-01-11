<?php get_header(); ?>
	
	<h1>Index</h1>
	<div>
		<?php
		$query = new WP_Query( array(
			'posts_per_page' => '1'
		) );
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<!-- content -->
		<?php endwhile; endif; ?>
	</div>
	
<?php get_footer(); ?>