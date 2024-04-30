<?php get_header(); ?>


        <?php
        // Start the Loop
        while (have_posts()) : the_post();
        $thumbnail = get_field('mission_thumbnail');
            ?>
            <div
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
          ),
          url('<?php echo esc_url($thumbnail['url']); ?>');
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
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
  

<?php get_footer(); ?>