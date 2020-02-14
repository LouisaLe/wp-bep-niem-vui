<?php get_header(); ?>

<div id="mainContainer" class="main-container page-list-all">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
        <div class="getting__category">
            <?php
                echo 'Blog yêu thương là nơi chia sẻ những câu chuyện, kỉ niệm về hành trình nấu ăn. Chúc bạn một ngày tốt lành!';
            ?>

        </div>

    <div class="blog__wrapper">

        <!-- Get post mặc định -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="item item__wrapper">
                    <div class="item__border">
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                        <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                            <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                        </a>
                        <div class="item-content__wrapper">
                            <a href="<?php the_permalink() ?>" class="item-title"><?php the_title() ?></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <p>Không có bài viết nào!</p>
            <?php endif; ?>
        <!-- Get post mặc định -->
    </div>

    <?php if(paginate_links()!='') {?>
        <div class="pagination">
            <?php
            global $wp_query;
            $big = 999999999;
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'prev_text'    => __('« Mới hơn'),
                'next_text'    => __('Tiếp theo »'),
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
                ) );
            ?>
        </div>
    <?php } ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>