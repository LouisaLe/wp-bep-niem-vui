<?php get_header('shop'); ?>

<div class="search-header__wrapper">
    <div class="main-search sidebar-content__wrapper">
        <div class="icon-home">
            <a href="<?php echo home_url() ?>" title="home"></a>
        </div>
        <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" id="searchform" class="search-form">
            <input type="text" autocomplete="off" class="form-control search-ajax typewriter" name="s" placeholder="Bạn cần tìm gì?">
            <button type="submit">
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-search.png" alt="Search">
            </button>
        </form>

    </div>
    <ul class="tags__wrapper">
        <li>
            <a id="sectionAll" href="#">All</a>
        </li>
        <li>
            <a id="section1"  href="#">Thực phẩm tốt cho sức khỏe</a>
        </li>
        <li>
            <a id="section2" href="#">Đồ dùng bếp tiện nghi</a>
        </li>
        <li>
            <a id="section3" href="#">Sách hay về nấu ăn</a>
        </li>
    </ul>
    <div id="load-data"></div>
</div>

<div id="mainContainer" class="main-container page-list-all">
    <div class="content__wrapper">
        <div class="product-content--detail__wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <!-- Breadcrumb code --> 
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
                    <div class="post--detail__wrapper">
                        
                        <div class="posted-date">Ngày đăng: <?php the_date(); ?></div>
                        
                        <div class="product-detail__wrapper">
                            <div class="product-detail__img">
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>

                                    <a href="<?php the_permalink() ?>" class="item-img__wrapper">
                                        <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                                    </a>
                            </div>
                            <div class="product-detail__sale">
                                <h1 class="item-title"><?php the_title(); ?></h1>
                                <div class="product-item__list-shops">
                                    Mua ngay giá tốt với
                                    <?php $customfield = get_post_custom();?>
                                    <ul class="list-shops">
                                        <!-- tiki -->
                                        <?php
                                            if(isset($customfield['tiki']) && get_post_meta(get_the_ID(), 'tiki',true)) {
                                                ?>
                                            <li class="tiki">
                                                <a href="<?php echo get_post_meta(get_the_ID(), 'tiki',true); ?>"></a>
                                                </a>
                                            </li>
                                        <?php

                                            }
                                        ?>

                                        <!-- Shopee -->

                                        <?php
                                            if(isset($customfield['shopee']) && get_post_meta(get_the_ID(), 'shopee',true)) {
                                                ?>
                                            <li class="shopee">
                                                <a href="<?php echo get_post_meta(get_the_ID(), 'shopee',true); ?>"></a>
                                                </a>
                                            </li>
                                        <?php

                                            }
                                        ?>

                                        <!-- Lazada -->

                                        <?php
                                            if(isset($customfield['lazada']) && get_post_meta(get_the_ID(), 'lazada',true)) {
                                                ?>
                                            <li class="lazada">
                                                <a href="<?php echo get_post_meta(get_the_ID(), 'lazada',true); ?>"></a>
                                                </a>
                                            </li>
                                        <?php

                                            }
                                        ?>

                                        <!-- Sendo -->
                                        <?php
                                            if(isset($customfield['sendo']) && get_post_meta(get_the_ID(), 'sendo',true)) {
                                                ?>
                                            <li class="sendo">
                                                <a href="<?php echo get_post_meta(get_the_ID(), 'sendo',true); ?>"></a>
                                                </a>
                                            </li>
                                        <?php

                                            }
                                        ?>

                                        <!-- Vinabook -->
                                        <?php
                                            if(isset($customfield['vinabook']) && get_post_meta(get_the_ID(), 'vinabook',true)) {
                                                ?>
                                            <li class="vinabook">
                                                <a href="<?php echo get_post_meta(get_the_ID(), 'vinabook',true); ?>"></a>
                                                </a>
                                            </li>
                                        <?php

                                            }
                                        ?>

                                        <!-- Fresh SG -->
                                        <?php
                                            if(isset($customfield['freshSG']) && get_post_meta(get_the_ID(), 'freshSG',true)) {
                                                ?>
                                            <li class="freshSG">
                                                <a href="<?php echo get_post_meta(get_the_ID(), 'freshSG',true); ?>"></a>
                                                </a>
                                            </li>
                                        <?php

                                            }
                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            </div>
                        <div class="item-content__wrapper">
                            <div class="item-descr"><?php the_content() ?></div>
                        </div>
                    </div>
                    <div class="fb-like" data-href="<?php the_permalink() ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                <?php endwhile; else : ?>
                    <p>Không có bài viết nào!</p>
            <?php endif; ?>
                                             
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