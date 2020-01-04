
    
</div>
<footer id="footer">
    <div class="footer-content__wrapper">
        <div class="footer-content__item recent-post__wrapper">
            <!-- Most view posts -->
            <ul class="item-list__wrapper">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=new_post'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                    <li class="item__wrapper">
                        <a href="<?php the_permalink(); ?>" target="_blank">
                            <div class="item-title"><?php the_title() ?></div>
                        </a>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="footer-content__item category__wrapper">
            <?php
            $args = array(
                'child_of'  => 0,
                '<strong>orderby</strong>'    => 'id',
            );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) { ?>
            <li>
            <a href="<?php echo get_term_link($category->slug, 'category');?>">
                <?php echo $category->name; ?>
                <span><?php echo '['.$category->count.']'; ?></span>
            </a>
            </li>
            <?php } ?>
            </ul>
        </div>
        <div class="footer-content__item connec-icos__wrapper">
            <!-- Logo icons -->
        </div>
    </div>
    <div class="copyright">
    COPYRIGHT &copy; <?php echo date('Y'); ?> <?php bloginfo('sitename'); ?> - DESIGNED BY <?php bloginfo('sitename'); ?>
    </div>
    <div class="email-contact">khuvuonniemvui@gmail.com</div>
</footer>
<div id="btnTop" class="hidden">
    <button class="btn-top">Top</button>
</div>
<!-- End page wrapper -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js"></script>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js" defer></script>
<script>
    var timeout = null; // khai báo biến timeout
    $(".search-ajax").keyup(function(){ // bắt sự kiện khi gõ từ khóa tìm kiếm
        clearTimeout(timeout); // clear time out
        timeout = setTimeout(function (){
           call_ajax(); // gọi hàm ajax
        }, 500);
    });
    function call_ajax() { // khởi tạo hàm ajax
        var data = $('.search-ajax').val(); // get dữ liệu khi đang nhập từ khóa vào ô
        $.ajax({
            type: 'POST',
            async: true,
            url: '<?php echo admin_url('admin-ajax.php');?>',
            data: {
                'action' : 'Post_filters', 
                'data': data
            },
            beforeSend: function () {
            },
            success: function (data) {
                $('#load-data').html(data); // show dữ liệu khi trả về
            }
        });
    }
</script>
<?php wp_footer(); ?>
</body>
</html>