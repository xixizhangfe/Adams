<div id="blog-right-sidebar" class="sidebar blog-right-sidebar fixed">
    <?php dynamic_sidebar( 'blog-right-sidebar' ); ?>
    <?php echo '
        <script type="text/javascript">
            // var sidebar_w = $(".blog-right-sidebar").width(); //侧边栏宽度
            var sidebar_h = $(".blog-right-sidebar").outerHeight(); //侧边栏高
            // var sidebar_top = $(".blog-right-sidebar").offset().top; //侧边栏上边距

            var articleTop = $(".post_article").offset().top;
            var window_h = $(window).height(); // 可视区高度

            console.log();
            $(".blog-right-sidebar.fixed").css({
                "top": articleTop + "px",
                "max-height": window_h - articleTop + "px"
            });
            
            $(document).scroll(function() {
                var scroll_h = $(document).scrollTop(); // 滚动条高度

                if( scroll_h > articleTop) {
                    $(".blog-right-sidebar.fixed").css({
                        "top": sidebar_h > window_h ? 0 : (window_h - sidebar_h) / 2 + "px",
                        "max-height": window_h + "px"
                    });
                } else {
                    $(".blog-right-sidebar.fixed").css({
                        "top": articleTop + "px",
                        "max-height": window_h - articleTop + "px"
                    });
                }
            })

            // $(window).resize(function() {
            //     var width = $(window).width();
            //     if (width)
            // })
        </script>'
    ?>
</div>