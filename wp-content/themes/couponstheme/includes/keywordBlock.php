<div class="keyword-block">
    <h5>Related Offers</h5>
<ul>
<?php
// Usage example
$base_url = 'http://140.238.244.200'; // Replace with your WordPress site URL
$api = new WordPressAPI($base_url);
// Get posts
$keywords = $api->getData('keywords');
$keywords_arr = array_slice($keywords['results'] , 0, 5);

if ($keywords_arr) {
    // print_r($posts);
    foreach ($keywords_arr as $keyword) {        
        ?>
        <li><a href="<?php echo get_site_url(); ?>/keyword?q=<?php echo $keyword['keyword_slug']; ?>"><?php echo $keyword['keyword']; ?></a></li>
        <?php
    }
}    
?>
</ul>
</div>