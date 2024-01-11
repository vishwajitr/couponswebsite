<?php 
include('apicalls.php');
get_header(); ?>

<div class="store-page">
<div class="container">
<h2 class="store-page-title">Search For "<?php echo $page_title;?>"</h2>
<p class="store-page-description">
Attention tech enthusiasts! Don't miss out on the incredible offer available at Amazon, Flipkart, and various online stores. Get your hands on the latest flagship smartphones with discounts of up to 40%. Whether you're an Apple fan or an Android lover, this deal has something for everyone. Upgrade your device and enjoy cutting-edge features without breaking the bank. Hurry, as this offer won't last long!
</p>
<div class="container">
<div class="row leftright-content-row">
<div class="left-container">   

    <?php if ( have_posts() ) : ?>
        <div>
        <a href="<?php the_permalink(); ?>"><h2><?php single_cat_title(); ?></h2></a>
        <?php if (has_post_thumbnail()):
            $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
            ?>
            <img src="<?php echo $featured_image[0]; ?>)" style="max-width:300px"/>
        <?php endif; ?>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
        </div> 

        <?php
        while ( have_posts() ) :
            the_post();
            // Your loop content here
            the_title();
        endwhile;

        the_posts_navigation();

    else :
        // Content to show when no posts are found
        echo '<p>No content found.</p>';

    endif;
    ?>

</div>
<div class="right-container">
<?php include_once('includes/sidebar.php'); ?>
<?php get_sidebar(); ?>

</div> 
</div> 

</div>
</div>
</div>

<?php get_footer(); ?>
