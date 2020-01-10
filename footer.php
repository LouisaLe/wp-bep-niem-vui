
    
</div>
<footer id="footer">
    <div class="footer-content__wrapper">
        <div class="footer-content__item recent-post__wrapper">
            <!-- Most view posts -->
            <div class="footer__label">Bài viết nổi bật</div>
            <ul class="item-list__wrapper">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post'); ?>
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
            <div class="footer__label">Chuyên mục</div>
            <ul class="item-list__wrapper">
                <?php
                $args = array(
                    'child_of'  => 0,
                    '<strong>orderby</strong>'    => 'id',
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) { ?>
                <li class="item__wrapper">
                <a href="<?php echo get_term_link($category->slug, 'category');?>">
                    <?php echo $category->name; ?>
                    <span><?php echo '['.$category->count.']'; ?></span>
                </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="footer-content__item connec-icos__wrapper">
            <div class="footer__label">Kết nối với chúng tôi</div>
                <ul class="sidebar-content__wrapper social-block__wrapper">
                    <li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sb-facebook.png" title="Facebook" alt="Facebook">
                    </a></li>
                    <li><a href="https://www.pinterest.com/khuvuonniemvui/ ?>" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sb-pinterest.png" title="Pinterest" alt="Pinterest">
                    </a></li>
                    <li><a href="<?php echo home_url() . '/contact'; ?>" target="_blank">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sb-inst.png" title="Instagram" alt="Instagram">
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
    COPYRIGHT &copy; <?php echo date('Y'); ?> <?php bloginfo('sitename'); ?> - DESIGNED BY <?php bloginfo('sitename'); ?>
    </div>
    <div class="email-contact">khuvuonniemvui@gmail.com</div>
    <div class="privacy__wrapper">
        <ul class="common-info">
			<li>
				<a href="<?php echo home_url() . '/about'; ?>" target="_blank">About</a>
			</li>
			<li>
				<a href="<?php echo home_url() . '/policy'; ?>" target="_blank">Privacy Policy</a>
			</li>
			<li>
				<a href="<?php echo home_url() . '/contact'; ?>" target="_blank">Contact</a>
			</li>
		</ul>
    </div>
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
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v5.0'
    });
  };
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
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