<?php get_header(); ?>
<div id="mainContainer" class="main-container">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
        <!-- Get post mặt định -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post--detail__wrapper">

                <div class="item-title"><?php the_title(); ?></div>
                <div class="posted-date">Ngày đăng: <?php the_date(); ?></div>

                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>

                <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                    <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                </a>
                <div class="item-content__wrapper">
                    
                    <div class="item-descr"><?php the_content() ?></div>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>Không có bài viết nào!</p>
        <?php endif; ?>
    <!-- Get post mặt định -->
    <!-- Get bài viết liên quan -->
            <!-- Hiển thị bài viết theo Tag -->
        <div id="relatedposttags">    
            <?php
                $tags = wp_get_post_tags($post->ID);
                if ($tags) 
                {
                    $tag_ids = array();
                    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        // lấy danh sách các tag liên quan
                    $args=array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID), // Loại trừ bài viết hiện tại
                    'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                    'caller_get_posts'=>1
                    );
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) 
                    {
                        echo '<h3>Bài viết liên quan</h3><ul>';
                        while ($my_query->have_posts()) 
                        {
                            $my_query->the_post();
                            ?>
                            <li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                            <?php
                        }
                        echo '</ul>';
                    }
                }
            ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>