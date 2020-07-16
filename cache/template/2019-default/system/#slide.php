<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php
if(config::get('slide_style_position')=='1'){
$slide_style_position='text-center';
}elseif(config::get('slide_style_position')=='2'){
$slide_style_position='text-right';
}else{
$slide_style_position='text-left';
}

?>
<?php
if(config::get('slide_btn_shape')=='2'){
$slide_btn_shape = 'border-radius: 0;';
$slide_btn_width = config::get('slide_btn_width');
$slide_btn_height = config::get('slide_btn_height');
}else{
$slide_btn_width = config::get('slide_btn_width');
$slide_btn_height = $slide_btn_width;
}

?>

<div class="row">
<!-- Swiper -->
<div class="swiper-container visual-swiper-slide">
<div class="swiper-wrapper">
<?php if(get('slide_number')=='1') { ?>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic1_url');?>" target="_blank"><img  src="<?php echo get('slide_pic1');?>" alt="<?php echo get('slide_pic1_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic1_title')) { ?><h2><?php echo get('slide_pic1_title');?></h2><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic1_info');?></p><?php } ?>
<?php if(get('slide_pic1_url')) { ?><a href="<?php echo get('slide_pic1_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic1_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<?php } elseif (get('slide_number')=='2') { ?>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic1_url');?>" target="_blank"><img  src="<?php echo get('slide_pic1');?>" alt="<?php echo get('slide_pic1_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic1_title')) { ?><h2><?php echo get('slide_pic1_title');?></h2><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic1_info');?></p><?php } ?>
<?php if(get('slide_pic1_url')) { ?><a href="<?php echo get('slide_pic1_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic1_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic2_url');?>" target="_blank"><img  src="<?php echo get('slide_pic2');?>" alt="<?php echo get('slide_pic2_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic2_title')) { ?><h2><?php echo get('slide_pic2_title');?></h2><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic2_info');?></p><?php } ?>
<?php if(get('slide_pic2_url')) { ?><a href="<?php echo get('slide_pic2_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic2_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<?php } elseif (get('slide_number')=='3') { ?>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic1_url');?>" target="_blank"><img  src="<?php echo get('slide_pic1');?>" alt="<?php echo get('slide_pic1_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic1_title')) { ?><h2><?php echo get('slide_pic1_title');?></h2><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic1_info');?></p><?php } ?>
<?php if(get('slide_pic1_url')) { ?><a href="<?php echo get('slide_pic1_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic1_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic2_url');?>" target="_blank"><img  src="<?php echo get('slide_pic2');?>" alt="<?php echo get('slide_pic2_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic2_title')) { ?><h2><?php echo get('slide_pic2_title');?></h2><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic2_info');?></p><?php } ?>
<?php if(get('slide_pic2_url')) { ?><a href="<?php echo get('slide_pic2_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic2_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic3_url');?>" target="_blank"><img  src="<?php echo get('slide_pic3');?>" alt="<?php echo get('slide_pic3_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic3_title')) { ?><h2><?php echo get('slide_pic3_title');?></h2><?php } ?>
<?php if(get('slide_pic3_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic3_info');?></p><?php } ?>
<?php if(get('slide_pic3_url')) { ?><a href="<?php echo get('slide_pic3_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic3_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<?php } elseif (get('slide_number')=='4') { ?>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic1_url');?>" target="_blank"><img  src="<?php echo get('slide_pic1');?>" alt="<?php echo get('slide_pic1_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic1_title')) { ?><h2><?php echo get('slide_pic1_title');?></h2><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic1_info');?></p><?php } ?>
<?php if(get('slide_pic1_url')) { ?><a href="<?php echo get('slide_pic1_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic1_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic2_url');?>" target="_blank"><img  src="<?php echo get('slide_pic2');?>" alt="<?php echo get('slide_pic2_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic2_title')) { ?><h2><?php echo get('slide_pic2_title');?></h2><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic2_info');?></p><?php } ?>
<?php if(get('slide_pic2_url')) { ?><a href="<?php echo get('slide_pic2_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic2_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic3_url');?>" target="_blank"><img  src="<?php echo get('slide_pic3');?>" alt="<?php echo get('slide_pic3_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic3_title')) { ?><h2><?php echo get('slide_pic3_title');?></h2><?php } ?>
<?php if(get('slide_pic3_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic3_info');?></p><?php } ?>
<?php if(get('slide_pic3_url')) { ?><a href="<?php echo get('slide_pic3_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic3_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic4_url');?>" target="_blank"><img  src="<?php echo get('slide_pic4');?>" alt="<?php echo get('slide_pic4_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic4_title')) { ?><h2><?php echo get('slide_pic4_title');?></h2><?php } ?>
<?php if(get('slide_pic4_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic4_info');?></p><?php } ?>
<?php if(get('slide_pic4_url')) { ?><a href="<?php echo get('slide_pic4_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic4_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<?php } else { ?>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic1_url');?>" target="_blank"><img  src="<?php echo get('slide_pic1');?>" alt="<?php echo get('slide_pic1_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic1_title')) { ?><h2><?php echo get('slide_pic1_title');?></h2><?php } ?>
<?php if(get('slide_pic1_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic1_info');?></p><?php } ?>
<?php if(get('slide_pic1_url')) { ?><a href="<?php echo get('slide_pic1_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic1_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic2_url');?>" target="_blank"><img  src="<?php echo get('slide_pic2');?>" alt="<?php echo get('slide_pic2_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic2_title')) { ?><h2><?php echo get('slide_pic2_title');?></h2><?php } ?>
<?php if(get('slide_pic2_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic2_info');?></p><?php } ?>
<?php if(get('slide_pic2_url')) { ?><a href="<?php echo get('slide_pic2_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic2_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic3_url');?>" target="_blank"><img  src="<?php echo get('slide_pic3');?>" alt="<?php echo get('slide_pic3_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic3_title')) { ?><h2><?php echo get('slide_pic3_title');?></h2><?php } ?>
<?php if(get('slide_pic3_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic3_info');?></p><?php } ?>
<?php if(get('slide_pic3_url')) { ?><a href="<?php echo get('slide_pic3_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic3_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic4_url');?>" target="_blank"><img  src="<?php echo get('slide_pic4');?>" alt="<?php echo get('slide_pic4_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic4_title')) { ?><h2><?php echo get('slide_pic4_title');?></h2><?php } ?>
<?php if(get('slide_pic4_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic4_info');?></p><?php } ?>
<?php if(get('slide_pic4_url')) { ?><a href="<?php echo get('slide_pic4_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic4_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="visual-swiper-slide-item">
<a href="<?php echo get('slide_pic5_url');?>" target="_blank"><img  src="<?php echo get('slide_pic5');?>" alt="<?php echo get('slide_pic5_title');?>"></a>
<div class="visual-swiper-slide-item-text  <?php echo $slide_style_position;?>">
<div class="container">
<?php if(get('slide_pic5_title')) { ?><h2><?php echo get('slide_pic5_title');?></h2><?php } ?>
<?php if(get('slide_pic5_info')) { ?><p class="<?php echo $slide_style_position;?>"><?php echo get('slide_pic5_info');?></p><?php } ?>
<?php if(get('slide_pic5_url')) { ?><a href="<?php echo get('slide_pic5_url');?>" target="_blank" class="btn visual-swiper-slide-btn"><?php echo get('slide_pic5_title_url');?></a><?php } ?>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="swiper-pagination visual-swiper-slide-pagination"></div>
<div class="swiper-button-next visual-swiper-slide-next"><span class="glyphicon glyphicon-menu-right"></span></div>
<div class="swiper-button-prev visual-swiper-slide-prev"><span class="glyphicon glyphicon-menu-left"></span></div>
</div>
</div>
<script>
var myswiper = new Swiper('.visual-swiper-slide', {
slidesPerView: 1,
spaceBetween: 1,
loop: true,
lazy: true,
pagination: {
el: '.visual-swiper-slide-pagination',
clickable: true,
},
navigation: {
nextEl: '.visual-swiper-slide-next',
prevEl: '.visual-swiper-slide-prev',
},
autoplay: {
delay: <?php echo get('slide_time');?>000,
stopOnLastSlide: false,
disableOnInteraction: true,
},
});
</script>
<style type="text/css">

.visual-swiper-slide-item-text h2,
.visual-swiper-slide-item-text p{color:<?php echo get('slide_text_color');?>;}
.visual-swiper-slide-item-text a.visual-swiper-slide-btn {background:<?php echo get('slide_input_bg');?>;color:<?php echo get('slide_input_color');?>;}
.visual-swiper-slide-pagination .swiper-pagination-bullet{width:<?php echo $slide_btn_width;?>px;height:<?php echo $slide_btn_height;?>px;background:<?php echo get('slide_btn_color');?>;opacity: 1;transition: all .3s linear; <?php echo $slide_btn_shape;?>}
.visual-swiper-slide-pagination .swiper-pagination-bullet-active{background:<?php echo get('slide_btn_hover_color');?>;}
.visual-swiper-slide .visual-swiper-slide-prev,
.visual-swiper-slide .visual-swiper-slide-next{color:<?php echo get('slide_button_color');?>;font-size:<?php echo get('slide_button_size');?>px;}
</style>


