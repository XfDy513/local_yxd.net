<?php defined('ROOT') or exit('Can\'t Access !'); ?>


<?php echo template('bottom.html'); ?>



<div class="footer">
    <div class="container">
        <div class="row">
            <div class="copyright">
                <p>
                    <?php echo get('site_right');?><a href="<?php echo get('site_url');?>" target="_blank"><?php echo get('sitename');?></a>.
                </p>
                <p>
                    <?php if(config::get('site_icp')) { ?><a rel="nofollow" href="http://www.beian.miit.gov.cn" rel="nofollow" target="_blank"><?php echo get('site_icp');?></a><?php } ?>
                    <?php if(config::get('site_beian_number')) { ?>&nbsp;&nbsp;<a rel="nofollow" href="http://www.beian.miit.gov.cn" rel="nofollow" target="_blank"><img src="<?php echo $base_url;?>/images/g.png" width="20"><?php echo get('site_beian');?><?php echo lang('site_beian');?><?php echo get('site_beian_number');?><?php echo lang('number');?></a><?php } ?>&nbsp;&nbsp;<?php echo getCopyRight();?>
                    <?php if(get('guestbook_enable')) { ?>&nbsp;&nbsp;<a rel="nofollow" title="<?php echo lang('feedback');?>" href="<?php echo url('guestbook');?>" target="_blank"><?php echo lang('feedback');?></a><?php } ?>&nbsp;&nbsp;<a href="<?php echo $base_url;?>/index.php?case=archive&act=rss&catid=<?php echo $catid;?>">Rss</a><?php if(config::get('opguestadd')=='1') { ?>&nbsp;&nbsp;<a rel="nofollow" href="<?php echo $base_url;?>/?g=1"><?php echo lang('opguestadd');?></a><?php } ?>&nbsp;&nbsp;<a href="<?php echo $site_map;?>" target="_blank"><?php echo lang('sitemap');?></a><?php if(get('saic_pic')) { ?> <a href='http://www.sgs.gov.cn/lz/licenselink.do>?nethod=licenceView&entyID=<?php echo get('saic_pic');?>'><img src='<?php echo $base_url;?>/images/gongshang.png' width='20'></a><?php } ?>

                </p>
            </div>
        </div>
    </div>
</div>


<?php if(config::get('lang_open')=='1') { ?>
<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModalLang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="myModalLabel"><?php echo lang('please_choose_the_browsing_language');?></h5>
            </div>
            <div class="modal-body">
                <?php if(get('lang_type')=='1') { ?><a id="StranLink" name="StranLink">繁體</a><?php } ?>
                <?php if(is_array(getlang()))
foreach(getlang() as $d) { ?>
                <a <?php if(config::get('list_index_php')==1) { ?>name="setlang" data-langurl="<?php echo $d['langurlname'];?>" <?php } else { ?>href="<?php if($d['domain']) { ?><?php echo $d['domain'];?><?php echo url('archive/setlang/langurl/'.$d['langurlname']);?><?php } else { ?><?php echo url('archive/setlang/langurl/'.$d['langurlname']);?><?php } ?>" <?php } ?> ><img src="<?php echo $d['langimg'];?>" width="20"> <?php echo $d['langname'];?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    <!--
    //静态切换语言
    (function(){
    $('[name=setlang]').click(function () {
        var langurl=$(this).data("langurl");
        $.ajax({
            type: "get",
            url: '<?php echo url("archive/setlang/static/1/langurl/");?>'+langurl,
            async: false,
            success: function (data) {
                data=JSON.parse(data);
                if (data.state) {
                    window.location.href = "<?php echo $base_url;?>/" + "index-" + langurl + ".html";
                }
            }
        });
    });

    })();
    //-->
</script>
<!-- 繁简切换 -->
<?php if(get('lang_type')=='cn') { ?><script type="text/javascript" src="<?php echo $base_url;?>/common/js/common.js"></script><?php } ?>
<?php } ?>




<?php if(config::get('site_push')=='1') { ?>
<script type="text/javascript">
    <!--
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
    //-->
</script>
<?php } ?>


<div class="servers">
    <!--[if (gte IE 7)|!(IE)]><!-->
    <!-- 在线客服 -->
    <?php echo template('system/servers.html'); ?>
    <![endif]-->
    <!-- 短信 -->
    <?php echo template('system/sms.html'); ?>
</div>

<div class="servers-wap">
    <?php if(get('wap_style_color')=='1') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap1.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='2') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap2.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='3') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap3.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='4') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap4.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='5') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap5.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='6') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap6.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='7') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap7.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='8') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap8.css" rel="stylesheet" />
    <?php } elseif (config::get('wap_style_color')=='9') { ?>
    <link href="<?php echo $skin_path;?>/css/wap/wap9.css" rel="stylesheet" />
    <?php } else { ?>
    <?php } ?>
    <?php if(config::get('wap_foot_nav')=='1') { ?>
    <?php echo template('system/foot_nav_a.html'); ?>
    <?php } elseif (config::get('wap_foot_nav')=='2') { ?>
    <?php echo template('system/foot_nav_b.html'); ?>
    <?php } elseif (config::get('wap_foot_nav')=='3') { ?>
    <?php echo template('system/foot_nav_c.html'); ?>
    <?php } else { ?>
    <?php } ?>
