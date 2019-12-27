<div class="sidebar__wrapper">
    <div class="sidebar-label">Bài viết gần đây</div>
    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=new_post'); ?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
        <div class="item__wrapper">
            <a href="<?php the_permalink(); ?>" target="_blank">
                <div class="item-title"><?php the_title() ?></div>
            </a>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>

    <div class="sidebar-label">Chuyên mục</div>
    <?php
        $terms = get_terms( array(
            'post_type' => 'new_post',
            'taxonomy' => 'chuyen_muc'
        ) );

        $terms = array_reverse($terms);

        $count = count($terms);
        if ($count > 0) {    
            foreach ($terms as $term) {
                echo '<a href="'. home_url() . '/' . $term->slug . '">'.$term->name.'</a> / ';
            }
        }
    ?>

    <div class="sidebar-label">Fanpage Facebook</div>    

    <div class="sidebar-label">Tags</div>
</div>

