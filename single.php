<?php get_header(); ?>


        <?php
        // Start the Loop
        while (have_posts()) : the_post();
            ?>
            <div
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
          ),
          url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');
      "
      class="banner"
    ></div>
    <section class="single-post">
      <h2><?php the_title(); ?></h2>
      <div class="single-post__creator">
        <span class="single-post__date"><?php the_time('m/d/y'); ?></span>
        <p class="single-post__author">By <?php echo get_the_author(); ?></p>
      </div>
      <?php the_content(); ?>

    </section>
            <?php
           
        endwhile;
        ?>
  

<?php get_footer(); ?>