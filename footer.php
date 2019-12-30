    <div class="instagram__wrapper">
        Instangram's images here.
        By slider for full width of page
    </div>
    <footer id="footer">
        <div class="copyright">
            &copy; - <?php echo date('Y'); ?> - <?php bloginfo('sitename'); ?>
        </div>
    </footer>
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