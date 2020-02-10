<?php get_header('shop'); ?>

<div id="mainContainer" class="main-container page-list-all">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->  
        <div class="search-header__wrapper">
            <div class="main-search sidebar-content__wrapper">
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
        <div class="products-list__container">
            <section id="d_section3">
                <div class="products-list__label">
                    Thực phẩm tốt cho sức khỏe
                </div>

                <div class="products-list__wrapper">
                    <?php
                        $args = array(
                            'category_name' => 'thuc-pham',
                            'posts_per_page' => 10
                        );
                        $q = new WP_Query( $args);
                        
                        if ( $q->have_posts() ) {
                            while ( $q->have_posts() ) {
                            $q->the_post();
                            
                            ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                <div class="product-item product-item__wrapper">
                                    <div class="product-item__border">
                                        <a href="<?php the_permalink() ?>" class="product-item__feature-img">
                                            <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                                        </a>
                                        <a href="<?php the_permalink() ?>" class="product-item__title"><?php the_title() ?></a>
                                        <a href="<?php the_permalink() ?>" class="btn-product__detail">Xem chi tiết</a>
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
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                        wp_reset_postdata();
                        }
                    ?>
                <div>
            </section>

            <section id="d_section3">
                <div class="products-list__label">
                    Đồ dùng bếp tiện nghi
                </div>

                <div class="products-list__wrapper">
                    <?php
                        $args = array(
                            'category_name' => 'do-dung-bep',
                            'posts_per_page' => 10
                        );
                        $q = new WP_Query( $args);
                        
                        if ( $q->have_posts() ) {
                            while ( $q->have_posts() ) {
                            $q->the_post();
                            
                            ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                <div class="product-item product-item__wrapper">
                                    <div class="product-item__border">
                                        <a href="<?php the_permalink() ?>" class="product-item__feature-img">
                                            <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                                        </a>
                                        <a href="<?php the_permalink() ?>" class="product-item__title"><?php the_title() ?></a>
                                        <a href="<?php the_permalink() ?>" class="btn-product__detail">Xem chi tiết</a>
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
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                        wp_reset_postdata();
                        }
                    ?>
                <div>
            </section>

            <section id="d_section3">
                <div class="products-list__label">
                    Sách hay về nấu ăn
                </div>

                <div class="products-list__wrapper">
                    <?php
                        $args = array(
                            'category_name' => 'sach-nau-an',
                            'posts_per_page' => 10
                        );
                        $q = new WP_Query( $args);
                        
                        if ( $q->have_posts() ) {
                            while ( $q->have_posts() ) {
                            $q->the_post();
                            
                            ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                <div class="product-item product-item__wrapper">
                                    <div class="product-item__border">
                                        <a href="<?php the_permalink() ?>" class="product-item__feature-img">
                                            <img src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>"/>
                                        </a>
                                        <a href="<?php the_permalink() ?>" class="product-item__title"><?php the_title() ?></a>
                                        <a href="<?php the_permalink() ?>" class="btn-product__detail">Xem chi tiết</a>
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
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                        wp_reset_postdata();
                        }
                    ?>
                <div>
            </section>

        </div>
    </div>
</div>
<?php get_footer(); ?>