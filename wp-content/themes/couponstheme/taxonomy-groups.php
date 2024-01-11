<?php 
include('apicalls.php');
get_header(); 
$current_category = get_queried_object();
?>
<div class="groups-page">
<div class="container">

<div class="groups-header">
<div class="groups-header-main">
<h2 class="groups-header-title"><?php echo $current_category->name; ?></h2>
<p class="groups-header-description">
Attention tech enthusiasts! Don't miss out on the incredible offer available at Amazon, Flipkart, and various online cats. Get your hands on the latest flagship smartphones with discounts of up to 40%. Whether you're an Apple fan or an Android lover, this deal has something for everyone. Upgrade your device and enjoy cutting-edge features without breaking the bank. Hurry, as this offer won't last long!
</p>
</div>
<div class="groups-highlights">
    <div class="groups-highlights-block">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAETklEQVR4nO1Tb2wTZRw+jAlqIizsA0sk9hotYox80y8sS+82du/aa2dMb5DoB7YlS5Si05DQ65cCbjODFoPu2i2LbsasMuxcjGsLiIS2EsUvTj6C+CcoS9BR6Et7MrE/c4ct7fXfjrahH+5JnuTy3vvc8zzv+zuC0KBBgwYNGjTcA/9y5xYHh9w8x1zgOSbBcwgkOjg0QzQyXC7XQzyHRngbWsmEzidzh7ehnS6WfYxoyPA25C8ePJ8ODi3v41Af0UhwcGjfasIrbmQ30QjYy5laeI5JqS3g4JikkzM/8aDzEzzH7C8XdLQXQfCACX6bNsOiYAZn/i04H3R+grcx3ytDu/u74MRBE1z5hIV0yAIQvsfz75nB2ZMt8HVdQlEU1UnT9EmaphM0TQNN05GSBTh0QwpzuA/Bly4T/DJdGFrJc25TpsDlav0LQNO0839RHimKukhR1GtFCshhygUuRvk/sDE3q/VXNm+jaTqtFHe002BG7f9Iz0aj8fVaFeA5BNX6K9vPZUTt7TTYX90Oc0MIlgMsXPrYDKhT/vi5XM3xva1ncgv4eg0w3msoCKxclzT+t1qj1forCyz193TAjAvB0jG2IERwFKUpisq7dvAb8OkRU3aPFHK8r7CAcl3W+A2Jav2VI3Sn0tVLe/ILbB6GEJtWO0IQNKfBv3moWn/lDVQ0lvYodRBmL6guEGZ/rJV/Ft6BttuVPiAMtN0uLGB5V3WBEDtcK/8s4p5twxAsPQ7/LpjTcc+2oYICC6YWCLFYxekn4LRlY638laf5eelTswRK6kLWnRCyVP4X7u7pqbV/FhC2PgMhy3IR8TKcMhuIMoAguwNCXWXCS++sXL38s4AQ2rQyy0A6yMpcmUWwWjFMrgU4tgXgizaAYNddSs/S2uRaqLc/offh7aQXfxT3tEIuSQF/qPfijorm4wSUY938n3w/ricF/I3ei0HikaMfwK9HuuBnjxlGjk7IaxJJAUd1vjiZq+W+gvW6A2dm19sDeMm3sWT4P7wt0GQPJMh3zn6KvoN1tfInnhrDz5EC/jOzqRJJL76mExLPEgBrXoqJA9ao+NeGN+ZhzY5JOOi2lyyw371H3tM8OA/WmHitOyb2S9+4b38JmzzwKCngn1YrzuElS1Sc6Y6JIPF54Qc53ON903B1rLnw9Mea5XfSnq3eRVnTHRPBEhE/0/vwZbX+pIAv6qbgEUIv4LfvIzwYg6lsCDnI2aQ0HnLAdb1TcPjQLrjqa5F5aHSXvCa9a7LPgSWSzNMaF1Kq/SXqvHiQIAV8Xq3wxeO38gJkyJy4ni1RjE27A8CcvF5U+8JsUn0JAX9LkF58U43o6QkMlkj+6effxC15nDa8OQ8PvzIlU5r5rcKi/K6kLpICw4TqMbpBqEV3LDlYKkTVjIp7VAdSXyAVrlcBazQVrH+BqPh73QrExCv1LxBL/V23EYqlxLoX0KBBgwYNGogGwn98sbuyvRYR+wAAAABJRU5ErkJggg==">
    <span>1000</span>
    <div class="groups-highlights-block-text">Subscribers</div>
    </div>
    <div class="groups-highlights-block">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABPUlEQVR4nO3WTUoDQRCG4d5YZfQI6tILufA4JuhpsnDpiCCmah/wCOIBBHGVrL7QkSgRFWam+qegP6hVIDwvzMCE0NbW1vbfoDyDMgad8AeUbyF0HtzhdS/kDY+TE594/bq5Zzyg/O4Bf4fF5HR7yt3P32vHI8K//+vwLGuAyWOzKBRg+Mx3n/B4dJ8lINELi9/ONR7WAbnxsAwogYdVQCk8LAJK4jE2oDQeYwJqwGNoQC14DAmoCY++ARCalgZj/2Y98AeXbvFxUH52i4+D8NotPg5Cr27xcRC+cYuPQxcYQuISvxuW4QhKT1nxQtNguawRYozPGiGJ8FkiJDE+aYRkwieJyI03jSiFN4kojR8VUQt+UERt+F4RteJ3w0M4/vPbSegqeBi2H4B8DaUXKK8gvITQRWlXW1tbqHsbH+lLojYzjbYAAAAASUVORK5CYII=">
    <span>5000</span>
    <div class="groups-highlights-block-text">Deals</div>
    </div>
    <div class="groups-highlights-block">
    <img src="data:image/png;base64,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">
    <span>2000</span>
    <div class="groups-highlights-block-text">Coupons</div>
    </div>
