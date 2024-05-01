<?php get_header(); ?>


<section class="search">
  <div class="container">
      <?php get_search_form() ?>
    <h2>Search Results For </h2>
    <div class="content-card--layout">
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    <?php if (get_post_type() == 'post'): ?>
      <?php $image = esc_url(get_the_post_thumbnail_url()); ?>
         <?php $type = 'blog'; ?>
        <?php elseif (get_post_type() == 'page'): ?>
         <?php $image = 'http://universal-frontier.local/wp-content/uploads/2024/04/about.jpg'; ?>
         <?php $type = 'page'; ?>
            
        <?php else: ?>
            <?php  $mission_thumbnail = get_field('mission_thumbnail'); ?>
            <?php $image = esc_url($mission_thumbnail['url']); ?>
            <?php $type = 'mission'; ?>
        <?php endif; ?>
 
    <a href="<?php echo esc_url( get_permalink() ); ?>">
            <div
              class="content-card"
              style="
                background-image: linear-gradient(
                    rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6)
                  ),
                  url('<?php echo $image; ?>');
              "
            >
              <span class="content-card__category"><?php echo $type ?></span>
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
    <?php endwhile; ?>
<?php else: ?>
    <p><?php esc_html_e('No matching posts found.'); ?></p>
<?php endif; ?>


    </div>
  </div>

</section>

<?php get_footer(); ?>
