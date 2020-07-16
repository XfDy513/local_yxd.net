<div class="main-right-box">

    <div class="box" id="box">
        <h5>
            {lang_admin('language_item_editing')}
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
                </span>
            </div>
        </h5>
        <div id="content-eidt-nav"></div>
        <div class="blank20"></div>


        <a title="{lang_admin('language')}" href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=language&act=list&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-secondary">{lang_admin('return_language_list')}</a>
        <div class="blank20"></div>
        <div class="line"></div>
        <div class="blank20"></div>

        <form name="form1" id="form1" method="post" action="<?php echo uri();?>" onsubmit="return returnform(this);">


            <div class="pull-right backstage-search">
                <input type="text" class="form-control" name="search_title" id="search_title" value="{$search_title}" placeholder="{lang_admin('language_title')}" />
                <input type="hidden" value="0" name="search_submit" />
                <button  onclick="this.form.search_submit.value='1';" class="btn btn-default search-btn" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>

            </div>

            <select id="lang_select" name="lang_select"
                    style="display: inline;width: auto;" class="form-control select search_typeid" >
                <?php if($lang_choice=='system_custom.php' || $lang_choice=='system_admin_custom.php'){?>
                    <option value="system_custom.php" selected >{lang_admin('user_frontend')}</option>
                    <option value="system_admin_custom.php">{lang_admin('user_background_language')}</option>
                <?php }else{ ?>
                    <option value="system.php" selected >{lang_admin('frontend')}</option>
                    <option value="system_admin.php">{lang_admin('background_language_pack')}</option>
                <?php }; ?>
            </select>
            <input class="btn btn-primary" type="button" value=" {lang_admin('added_language_items')} " name="add" onclick="langadd()"/>


            <span class="pull-right">

					</span>
            <script type="text/javascript">

                $(function () {
                    //判断前台后台语言包
                    var lang_choice='{$lang_choice}';
                    $("#lang_select").val(lang_choice);

                    $("#lang_select").change(function(){
                        lang_choice=$("#lang_select").val();
                        gotoinurl('<?php echo url::modify('act/edit', true); ?>&lang_choice='+lang_choice);
                    });
                });
                function langadd(){
                    gotoinurl('<?php echo modify("act/add/id/$langdata[$primary_key]"); ?>&lang_choice='+$("#lang_select").val());
                }
                function formsubmit(){
                    // returnform( $('#form1'));  //重复没用！
                }

            </script>



            <div class="blank30"></div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th>{$langdata['langname']}{lang_admin('note_call_method')}</th>
                        <th>{lang_admin('front_end_display_value')}</th>
                        <th>{lang_admin('check_delete')}</th>
                    </tr>
                    </thead>

                    <tbody>
                    {loop $sys_lang $key $value}

                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td align="left" style="padding-left:10px;">{$tips[$key]} / <strong>{
                                <?php echo config::get('lang_choice')=='system.php'?'lang':'lang_admin'; ?>(</strong>{$key}<strong>)}</strong>
                        </td>
                        <td align="left" style="padding-left:10px;">
                            <input type="text" name="{$key}" class="form-control" value="{$value}" />
                        </td>
                        <td>
                            <input type="checkbox" name="to_delete_items[]" value="{$key}" />
                        </td>
                    </tr>


                    {/loop}
                    </tbody>
                </table>
            </div>

            <div class="blank20"></div>
            <div class="line"></div>
            <div class="blank20"></div>
            <div class="page">{$link_str}</div>
            <div class="blank30"></div>
            <input  name="submit" value="0" type="hidden">
            <input type="submit" onclick="this.form.submit.value='1';" value=" {lang_admin('submitted')} "  class="btn btn-primary btn-lg"  onclick="formsubmit()"  />
        </form>

        <form name="editform" id="editform" method="post" action="<?php echo url('template/save'); ?>" onsubmit="return returnform(this);">
            <input type="hidden" value="" name="sid" id="sid" />
            <input type="hidden" value="" name="slen" id="slen" />
            <input type="hidden" value="" name="scontent" id="scontent" />
        </form>
        <div class="blank30"></div>
        <div class="blank30"></div>
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