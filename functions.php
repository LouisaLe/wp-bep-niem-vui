
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

 add_filter('use_block_editor_for_post', '__return_false');

//  if (!isset($content_width)) {
//      $content_width = 620;
//  }

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
        ?>
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
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// search autocomplete
add_action('wp_ajax_Post_filters', 'Post_filters');
add_action('wp_ajax_nopriv_Post_filters', 'Post_filters');
function Post_filters() {
    if(isset($_POST['data'])){
        $data = $_POST['data']; // nhận dữ liệu từ client
        echo '<ul>';
        $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&s='.$data);
        global $wp_query; $wp_query->in_the_loop = true;
        while ($getposts->have_posts()) : $getposts->the_post();
            echo '<li><a target="_blank" href="'.get_the_permalink().'">'.get_the_title().'</a></li>'; 
        endwhile; wp_reset_postdata();
        echo '</ul>';
        die(); 
    }
}

// for custom single template for specifical category
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t ) {
    foreach( (array) get_the_category() as $cat ) { 
        if ( file_exists(get_stylesheet_directory() . "/single-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-{$cat->slug}.php"; 
        if($cat->parent)
        {
            $cat = get_the_category_by_ID( $cat->parent );
            if ( file_exists(get_stylesheet_directory() . "/single-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-{$cat->slug}.php";
        }
    } 
    return $t;
}

