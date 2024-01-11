<?php
/*
Template Name: 
 */


$query_args = array(
    'post_type' => 'store',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);  
?>

<?php get_header(); ?>
<div class="container">
<div class="topstores-section">
    <h3>All Stores</h3>
    

    <ul class="topstores-wrapper">
    <?php

    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $postid = get_the_ID();
            $post = get_post($postid); 
            // print_r($post);
            $post_slug = $post->post_name; 
            
            ?>

            <li class="storecard-col">
            <div class="storecard storecard-small">
            <a href="<?php echo get_site_url(); ?>/store/<?php echo $post_slug; ?>">
            <span><img alt="<?php echo $post_slug; ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stores__logo/<?php echo $post_slug; ?>-logo-large.webp"></span>
            </a>
            <h5><a href="<?php echo get_site_url(); ?>/store/<?php echo $post_slug; ?>" class="nav-link"><?php echo the_title(); ?></a></h5>
            </div>
            </li>

        <?php } ?>
    <?php } 
        ?>
    </ul>

</div>
</div>	
<?php get_footer(); ?>

