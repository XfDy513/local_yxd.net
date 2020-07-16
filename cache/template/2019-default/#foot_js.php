<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<!-- Bootstrap core Javascript
================================================== -->
<script src="<?php echo $base_url;?>/common/css/bootstrap/bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!--打印-->
<script src="<?php echo $base_url;?>/common/plugins/font-print/c_tool.js"></script>

<!-- 繁简切换 -->
<?php if(get('lang_type')=='1') { ?><script type="text/javascript" src="<?php echo $base_url;?>/common/js/common.js"></script><?php } ?>

<!-- 左侧树形菜单 -->
<link rel="stylesheet" href="<?php echo $base_url;?>/common/plugins/left_menu_list/left_menu_list.css">
<script src="<?php echo $base_url;?>/common/plugins/left_menu_list/left_menu_list.js"></script>



<script type="text/javascript">
    <!--
    var myswiper = new Swiper('.content-picture', {
        slidesPerView: 1,
spaceBetween : 10,
        pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
        lazy: true,
        loop: true,
    });
    //-->
</script>