</div>

</div>
<br>
<div class="container">
<div class="row leftright-content-row">
<div class="left-container">   

    <?php 
    
    $defaultArgs = [
		'post_type' => array('deals', 'coupon'),
		'post_status' => 'publish',
		'orderby' => 'modified',
        'tax_query' => [
            [
                'taxonomy' => 'groups',  // Replace with the actual taxonomy name
                'field'    => 'slug',
                'terms'    => $current_category->slug,
            ],
        ],
    ];

    $query = new WP_Query($defaultArgs);

    if ( $query->have_posts() ) : 
        while ( $query->have_posts() ) :
        $query->the_post();
        $postid = get_the_ID();        
        $post = get_post($postid); 
        $post_title = $post->post_title;
        $post_slug = $post->post_name;
        $post_content = $post->post_content;
        $gotolink = get_field('gotolink' , $postid);
        $merchant = get_field('merchant' , $postid);
        $deal_logo = get_field('deal_logo' , $postid);
        ?>
        <div class="deal__card">
        <div class="deal__discount">
            <div class="deal__info">
                <div>
                    <img src="<?php echo $deal_logo;?>" src="<?php echo $merchant; ?>"/>
                </div>
            </div>
        </div>
        <div class="deal__desc">
            <div class="deal__desc-type"></div>
            <div class="deal__desc-title">
                <h3>
                <a target="_blank" rel="nofollow" href="<?php echo SITE_URL."/".$post_slug; ?>"><?php echo $post_title; ?></a>
                </h3>
            </div>
            <div class="deal__desc-meta">
                <span class="deal__desc-meta-lastused">
                    <i class="fa fa-users"></i>&nbsp;<b><?php echo randonNum(); ?></b> People Used Today
                </span>                
            </div>
            <div class="deal__cta">
                <div><a target="_blank" rel="nofollow" href="<?php echo $gotolink; ?>">Get This Deal</a></div>
            </div>
        </div>
        </div>
        <?php
      endwhile;
      the_posts_navigation();
      else :
          echo '<p>No content found.</p>';
      endif;
    ?>
</div>
<div class="right-container">
<?php include_once('includes/sidebar.php'); ?>
</div> 
</div> 

</div>
</div>
</div>

<?php get_footer(); ?>
