<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="CmsEasy 7_6_3_2_20200422_UTF8" />
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo getTitle($archive,$category,$catid,$type,$announ,$special);?></title>
    <?php if(get('mobile_open')=='1') { ?><script type="text/javascript">var cmseasy_wap_tpa=1,cmseasy_wap_tpb=1,cmseasy_wap_url='<?php echo get("wap_domain");?>/wap';</script>
    <script src="<?php echo $base_url;?>/common/plugins/wap-distinguish/mobile.js" type="text/javascript"></script><?php } ?>
    <meta name="keywords" content="<?php echo getKeywords($archive,$category,$catid,$type,$special);?>" />
    <meta name="description" content="<?php echo getDescription($archive,$category,$catid,$type,$special);?>" />
    <meta name="author" content="CmsEasy Team" />
    <link rel="icon" href="<?php echo get('site_ico');?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get('site_ico');?>" type="image/x-icon" />
    <link href="<?php echo $base_url;?>/common/css/bootstrap/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url;?>/common/font/simple/css/font.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $base_url;?>/common/css/bootstrap/bootstrap-3.3.7/css/bootstrap-submenu.css" rel="stylesheet">
    <link href="<?php echo $base_url;?>/common/plugins/swiper/css/swiper.min.css" rel="stylesheet" >
    <link href="<?php echo $skin_path;?>/css/clear.css" rel="stylesheet">
    <link href="<?php echo $skin_path;?>/css/base.css?version=<?php echo _VERCODE;?>" rel="stylesheet">
    <link href="<?php echo $skin_path;?>/css/style.css" rel="stylesheet">
    <script src="<?php echo $base_url;?>/common/js/jquery/jquery.min.js"></script>
    <script src="<?php echo $base_url;?>/common/js/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo $base_url;?>/common/plugins/swiper/js/swiper.min.js"></script>
    <?php echo template('common/plugins/public/header-js.html'); ?>
    <?php if(get('nav_top')=='1') { ?>
    <!-- 导航置顶CSS -->
    <style type="text/css">
        .navbar {
            padding-right:0;
            padding-left:0;
            position:fixed;
            top:0;
            right:0;
            left:0;
            z-index:1030;
            border-radius:0;
        }
        .visual-slide {margin-top:70px;}
        @media screen and (max-width:486px) {
            .navbar {position: relative;}
            .visual-slide {margin-top:0px;}
        }
    </style>
    <?php } ?>
</head>
<?php if(get('shield_right_key')=='1') { ?>
<body oncontextmenu="return false" onselectstart="return false">
<noscript><iframe src="/*.html>";</iframe></noscript>
<script type="text/javascript">
    <!--
    function stop(){
        return false;
    }
    document.oncontextmenu=stop;
    //-->
</script>
<?php } else { ?>
<body>
<?php } ?>

<?php echo template('top.html'); ?>





