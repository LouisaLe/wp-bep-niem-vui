<?php get_header(); ?>
<div id="mainContainer" class="main-container post--detail">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>

        <!-- <?php
            $categories = get_the_category($post->ID);
            if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
        
                $args=array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'showposts'=>3,
                'caller_get_posts'=>1
                );
                $my_query = new wp_query($args);
                
                if( $my_query->have_posts() ) 
                {
                    echo '<div class="related-post__top"><ul class="list-news">';
                    while ($my_query->have_posts())
                    {
                        $my_query->the_post();
                        ?>
                        <li>
                            <div class="item-list">
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </div>
                        </li>
                        <?php
                    }
                    echo '</ul></div>';
                }
            }
        ?> -->
        <!-- Get post mặt định -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post--detail__wrapper">

                <h1 class="item-title"><?php the_title(); ?></h1>
                <div class="posted-date">Ngày đăng: <?php the_date(); ?></div>

                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>

                <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                    <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                </a>
                <div class="item-content__wrapper">
                    <div class="item-descr"><?php the_content() ?></div>
                </div>
            </div>
            <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
        <?php endwhile; else : ?>
            <p>Không có bài viết nào!</p>
        <?php endif; ?>
        <!-- Get post mặt định -->
        <!-- Like, share button -->
        
        <div class="post-tags">Tags:
            <?php
                $post_tags = get_the_tags();
    
                if ( $post_tags ) {
                    foreach( $post_tags as $tag ) {
                    echo $tag->name . ', '; 
                    }
                }
            ?>
        </div>
        
        <?php
            $categories = get_the_category($post->ID);
            if ($categories) {
                $category_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
        
                $args=array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'showposts'=>5, // Số bài viết bạn muốn hiển thị.
                'caller_get_posts'=>1
                );
                $my_query = new wp_query($args);
                if( $my_query->have_posts() ) 
                {
                    echo '<div class="post__label">Có thể bạn quan tâm</div><ul class="list-news">';
                    while ($my_query->have_posts())
                    {
                        $my_query->the_post();
                        ?>
                        <li>
                            <div class="item-list">
                                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </div>
                        </li>
                        <?php
                    }
                    echo '</ul>';
                }
            }
        ?>	
	<div class="post__label">Bình luận</div>
    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="20" width="100%" data-colorscheme="light"></div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>