<?php
/*
Template Name: Blog Page Template
*/
?>

<?php get_header(); ?>

<section class="mission-section mission-section--vh">
      <div class="container">
        <h2>Blog Posts</h2>
          <div class="content-card--layout">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = 8; // Adjust the number of posts per page as needed

$blog_query = new WP_Query(array(
    'post_type' => 'post', 
    'posts_per_page' => $posts_per_page, 
    'paged' => $paged,
    'order' => 'ASC', 
));


if ($blog_query->have_posts()) :
    while ($blog_query->have_posts()) : $blog_query->the_post();

        ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>">
            <div
              class="content-card"
              style="
                background-image: linear-gradient(
                    rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6)
                  ),
                  url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');
              "
            >
              <span class="content-card__category">blog</span>
              <div class="content-card__body">
                <h3 class="content-card__title">
                <?php the_title(); ?>
                
                </h3>
                <div class="content-card__dates">
                  <p class="content-card__date"><?php the_time('m/d/y'); ?> </p>
                  <!-- <p class="content-card__time"> - <?php echo get_field("read_time"); ?> min read</p> -->
                </div>
                <div class="content-card__link-flex">
                  <div class="content-card__link">Read</div>
                  <svg
                    width="30"
                    height="19"
                    viewBox="0 0 30 19"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28.5416 9.33329L1.45841 9.24461M28.5416 9.33329L20.181 17.6393M28.5416 9.33329L20.2356 0.972715"
                      stroke="white"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </a>
        <?php
    endwhile;
    // Restore original post data
    wp_reset_postdata();
else :
    echo 'No missions found.';
endif;
?>
          
</div>   
          <?php
          
          $total_pages = $blog_query->max_num_pages;
    if ($total_pages > 1) {
        echo '<div class="pagination">';
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => max(1, $paged),
            'total' => $total_pages,
            'prev_text' => __('&laquo;'),
            'next_text' => __('&raquo;'),
        ));
        echo '</div>';
    }
          ?>
      </div>
    </section>

<?php get_footer(); ?>