<?php

if (!defined('THEME_ROOT')) {
    define('THEME_ROOT', get_template_directory_uri());
}


// if( !defined('SITE_URL') ){ define('SITE_URL', 'http://localhost:8888/VishwajitWeb/couponswebsite'); }

if (!defined('SITE_URL')) {
    define('SITE_URL', 'https://dealstodayindia.com');
}


include_once('includes/remove-junk.php');
// function get_posts_from_rest_api() {
//     $url = 'http://140.238.244.200/search/offer__by__store__slug?q=amazon'; // Replace with your WordPress site URL

//     $response = wp_remote_get($url);
//     print_r($response);

//     if (!is_wp_error($response) && $response['response']['code'] === 200) {
//         $data = json_decode($response['body'], true);
//         echo 'API Response: ' . print_r($data, true);
//     } else {
//         echo 'Failed to retrieve posts.';
//     }
// }

// get_posts_from_rest_api();


function custom_feed_urls()
{
    add_feed('deals', function () {
        custom_feed_template_callback('deals');
    });

    add_feed('coupon', function () {
        custom_feed_template_callback('coupon');
    });
}

add_action('init', 'custom_feed_urls');

function custom_feed_template_callback($post_type)
{
    header('Content-Type: application/rss+xml; charset=' . get_option('blog_charset'), true);

    $template_path = locate_template('feed-' . $post_type . '.php', true, false);

    if ($template_path !== '') {
        include($template_path);
        exit; // Stop further execution
    } else {
        echo 'Feed template not found!';
    }
}



function custom_register_rest_field()
{
    register_rest_field('deals', 'merchant', array(
        'get_callback' => 'custom_get_merchant_field',
        'schema' => null,
    )
    );
}

add_action('rest_api_init', 'custom_register_rest_field');

function custom_get_merchant_field($object, $field_name, $request)
{
    return get_field('field_658ede1e14349', $object['id']); // Replace 'merchant' with the actual ACF field name
}


function custom_modify_deals_query($args, $request)
{
    // Check if the 'merchant' parameter is provided in the request
    if (isset($request['merchant'])) {
        $args['meta_query'] = array(
            array(
                'key' => 'merchant',
                'value' => sanitize_text_field($request['merchant']),
                'compare' => '=',
            ),
        );
    }

    return $args;
}

add_filter('rest_deals_query', 'custom_modify_deals_query', 10, 2);


function randonNum()
{
    return rand(10, 100);
}

add_filter('rank_math/sitemap/enable_caching', '__return_false');



// Function to get WordPress post ID given the post title
function get_store_id_by_title(string $title = ''): int
{
    $posts = get_posts(
        array(
            'post_type' => 'store',
            'title' => $title,
            'numberposts' => 1,
            'update_post_term_cache' => false,
            'update_post_meta_cache' => false,
            'orderby' => 'post_date ID',
            'order' => 'ASC',
            'fields' => 'ids'
        )
    );

    return empty($posts) ? get_the_ID() : $posts[0];
}


function get_category_id($cat_name)
{
    $term = get_term_by('name', $cat_name, 'category');
    return $term->term_id;
}