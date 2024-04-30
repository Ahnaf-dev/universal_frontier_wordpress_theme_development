<?php get_header(); ?>

<section  style="
                background-image: linear-gradient(
                    rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6)
                  ),
                  url('http://universal-frontier.local/wp-content/uploads/2024/04/hero-image.jpg');
              " class="hero">
      <div class="container">
        <h2>Welcome To Universal Frontier</h2>
        <p>
          Embarking on a Boundless Odyssey: Empowering Humanity's Journey Beyond
          the Stars.
        </p>
        <a class="read-more-btn" href="<?php echo site_url('/about-2'); ?>">
          Read More
          <svg
            width="30"
            height="19"
            viewBox="0 0 30 19"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M28.5416 9.33329L1.45841 9.24461M28.5416 9.33329L20.181 17.6393M28.5416 9.33329L20.2356 0.972715"
              stroke="white"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </a>
       
      </div>
    </section>
    <section class="mission-section">
      <div class="container">
        <h2>Latest Mission & News</h2>
          <div class="content-card--layout">
          <?php
$missions_query = new WP_Query(array(
    'post_type' => 'missions', 
    'posts_per_page' => 3, 
    'order' => 'ASC', 
));

if ($missions_query->have_posts()) :
    while ($missions_query->have_posts()) : $missions_query->the_post();
    $mission_thumbnail = get_field('mission_thumbnail');

        ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>">
            <div
              class="content-card"
              style="
                background-image: linear-gradient(
                    rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6)
                  ),
                  url('<?php echo esc_url($mission_thumbnail['url']); ?>');
              "
            >
              <span class="content-card__category">mission</span>
              <div class="content-card__body">
                <h3 class="content-card__title">
                <?php the_title(); ?>
                
                </h3>
                <div class="content-card__dates">
                  <p class="content-card__date"><?php the_time('m/d/y'); ?> </p>
                  <p class="content-card__time"> - <?php echo get_field("read_time"); ?> min read</p>
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
          <a href="#" class="content-card__more">
            <p>More Missions</p>
          </a>
          </div>
      </div>
    </section>
    <?php
$specific_post_id = 31; 

$args = array(
    'post_type' => 'missions', 
    'post__in' => array($specific_post_id),
);

$specific_post_query = new WP_Query($args);

if ($specific_post_query->have_posts()) :
    while ($specific_post_query->have_posts()) : $specific_post_query->the_post();
    $featured_thumbnail = get_field('mission_thumbnail');

      ?> 
      <section
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
          ),
          url('<?php echo esc_url($featured_thumbnail['url']); ?>');
      "
      class="featured"
    >
      <div class="container">
        <span>Featured Story</span>
        <h2><?php the_title()?></h2>
        <p>
        <?php the_excerpt()?>
        </p>
        <a class="read-more-btn read-more-btn--featured" href="<?php echo esc_url( get_permalink() ); ?>">
        Read
          <svg
            width="30"
            height="19"
            viewBox="0 0 30 19"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M28.5416 9.33329L1.45841 9.24461M28.5416 9.33329L20.181 17.6393M28.5416 9.33329L20.2356 0.972715"
              stroke="white"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
      </a>
       
      </div>
    </section>
     <?php 
    endwhile;
    wp_reset_postdata();
else :
    echo 'No posts found.';
endif;
?>

<section class="mission-section">
  <div class="container">
    <h2>Blog Posts</h2>
    <div class="content-card--layout">
    <?php
$blog_query = new WP_Query(array(
    'post_type' => 'post', 
    'posts_per_page' => 3, 
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
<a href="#" class="content-card__more">
            <p>More Blog Posts</p>
          </a>
    </div>
  </div>
</section>


   
<?php get_footer(); ?>