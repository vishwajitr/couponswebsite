
<?php
/* Template Name: Archive Page Custom */
get_header(); ?>
<div class="container">
  <div class="row">
    <div id="article" class="col-md-8 article-content-wrapper">
    <?php
    $args = array(
      'post_type'=> 'post',
      'orderby'    => 'ID',
      'post_status' => 'publish',
      'order'    => 'DESC',
      'posts_per_page' => -1 // this will retrive all the post that is published 
      );
      $result = new WP_Query( $args );
      if ( $result-> have_posts() ) : ?>
      <?php while ( $result->have_posts() ) : $result->the_post(); ?>
      <div>
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <?php if (has_post_thumbnail()):
          $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
          ?>
          <img src="<?php echo $featured_image[0]; ?>)" style="max-width:300px"/>
      <?php endif; ?>
      <?php the_excerpt(); ?>  
      </div> 
      <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
    </div>
    <div class="article-info col-md-3">
    <?php get_sidebar(); ?>
    </div>
  </div>
</div>  

<?php get_footer(); ?>
