<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dosth
 */
get_header();
?>
<div class="content-container">
    <?php while (have_posts()): ?>
        <?php the_post(); 
        // $link = preg_replace('~<p[^>]*>~', '', get_the_excerpt());
        $link = get_field('gotolink');
        $deal_logo = get_field('deal_logo');
        $description = get_field('description');
        ?>


        <div class="container">
            <div class="row">
                <div id="article" class="col-md-8 article-content-wrapper">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <?php if ($deal_logo): ?>
                        <img src="<?php echo $deal_logo; ?>" />
                    <?php endif; ?>
                    <div>
                        <?php echo $description; ?>
                        <button><a href="<?php echo $link; ?>">Grab Now</a></button>
                    </div>
                </div>
                <div class="article-info col-md-3">

                    <?php $categories = get_the_category(); ?>
                    <?php if (!empty($categories)): ?>
                        <div class="posted-in">
                            <h4>
                                <?php _e('Posted In', 'nd_dosth'); ?>
                            </h4>
                            <?php the_category(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="published-on">
                        <h4>
                            <?php _e('Publish On', 'nd_dosth'); ?>
                        </h4>
                        <?php the_date(); ?>
                    </div>
                    <div class="post-author">
                        <h4>
                            <?php _e('Author', 'nd_dosth'); ?>
                        </h4>
                        <a class="author-archive"
                            href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                            <?php the_author(); ?>
                        </a>
                        <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
<script>
     let artcont = document.getElementsByClassName('article-content-wrapper');
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