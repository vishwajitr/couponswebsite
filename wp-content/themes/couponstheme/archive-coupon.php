<?php
get_header();
$query_args = array(
'post_type' => 'coupon',
'post_status' => 'publish',
'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);
?>
<div class="content-container ar-coupons">
    <div class="container">
        <?php while ($the_query->have_posts()): ?>
            <?php $the_query->the_post();
            $link = get_field('gotolink');
            $deal_logo = get_field('deal_logo');
            ?>
            <div id="article" class="col-md-3 deal-card">
                <div class="deal-card-inner">
                    <a href="<?php echo the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <?php if ($deal_logo): ?>
                        <img src="<?php echo $deal_logo; ?>" />
                    <?php endif; ?>
                    <div class="deal-card-cont">
                        <?php the_content(); ?>
                    </div>
                    <div class="deal-card-btn">
                    <a href="<?php echo $link; ?>" class="btn-deal">Get Deal</a>
                    </div>


                    <div class="article-info">
                        <div class="published-on">
                            <h4>
                                <?php _e('Publish On: ', 'nd_dosth'); ?>
                            </h4>
                            <?php the_date(); ?>
                        </div>
                        <div class="post-author">
                            <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                            <h4><a class="author-archive"
                                href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                <?php the_author(); ?>
                            </a></h4>                                                
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
<script>
    let artcont = document.getElementsByClassName('deals-card');
    // Loop through each element
    for (let i = 0; i < artcont.length; i++) {
        // Find all links (anchor tags) inside the current element
        let links = artcont[i].getElementsByTagName('a');

        // Loop through each link and set the target attribute to "_blank"
        for (let j = 0; j < links.length; j++) {
            links[j].setAttribute('target', '_blank');
        }
    }
</script>