</div>

<!--图片延迟-->
<script src="<?php echo $base_url;?>/common/plugins/lazyload/jquery.lazyload.min.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("img.lazy,div.lazy").lazyload({
            placeholder:"<?php echo get('onerror_pic');?>",
            effect:"fadeIn",//show直接显示,fadeIn显现
            threshold:180,
            event:"scroll",
            failure_limit:2
        });
    })
</script>


<!-- 导航下拉缩小高度 -->
<script type="text/javascript">
    <!--
    $(document).ready(function(){
        $(window).scroll(function() {
            var top = $(".visual-slide,.banner,.banner2,.banner3,.banner4,.cbanner").offset().top; //获取指定位置
            var scrollTop = $(window).scrollTop();  //获取当前滑动位置
            if(scrollTop > top){                 //滑动到该位置时执行代码
                $(".navbar").addClass("active");
            }else{
                $(".navbar").removeClass("active");
            }
        });
    });

    $(function(){
        var cubuk_seviye = $(document).scrollTop();
        var header_yuksekligi = $('.navbar').outerHeight();

        $(window).scroll(function() {
            var kaydirma_cubugu = $(document).scrollTop();

            if (kaydirma_cubugu > header_yuksekligi){$('.navbar').addClass('gizle');}
            else {$('.navbar').removeClass('gizle');}

            if (kaydirma_cubugu > cubuk_seviye){$('.navbar').removeClass('sabit');}
            else {$('.navbar').addClass('sabit');}

            cubuk_seviye = $(document).scrollTop();
        });
    });
    //-->
</script>


<?php if(config::get('html_wow')=='1') { ?>
<!-- wow动态效果 -->
<link rel="stylesheet" href="<?php echo $base_url;?>/common/plugins/animate/css/animate.min.css" />
<script src="<?php echo $base_url;?>/common/plugins/animate/js/wow.min.js"></script>
<script type="text/javascript">
    <!--
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
    //-->
</script>
<?php } ?>

<?php if(get('share')=='1') { ?>
<!-- 百度分享 -->
<script type="text/javascript">
    <!--
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
    //-->
</script>
<?php } ?>



<script src="<?php echo $base_url;?>/common/js/admin.js"></script>

<!-- 鼠标滑过展开一级菜单/一级菜单可点击 -->
<script type="text/javascript">
    <!--
    $(function () {
        $(".dropdown,.dropdown-submenu").mouseover(function () {
            $(this).addClass("open");
        });
        $(".dropdown,.dropdown-submenu").mouseleave(function(){
            $(this).removeClass("open");
        })
    });
    $(document).ready(function(){
        var _width = $(window).width();
        if(_width < 768){
            $("#navbar a.toogle").click(function(){
                event.preventDefault();
            });
        }
    });
    //-->
</script>



<?php if(config::get('qrcodes')=='1') { ?>
<script type="text/javascript" src="<?php echo $base_url;?>/common/plugins/qrcode/jquery.qrcode.min.js"></script>
<script type="text/javascript">
    <!--
    $(function() {
        $('#qrcode').qrcode({text: window.location.href});
    });
    //-->
</script>
<?php } ?>
<!--
<?php if(config::get('site_login')=='1') { ?>
<span id="head_login"><?php echo login_js();?></span>
<script type="text/javascript">
    login.innerHTML=head_login.innerHTML;head_login.innerHTML="";
</script>
<?php } ?>
-->
<?php echo template('common/plugins/public/foot-js.html'); ?>
<?php echo template('foot_js.html'); ?>



</body>
</html>