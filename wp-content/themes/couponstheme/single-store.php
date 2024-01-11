<?php get_header();
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
<div class="store-page">
<div class="container">
<h2 class="store-page-title"><?php echo $store_heading; ?></h2>
<p class="store-page-description">
<?php echo $store_description; ?>
</p>
<div class="container">
<div class="row leftright-content-row">
<div class="left-container">    

<?php
// Usage example
$base_url = SITE_URL; // Replace with your WordPress site URL
$api = new WordPressAPI($base_url);
// echo "<pre>";
// print_r(SITE_URL.'/wp-json/wp/v2/deals?merchant='.$page_title);
// echo "/<pre>";
// Get posts
$deals_posts = $api->getDataAbsolute(SITE_URL.'/wp-json/wp/v2/deals?merchant='.$page_title);
// echo "<pre>";
// print_r($deals_posts);
// echo "/<pre>";
// die();

if ($deals_posts) {
    // print_r($deals_posts);
    foreach ($deals_posts as $post) {
        ?>

        <div class="deal__card">
        <div class="deal__discount">
            <div class="deal__info">
                <div>
                    <img alt="<?php echo $post['title']['rendered']; ?><" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stores__logo/<?php echo $post_slug; ?>-logo-small.webp">
                </div>
            </div>
        </div>
        <div class="deal__desc">
            <div class="deal__desc-type"></div>
            <div class="deal__desc-title">
                <h3>
                <a target="_blank" rel="nofollow" href="<?php echo $post['link']; ?>">
                    <?php echo $post['title']['rendered']; ?>
                    </a>
                </h3>
            </div>
            <div class="deal__desc-meta">
                <span class="deal__desc-meta-lastused">
                    <i class="fa fa-users"></i>&nbsp;<b><?php echo randonNum(); ?></b> People Used Today
                </span>                
            </div>
            <div class="deal__cta">
                <div><a target="_blank" rel="nofollow" href="<?php echo $post['acf']['gotolink']; ?>">Exclusive Deal</a></div>
            </div>
        </div>
        </div>
        <?php
    }
}
?>    


<?php
// Usage example
$base_url = 'http://140.238.244.200'; // Replace with your WordPress site URL
$api = new WordPressAPI($base_url);

// Get posts
$posts = $api->getData('search/offer__by__store__slug?q='.$post_slug);
if ($posts) {
    // print_r($posts);
    foreach ($posts['results'] as $post) {
        ?>

        <div class="deal__card">
        <div class="deal__discount">
            <div class="deal__info">
                <div>
                    <img alt="<?php echo $post['title']; ?><" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stores__logo/<?php echo $post_slug; ?>-logo-small.webp">
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