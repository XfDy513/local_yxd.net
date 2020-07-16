<div class="main-right-box">


    <div class="box" id="box">



        <script language="javascript" src="{$base_url}/common/js/common.js"></script>

        <form method="post" name="form1" action="<?php
        if (front::$act == 'edit')
            $id="/id/".$data[$primary_key]."/tagfrom/".$_GET['tagfrom']; else
            $id=''; echo modify("/act/".front::$act."/table/".$table.$id);
        ?>"  onsubmit="return returnform(this);">
            <input type="hidden" name="onlymodify" value=""/>


            <h5>
                {lang_admin('modify_template_tags')}
                <!--工具栏-->
                <div class="content-eidt-nav pull-right">
                    <a id="fullscreen-btn" class="btn btn-default" style="display:none;">
                        <i class="icon-frame"></i>
                        {lang_admin('container_fluid')}
                    </a>
                    <span class="pull-right">


                    <input  name="submit" value="1" type="hidden">

                        <button class="btn btn-success" type="submit">
                            <span class="glyphicon glyphicon-floppy-disk"></span> <?php echo lang_admin('preservation');?>
                        </button>

                    <a href="#" onclick="gotohome()" data-dataurlname="<?php echo lang_admin('home');?>" class="btn btn-default">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>

                    <a id="content-eidt-nav-btn" class="btn btn-default" style="display:none;">
                    <i class="icon-close"></i>
                </a>
                    {if get('tagfrom')=='category'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=category&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='shopcategory'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=shopcategory&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='content'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=content&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='shopcontent'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=shopcontent&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='type'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=type&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='shoptype'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=shoptype&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='special'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=special&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>
        {elseif get('tagfrom')=='shopspecial'}
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=list&table=templatetag&tagfrom=shopspecial&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_label_list');?>">{lang_admin('return_list')}</a>

        {/if}
                </span>
                </div>
            </h5>

            <div id="content-eidt-nav"></div>


            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('name',$form,$field,$data)}
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('label_names_should_not_begin_with_pure_numbers_or_numbers')}"></span>
</div>
</div>
    <div class="clearfix blank20"></div>
<input type="hidden" name="tagfrom" value="{get('tagfrom')}" class="form-control" />

{if get('tagfrom')=='category' || get('tagfrom')=='shopcategory'}
         {template 'table/templatetag/listtag_helper_edit_cat.php'}
    {elseif get('tagfrom')=='special' || get('tagfrom')=='shopspecial'}
         {template 'table/templatetag/listtag_helper_edit_special.php'}
    {elseif get('tagfrom')=='type' || get('tagfrom')=='shoptype'}
        {template 'table/templatetag/listtag_helper_edit_type.php'}
    {elseif get('tagfrom')=='announcement'}
      {template 'table/templatetag/listtag_helper_edit_announcement.php'}
    {elseif get('tagfrom')=='content'|| get('tagfrom')=='shopcontent'}
         {template 'table/templatetag/listtag_helper_edit.php'}

{else}



<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('content')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
{form::getform('tagcontent',$form,$field,$data)}
</div>
</div>
<div class="clearfix blank20"></div>

{/if}


<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input  name="submit" value="1" type="hidden">
<input type="submit"  value="{lang_admin('submitted')}" class="btn btn-primary btn-lg" />
        </form>

        <div class="blank30"></div>
    </div>
</div>

<script type="text/javascript">
    <!--
    $(document).ready(function(){
        $(window).scroll(function() {
            var top = $("#content-eidt-nav").offset().top; //获取指定位置
            var scrollTop = $(window).scrollTop();  //获取当前滑动位置
            if(scrollTop > top){                 //滑动到该位置时执行代码

                $(".content-eidt-nav").addClass("sabit");

                $(".sabit #fullscreen-btn").css("display","inline-block");
                $(".sabit #content-eidt-nav-btn").css("display","inline-block");

            }else{
                $(".content-eidt-nav").removeClass("sabit");
                $("#fullscreen-btn").css("display","none");
                $(".fixed #fullscreen-btn").css("display","inline-block");
                $("#content-eidt-nav-btn").css("display","none");
            }
        });
    });


    $(document).ready(function(){
        $("#content-eidt-nav-btn").click(function(){

            $(".content-eidt-nav").removeClass("sabit");
        });
    });
    //-->
</script>
<script type="text/javascript">
    <!--
    var fullscreen = false;
    let btn = document.getElementById('fullscreen-btn');
    let fullarea = document.getElementById('box')
    btn.addEventListener('click',function(){
        if (fullscreen) {
            // 退出全屏
            $(".content-eidt-nav").removeClass("fixed");
            $(".content-eidt-nav").css({
                "background-color":"#ffffff"
            });
            $(".content-eidt-nav.sabit").css({
                "padding-right":"15px",
            });
            $(".fixed #fullscreen-btn").css("display","none");
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        } else {
            // 进入全屏
            $("#box").css({
                "overflow":"hidden",
                "overflow-y":"auto"
            });
            $(".content-eidt-nav").addClass("fixed");

            $(".fixed #fullscreen-btn").css("display","inline-block");

            if (fullarea.requestFullscreen) {
                fullarea.requestFullscreen();
            } else if (fullarea.webkitRequestFullScreen) {
                fullarea.webkitRequestFullScreen();
            } else if (fullarea.mozRequestFullScreen) {
                fullarea.mozRequestFullScreen();
            } else if (fullarea.msRequestFullscreen) {
                // IE11
                fullarea.msRequestFullscreen();
            }
        }
        fullscreen = !fullscreen;
    });
    //-->
</script>