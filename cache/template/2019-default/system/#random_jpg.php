<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class="cbanner row" style="height:<?php echo get('cslide_height');?>px;">
    <div class="cbanner-bg">
        <div class="container">
            <div class="cbanner-title">
                
                    <?php
                                if(front::get('case') == 'announ'){
                                ?>

                        <h4 class="column-title"><a title="<?php echo lang('siteannoun');?>" href="#"><?php echo lang('siteannoun');?></a></h4>

                    <?php
                                }elseif(front::get('case') == 'guestbook'){
                                ?>

                        <h4 class="column-title"><a title="<?php echo lang('guestbook');?>" href="#"><?php echo lang('guestbook');?></a></h4>

                    <?php
                                }elseif(front::get('case') == 'comment'){
                                ?>

                        <h4 class="column-title"><a title="<?php echo $t['name'];?>" href="<?php echo $t['url'];?>"><?php echo lang('commentlist');?></a></h4>

                    <?php
                                }elseif(front::get('case') == 'type'){
                                ?>

                        <h4 class="column-title"><?php echo type::getpositionhtml($type['typeid']);?></h4>

                    <?php
                                }elseif(front::get('case') == 'special'){
                                ?>

                        <h4 class="column-title"><a title="<?php echo $special['title'];?>" href="#"><?php echo $special['title'];?></a></h4>

                    <?php
                                }elseif(front::get('case') == 'tag'){
                                ?>

                        <h4 class="column-title"><a title="<?php echo $tag;?>" href="#"><?php echo $tag;?></a></h4>

                    <?php
                                }elseif(front::get('case') == 'mailsubscription'){
                                ?>

                        <h4 class="column-title"><a href="#" title="<?php echo lang('mailsubscription');?>"><?php echo lang('mailsubscription');?></a></h4>



                    <?php
                                }else{
                                ?>
                <?php if($category[$catid]['catname']) { ?><h4 class="column-title"><?php echo $category[$catid]['catname'];?></h4><?php } ?>
                    <?php
                                }
                                ?>

            </div>
        </div>
    </div>
</div>
<!-- 内页随机图片 -->
<script type="text/javascript">
    //<!CDATA[
    var bodyBgs = [];
    bodyBgs[0] = "<?php echo get('cslide_pic1');?>";
    bodyBgs[1] = "<?php echo get('cslide_pic2');?>";
    bodyBgs[2] = "<?php echo get('cslide_pic3');?>";
    bodyBgs[3] = "<?php echo get('cslide_pic4');?>";
    bodyBgs[4] = "<?php echo get('cslide_pic5');?>";
    var randomBgIndex = Math.round( Math.random() * 4 );
    //输出随机的背景图
    document.write('<style>.cbanner{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat 50% bottom;background-size:cover;}</style>');
    //]]>
</script>