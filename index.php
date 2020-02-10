<?php get_header(); ?>
<div id="mainContainer" class="main-container">
    <div class="content__wrapper">
		<div id="sliderHome">
		<!-- Slider -->
		<!-- Get post News Query -->
		<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=slider'); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
			<a href="<?php echo home_url() . '/mon-ngon'; ?>" target="_blank" class="slick-item">
				<img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
				<div class="text-on-slide"><?php the_title() ?></div>
			</a>
		<?php endwhile; wp_reset_postdata(); ?>
		<!-- Get post News Query -->
	</div>
        <section id="monngon" class="section__wrapper">
            <div class="section-label">Món ăn ngon</div>
            <?php
                $args = array(
                    'category_name' => 'mon-ngon',
                    'posts_per_page' => 5
                    
                );
                $q = new WP_Query( $args);
                
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) {
                    $q->the_post();
                    
                    ?>
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
                    wp_reset_postdata();
                }
            ?>
            <div class="view-all-post">
                <a href="<?php echo home_url() . '/mon-ngon'; ?>" target="_blank">Xem tất cả bài viết</a>
            </div>
       </section>

       <section id="thucdon" class="section__wrapper">
            <div class="section-label">Thực đơn nổi bật</div>
            <div id="slideSection" class="slides__wrapper">
                <?php
                    $args = array(
                        'category_name' => 'thuc-don',
                        'posts_per_page' => 5
                    );
                    $q = new WP_Query( $args);
                    
                    if ( $q->have_posts() ) {
                        while ( $q->have_posts() ) {
                        $q->the_post();
                        ?>
                            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                            <div class="item item__wrapper">
                                <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                                    <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                                </a>
                                <div class="item-content__wrapper">
                                    <a href="<?php the_permalink() ?>" class="item-title"><?php the_title() ?></a>
                                    <div class="item-descr"><?php the_excerpt() ?></div>
                                    <div class="view-all-post">
                                        <a href="<?php echo home_url() . '/mon-ngon'; ?>" target="_blank">Đọc thêm</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
            <div class="view-all-post">
                <a href="<?php echo home_url() . '/thuc-don'; ?>" target="_blank">Xem tất cả bài viết</a>
            </div>
       </section>
       <section id="anodau" class="section__wrapper">
            <div class="section-label">Ăn gì? Ở đâu</div>
            <div class="item-list__wrapper">
                <?php
                    $args = array(
                        'category_name' => 'an-o-dau',
                        'posts_per_page' => 8
                    );
                    $q = new WP_Query( $args);
                    
                    if ( $q->have_posts() ) {
                        while ( $q->have_posts() ) {
                        $q->the_post();
                        ?>
                            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                            <div class="item">
                                <div class="item__wrapper">
                                    <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                                        <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                                    </a>
                                    <div class="item-content__wrapper">
                                        <a href="<?php the_permalink() ?>" class="item-title"><?php the_title() ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                    }
                ?>
            </div>
            <div class="view-all-post">
                <a href="<?php echo home_url() . '/an-o-dau'; ?>" target="_blank">Xem tất cả bài viết</a>
            </div>
       </section>

       <section id="khoedep" class="section__wrapper">
            <div class="section-label">Khỏe - Đẹp - Mẹo vặt</div>
            <?php
                $args = array(
                    'category_name' => 'khoe-dep',
                    'posts_per_page' => 3
                );
                $q = new WP_Query( $args);
                
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) {
                    $q->the_post();
                    ?>
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
                    wp_reset_postdata();
                }
            ?>

            <?php
                $args = array(
                    'category_name' => 'meo-vat',
                    'posts_per_page' => 3
                );
                $q = new WP_Query( $args);
                
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) {
                    $q->the_post();
                    ?>
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
                    wp_reset_postdata();
                }
            ?>

            <div class="view-all-post">
                <a href="<?php echo home_url() . '/meo-vat'; ?>" target="_blank">Xem tất cả bài viết</a>
            </div>
       </section>
       <!-- <?php get_footer('instagram'); ?> -->
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>