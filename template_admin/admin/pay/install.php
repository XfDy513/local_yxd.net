<!-- 上传框 -->
<script src="{$base_url}/common/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="{$base_url}/common/plugins/fileinput/js/locales/zh.js" type="text/javascript"></script>
<link href="{$base_url}/common/plugins/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css">

<div class="main-right-box">

    <div class="box" id="box">

        <form method="post" action="{uri()}" name="form1" id="form1" onsubmit="return returnform(this);">

            <h5>
                {lang_admin('adding_payment')}
                <!--工具栏-->
                <div class="content-eidt-nav pull-right">
                    <a id="fullscreen-btn" class="btn btn-default">
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
<a href="#" onclick="gotourl(this)" data-dataurl="{$base_url}/index.php?case=pay&act=list&table=pay&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-secondary" >{lang_admin('return')}</a>
                </span>
                </div>
            </h5>
            <div class="blank20"></div>


            <div id="content-eidt-nav"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <input type="text" name="pay_name" id="pay_name" value="{$data['pay']['pay_name']}" class="form-control" />
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('picture')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::upload_image('pay_image',$data['pay']['pay_image'])}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('thumbnails_for_picture_list_page_display')}"></span>
                </div>

            </div>

            <div class="clearfix blank20"></div>



            {loop $data['pay']['pay_config'] $pay_config}
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{$pay_config.label}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <?php if ($pay_config['type'] == "text") {?>
                        <input name="cfg_value[]" type="{$pay_config.type}" value="{$pay_config.value}" class="form-control" />
                    <?php }elseif ($pay_config['type'] == "textarea") {?>
                        <textarea name="cfg_value[]" class="form-control textarea">{$pay_config.value}</textarea>
                    <?php }elseif ($pay_config['type'] == "select") {?>
                        {form::select('cfg_value[]', $pay_config['value'], $pay_config['range'])}
                    <?php } ?>
                    <input name="cfg_name[]" type="hidden" value="{$pay_config.name}" class="form-control" />
                    <input name="cfg_type[]" type="hidden" value="{$pay_config.type}" class="form-control" />
                    <input name="cfg_lang[]" type="hidden" value="{$pay_config.lang}" class="form-control" />
                </div>
            </div>
            <div class="clearfix blank20"></div>
            {/loop}



            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('rate')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
                            <input size="3" name="pay_fee" id="pay_fee" value="{$data['pay']['pay_fee']}" class="form-control" /></div>
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                            %
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix blank20"></div>


            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('describe')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::textarea('pay_desc',$data['pay']['pay_desc'],'class="textarea"')}
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <input type="hidden"  name="pay_id" value="{$data['pay']['pay_id']}" />
            <input type="hidden"  name="pay_code"     value="{$data['pay']['pay_code']}" />
            <input type="hidden"  name="is_cod" value="{$data['pay']['is_cod']}" />
            <input type="hidden"  name="is_online"    value="{$data['pay']['is_online']}" />
            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                </div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
            <input  name="submit" value="1" type="hidden">
            <input type="submit"  value=" {lang_admin('submitted')} " class="btn btn-primary btn-lg" /></div>
            </div>
            <div class="clearfix blank20"></div>

        </form>
        <div class="blank30"></div>
    </div>
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