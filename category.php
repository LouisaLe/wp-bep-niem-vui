<?php get_header(); ?>

<div id="mainContainer" class="main-container page-list-all">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
        <!-- <?php if (get_query_var('cat') == 26)
            echo get_cat_name(get_query_var('cat'));
        ?> -->

    <!-- <?php if (is_category( )) {
        $thiscat = get_category( get_query_var( 'cat' ) );
        $catid = $thiscat->cat_ID;
        //create array from get_category_parents
        $parent_list = (explode (',',get_category_parents($catid,false,',')));
        $parent_name = ($parent_list[0]);
        $parent = get_cat_ID( $parent_name );

        $catlist = get_categories(
            array(
            'child_of' => $parent,
            'orderby' => 'id',
            'order' => 'DESC',
            'exclude' => $catid,
            'hide_empty' => '0'
            ) );
            //check if current category is parent category
            if ( $catid == $parent ) {
                // echo '<span>this is a parent category page</span>';
                // echo count($catlist);
                foreach($catlist as $cat) { 
                    echo $cat->name;?>
                    <a href="<?php echo get_term_link($cat->slug, 'category');?>">
                    <?php
                }
            }
            else {
                // echo '<span>this is a child category page</span>';
            }
        }
    ?> -->
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