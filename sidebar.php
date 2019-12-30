<div class="sidebar__wrapper">
    <div class="main-search sidebar-content__wrapper">
        <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" id="searchform" class="search-form">
            <input type="text" autocomplete="off" class="form-control search-ajax" name="s" placeholder="Từ khóa">
            <button type="submit">
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-search.png" alt="Search">
            </button>
        </form>
    <div id="load-data"></div>
    </div>

    <div class="sidebar-label">Kết nối với chúng tôi</div>
    <ul class="sidebar-content__wrapper social-block__wrapper">
        <li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/img/sb-facebook.png" title="Facebook" alt="Facebook">
        </a></li>
        <li><a href="https://www.pinterest.com/khuvuonniemvui/ ?>" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/img/sb-pinterest.png" title="Instagram" alt="Instagram">
        </a></li>
        <li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
            <img src="<?php bloginfo('template_directory'); ?>/img/sb-inst.png" title="Instagram" alt="Instagram">
        </a></li>
    </ul>
    <div class="sidebar-label">Bài viết gần đây</div>
    <div class="sidebar-content__wrapper recently-post__wrapper">
        <ul class="item-list__wrapper">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=new_post'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <li class="item__wrapper">
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <div class="item-title"><?php the_title() ?></div>
                    </a>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>

    
    <div class="sidebar-label">Chuyên mục</div>
    <div class="sidebar-content__wrapper">
        <?php
            $terms = get_terms( array(
                'post_type' => 'new_post',
                'taxonomy' => 'chuyen_muc'
            ) );

            // $terms = array_reverse($terms);

            $count = count($terms);
            if ($count > 0) {
                foreach ($terms as $term) {
                    echo '<a href="'. home_url() . '/' . $term->slug . '">'.$term->name.'</a> / ';
                }
            }
        ?>
    </div>

    <div class="sidebar-label">Fanpage Facebook</div>
    <div class="sidebar-content__wrapper">
        <div class="fb-page" data-href="https://www.facebook.com/B%E1%BA%BFp-Ni%E1%BB%81m-Vui-110486483646795" data-tabs="timeline" data-width="280" data-height="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/B%E1%BA%BFp-Ni%E1%BB%81m-Vui-110486483646795" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/B%E1%BA%BFp-Ni%E1%BB%81m-Vui-110486483646795">Bếp Niềm Vui</a></blockquote></div>
    </div>

    <div class="sidebar-label">Tags</div>
    <div class="sidebar-content__wrapper"></div>
    
</div>

