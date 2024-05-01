<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
<div class="form-group">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search...', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s">
</div>
    <button type="submit" class="search-submit read-more-btn"><?php echo esc_html_x('Search', 'submit button'); ?></button>
</form>
