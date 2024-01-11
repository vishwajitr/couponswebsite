<?php

/*
Template Name: Home Page
 */
$store__arr = [
    [ "store_name" => "Amazon",  "store_slug" => "amazon"],
    [ "store_name" => "Flipkart",  "store_slug" => "flipkart"],
    [ "store_name" => "Myntra",  "store_slug" => "myntra"],
    [ "store_name" => "Ajio",  "store_slug" => "ajio"],
    [ "store_name" => "Tata cliq",  "store_slug" => "tatacliq"],
    [ "store_name" => "FirstCry",  "store_slug" => "firstcry"],
    [ "store_name" => "Boat Lifestyle",  "store_slug" => "boat-lifestyle"],
    [ "store_name" => "BuyWow",  "store_slug" => "buywow"],
    [ "store_name" => "Hostinger",  "store_slug" => "hostinger"],
    [ "store_name" => "Croma",  "store_slug" => "croma-retail"],
]

?>

<?php get_header(); ?>
<div class="container">
<div class="topstores-section">
    <h3>Top Stores</h3>
    <ul class="topstores-wrapper">
        <?php
        foreach ($store__arr as $key => $value) {
            ?>
            <li class="storecard-col">
            <div class="storecard storecard-small">
            <a href="<?php echo get_site_url(); ?>/store/<?php echo $store__arr[$key]['store_slug']; ?>">
            <span><img alt="<?php echo $store__arr[$key]['store_slug']; ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/stores__logo/<?php echo $store__arr[$key]['store_slug']; ?>-logo-large.webp"></span>
            </a>
            <h5><a href="<?php echo get_site_url(); ?>/store/<?php echo $store__arr[$key]['store_slug']; ?>" class="nav-link"><?php echo $store__arr[$key]['store_name']; ?></a></h5>
            </div>
            </li>
            <?php
        }    
        ?>
    </ul>
</div>
</div>	
<?php get_footer(); ?>

