<?php
/** @Khai bao hang gia tri
 * @ THEME_URI = lay duong dan thu muc theme
 * @ CORE = lay duong dan thu muc core
 **/

 define('THEME_URI', get_stylesheet_directory());
 define('CORE', THEME_URI . "/core");

 /** Nhung file /core/init.php */

 require_once(CORE . "/init.php");

 /** Thiet lap chieu rong noi dung */

 if (!isset($content_width)) {
     $content_width = 620;
 }

 /**
  * Khai bao chuc nang cho theme
  */

  if (!function_exists('bnv_theme_setup')) {
      function bnv_theme_setup() {
        $language_folder = THEME_URI . '/languages';
        load_theme_textdomain('bepniemvui', $language_folder);
        /**Tu dong them the RSS len the head */
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('image', 'video', 'gallery', 'quote', 'link'));
        add_theme_support('title-tag');
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background', $default_background);
        /**Theme register menu */
        register_nav_menu('primary-menu', __('Primary Menu', 'bepniemvui'));
        /*tao side bar*/
        $sidebar = array (
            'name' => __('Main Sidebar', 'bepniemvui'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
      }
      add_action('init', 'bnv_theme_setup');
  }

//   header

if (!function_exists('bnv_menu'))  {
    function bnv_menu($menu) {
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}


if (!function_exists('bnv_pagination'))  {
    function bnv_pagination() {
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
            return '';
        } ?>
        <nav class="pagination">
            <?php if (get_next_posts_link()) : ?>
                <div class="prev">
                    <?php next_posts_link(__('Older Posts', 'bepniemvui')); ?>
                </div>
            <?php endif; ?>

            <?php if (get_previous_posts_link()) : ?>
                <div class="next">
                    <?php previous_posts_link(__('Newest Posts', 'bepniemvui')); ?>
                </div>
            <?php endif; ?>
      </nav>
    <?php }
}

if (!function_exists('get_thumbnail'))  {
    function get_thumbnail($size) {
        if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
          endif;
    }
}

function custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );