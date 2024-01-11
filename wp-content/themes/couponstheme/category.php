<?php
include('apicalls.php');
get_header(); ?>

<div class="store-page">
    <div class="container">
        <h2 class="store-page-title">Search For "
            <?php echo single_cat_title(); ?>"
        </h2>
        <p class="store-page-description">
            Attention tech enthusiasts! Don't miss out on the incredible offer available at Amazon, Flipkart, and
            various online stores. Get your hands on the latest flagship smartphones with discounts of up to 40%.
            Whether you're an Apple fan or an Android lover, this deal has something for everyone. Upgrade your device
            and enjoy cutting-edge features without breaking the bank. Hurry, as this offer won't last long!
        </p>
        <div class="container">
            <div class="row leftright-content-row">
                <div class="left-container">
                    <?php if (have_posts()) { ?>
                        <div class="clearfix">
                            <?php while (have_posts()) {
                                the_post();
                                if (has_post_thumbnail()) {
                                    $url = get_the_post_thumbnail_url(get_the_ID(), 'small');
                                } else {
                                    $url = THEME_ROOT . '/assets/img/not-found.webp';
                                }
                                ?>
                                <article class="blog__el">
                                    <figure class="blog__img">
                                        <a href="<?php echo get_permalink(); ?>" class="blog__img-link"></a>
                                        <img src="<?php echo $url; ?>" class="img-cover" loading="lazy"
                                            alt="<?php the_title(); ?>">
                                    </figure>
                                    <div class="blog__content">
                                        <h2 class="blog__title">
                                            <?php the_title(); ?>
                                        </h2>
                                        <p class="blog__desc">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <span class="blog__cta">Read More</span>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <p class="no-results">No Results Found For “
                            <?php echo single_cat_title(); ?>”
                        </p>
                    <?php } ?>
                    <div class="pagination">
                        <?php wp_pagenavi(); ?>
                    </div>

                </div>
                <div class="right-container">
                    <?php include_once('includes/sidebar.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>