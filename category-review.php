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
                echo 'Chọn gì cho tốt là chuyên mục review kinh nghiệm mua sản phẩm tốt. Một ngày tốt lành!';
            ?>

        </div>

    <!-- Get post mặt định -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="item item__wrapper">
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                    <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                </a>
                <div class="item-content__wrapper">
                    <a href="<?php the_permalink() ?>" class="item-title"><?php the_title() ?></a>
                    <div class="item-descr"><?php the_excerpt() ?></div>
                    <a href="<?php the_permalink() ?>" class="btn-readmore">Đọc thêm</a>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>Không có bài viết nào!</p>
        <?php endif; ?>
    <!-- Get post mặt định -->

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