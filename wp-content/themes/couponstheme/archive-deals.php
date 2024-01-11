<?php
get_header();
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$query_args = array(
'post_type' => 'deals',
'post_status' => 'publish',
'posts_per_page' => 5,
'paged' => $paged
);
$the_query = new WP_Query($query_args);
?>
<div class="content-container">
    <div class="container">
        <?php while ($the_query->have_posts()): ?>
            <?php $the_query->the_post();
            // $link = preg_replace('~<p[^>]*>~', '', get_the_excerpt());
            $link = get_field('gotolink');
            // print($link);
            ?>
            <div id="article" class="col-md-3 deal-card">
                <div class="deal-card-inner">
                    <a href="<?php echo the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <?php if (has_post_thumbnail()):
                        $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                        ?>
                        <img src="<?php echo $featured_image[0]; ?>)" />
                    <?php endif; ?>
                    <div>
                        <?php the_content(); ?>
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
        <?php wp_pagenavi(); ?>

    </div>
</div>
<?php get_footer(); ?>
<script>
    let artcont = document.getElementsByClassName('deal-card');
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