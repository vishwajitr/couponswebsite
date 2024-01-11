<?php /*Template Name: Common Page*/
get_header();
?>

<div class="common-page">
	<div class="container clearfix">
		 <?php // Include the page content template.
	 		while ( have_posts() ) : the_post(); 
                the_content();
                endwhile; 
                wp_reset_query();
          ?>
	</div>
</div>

<?php
get_footer();
?>
