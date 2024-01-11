<?php
/*
Template Name: Groups Archive
*/
get_header();

// Get all terms of the "groups" taxonomy
$terms = get_terms('groups');
?>

<div class="container">
<br>
<h1>Groups :  Offers, Coupons & Deals</h1>    
<div class="row">
<?php
// Check if terms are found
if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo '<div class="col col-md-3"><h3><a href="' . get_term_link($term) . '">' . $term->name . '</a></h3>';
        echo '<p>' . $term->description . '</p></div>';
    }
} else {
    echo 'No terms found for the "groups" taxonomy.';
}
?>
</div>
</div>
<?php get_footer(); ?>