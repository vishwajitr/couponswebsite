<?php 
/*
Template Name: Hot Offers Page
 */
get_header();
include('apicalls.php');
?>
<?php
while (have_posts()):
    the_post();
    $postid = get_the_ID();
    $page_title = get_the_title();
    $the_content = get_the_content();
    $post_slug = get_post_field( 'post_name', get_post() );    
    $store_heading = get_field('store_heading');
    $store_description = get_field('store_description');
?>
<div class=" store-page">
<div class="container">
<h2 class="store-page-title">Hot Offers</h2>
<p class="store-page-description">
Attention tech enthusiasts! Don't miss out on the incredible offer available at Amazon, Flipkart, and various online stores. Get your hands on the latest flagship smartphones with discounts of up to 40%. Whether you're an Apple fan or an Android lover, this deal has something for everyone. Upgrade your device and enjoy cutting-edge features without breaking the bank. Hurry, as this offer won't last long!
</p>
<div class="container">
<div class="row leftright-content-row">
<div class="left-container">    
<?php
// Usage example
$base_url = 'http://140.238.244.200'; // Replace with your WordPress site URL
$api = new WordPressAPI($base_url);

// Get posts
$posts = $api->getData('offers');
if ($posts) {
    // print_r($posts);
    foreach ($posts['results'] as $post) {
        ?>

        <div class="deal__card">
        <div class="deal__discount">
            <div class="deal__info">
                <div>
                    <img alt="<?php echo $post['title']; ?><" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stores__logo/<?php echo $post['merchant']; ?>-logo-small.webp">
                </div>
            </div>
        </div>
        <div class="deal__desc">
            <div class="deal__desc-type"></div>
            <div class="deal__desc-title">
                <h3>
                <a target="_blank" rel="nofollow" href="<?php echo $post['link']; ?>">
                    <?php echo $post['title']; ?>
                    </a>
                </h3>
            </div>
            <div class="deal__desc-meta">
                <span class="deal__desc-meta-lastused">
                    <i class="fa fa-users"></i>&nbsp;<b><?php echo randonNum(); ?></b> People Used Today
                </span>                
            </div>
            <div class="deal__cta">
                <div><a target="_blank" rel="nofollow" href="<?php echo $post['link']; ?>">Get This Deal</a></div>
            </div>
        </div>
        </div>
        <?php
    }
}


?>    
</div>
<div class="right-container">
<?php include_once('includes/sidebar.php'); ?>
</div> 
</div> 

</div>
</div>
</div>
<?php

endwhile;
wp_reset_query();
?>
<?php get_footer(); ?>