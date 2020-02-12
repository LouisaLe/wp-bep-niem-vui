<div class="sidebar__wrapper">
    <div class="sidebar__border">
        <div class="main-search sidebar-content__wrapper">
            <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" id="searchform" class="search-form">
                <input type="text" autocomplete="off" class="form-control search-ajax typewriter" name="s" placeholder="Hôm nay ăn gì?">
                <button type="submit">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icon-search.png" alt="Search">
                </button>
            </form>
        <div id="load-data"></div>
        </div>
        <div class="sidebar-label">Bài viết gần đây</div>
        <div class="sidebar-content__wrapper recently-post__wrapper">
            <ul class="item-list__wrapper">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=post'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                    <li class="item__wrapper">
                        <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                            <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                        </a>
                        <a href="<?php the_permalink(); ?>" target="_blank">
                            <div class="item-title"><?php the_title() ?></div>
                        </a>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>

        
        <div class="sidebar-label">Chuyên mục</div>
        <div class="sidebar-content__wrapper">
        <ul class="category-list__wrapper">
            <?php
            $args = array(
                'child_of'  => 0,
                '<strong>orderby</strong>'    => 'id',
            );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) { ?>
            <li class="item__wrapper">
            <a href="<?php echo get_term_link($category->slug, 'category');?>">
                <?php echo $category->name; ?>
                <span><?php echo '['.$category->count.']'; ?></span>
            </a>
            </li>
            <?php } ?>
            </ul>
        </div>

        <div class="sidebar-label">Fanpage Facebook</div>
        <a href="https://www.facebook.com/bepniemvui" target="_blank" class="fanpage-facebook"></a>
        
        <div class="sidebar-label">Tags</div>
        <div class="sidebar-content__wrapper">
            <?php $post_tags = get_the_tags();
                if ( $post_tags ) {
                    echo $post_tags[0]->name; 
                }
            ?>
        </div>
    </div>
</div>

