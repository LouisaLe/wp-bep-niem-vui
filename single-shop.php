<?php get_header('shop'); ?>

<div id="mainContainer" class="main-container page-list-all">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->  
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
        <div class="product-detail__wrapper">
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
        </div>
    </div>
</div>
<?php get_footer(); ?>