<?php
/*
Template Name: Search Page Template
*/

get_header(); ?>

<div class="container">
    <div class="row">
        <div id="article" class="col-md-8 article-content-wrapper">

            <?php if (have_posts()): ?>
                <header class="page-header">
                    <h1 class="page-title">
                        <?php printf(esc_html__('Search Results for: %s', 'your-theme'), '<span>' . get_search_query() . '</span>'); ?>
                    </h1>
                </header>

                <?php while (have_posts()):
                    the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h2>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile; ?>

            <?php else: ?>
                <header class="page-header">
                    <h1 class="page-title">
                        <?php esc_html_e('No Results Found', 'your-theme'); ?>
                    </h1>
                </header>

                <div class="page-content">
                    <p>
                        <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'your-theme'); ?>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>


        </div>
        <div class="article-info col-md-3">
        <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>