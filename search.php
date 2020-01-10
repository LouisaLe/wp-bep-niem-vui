<?php get_header(); ?>

<div id="mainContainer" class="main-container page-list-all">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
        <?php
            $s=get_search_query();
            $args = array(
                            's' =>$s
                        );
                // The Query
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) {
                    _e("<h2 class='search-msg'>Kết quả tìm kiếm: ".get_query_var('s')."</h2>");
                    while ( $the_query->have_posts() ) {
                    $the_query->the_post();?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                    <div class="item item__wrapper">
                            <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                                <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                            </a>
                            <div class="item-content__wrapper">
                                <a href="<?php the_permalink() ?>" class="item-title"><?php the_title() ?></a>
                                <div class="item-descr"><?php the_excerpt() ?></div>
                                <a href="<?php the_permalink() ?>" class="btn-readmore">Đọc thêm</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                else {
            ?>
                <div class="search-result">
                    <h2 class="search-msg">Nothing Found</h2>
                    <div class="alert alert-info">
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
        
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>