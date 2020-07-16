
<!-- 取色 -->
<link href="<?php echo $base_url;?>/common/css/bootstrap/bootstrap-3.3.7/plugins/colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $base_url;?>/common/css/bootstrap/bootstrap-3.3.7/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- 上传框 -->
<script src="<?php echo $base_url;?>/common/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>/common/plugins/fileinput/js/locales/zh.js" type="text/javascript"></script>
<link href="<?php echo $base_url;?>/common/plugins/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css">





<div class="main-right-box">
    <h5><?php echo lang_admin('set_up');?></h5>

    <div class="box" id="box">
        <script type="text/javascript">
            var sms_manage_static=false;
            //短信的需要校验
            function  checkform(obj) {
                if(sms_manage_static){
                    if($("#admin_dir").val()=="")
                    {
                        alert("<?php echo lang_admin('no_null_admin_dir');?>");
                        $("#admin_dir").focus();
                        return false;
                    }
                    var re =  /^[0-9a-zA-Z]*$/;  //判断字符串是否为数字和字母组合
                    if (!re.test($("#admin_dir").val()))
                    {
                        alert("<?php echo lang_admin('admin_dir_is_ABC123');?>！");
                        $("#admin_dir").focus();
                        return false;
                    }
                }
                returnform(obj);
                return  false;
            }

        </script>



        <form method="post" action="<?php echo uri();?>" name="config_form" id="config_form" onsubmit="return checkform(this);">

            <div class="content-eidt-nav pull-right">
                <a id="fullscreen-btn" class="btn btn-default" style="display:none;">
                    <i class="icon-frame"></i>
                    <?php echo lang_admin('container_fluid');?>
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
            <div id="content-eidt-nav"></div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <?php $i=1;?>
                <?php if(is_array($units))
                    foreach($units as $key => $unit) { ?>
                        <li role="presentation" class="tag_<?php echo $i+1;?><?php if($i==1 && $tagname=='' ) { ?> active<?php } ?>">
                            <a data-dataurlname="<?php echo $unit;?>" href="#tag<?php echo $i;?>" name="tag<?php echo $i;?>" aria-controls="#tag<?php echo $i;?>" role="tab" data-toggle="tab">
                                <?php echo $unit;?>
                            </a>
                        </li>
                        <?php $i++;?>
                    <?php } ?>
            </ul>

            <?php unset($i);?>

            <div class="tab-content">
                <?php $onei=1;?>
                <?php if(is_array($units))
                foreach($units as $key => $unit) { ?>
                <?php if(isset($items[$key])) { ?>
                <div role="tabpanel" class="tab-pane<?php if($onei==1 && $tagname=='') { ?> active<?php } ?>" id="tag<?php echo $onei;?>" name="tagdiv">

                    <?php if(is_array($items[$key]))
                    foreach($items[$key] as $keys => $item) { ?>
                    <div class="row">
                        <?php if($item['name']==$tagname && $tagname!='' ) { ?>
                            <script type="text/javascript">
                                $("[name='tagdiv']").attr("class","tab-pane");
                                $("#tag<?php echo $onei;?>").attr("class","tab-pane active");//tag选中
                                //tag标签选中
                                $("[name='tag<?php echo $onei;?>']").parent().attr("class","active");
                            </script>
                        <?php } ?>
                        <?php if($item['name']=='template_shopping_dir' || $item['name']=='template_mobile_dir'|| $item['name']=='template_dir' || $item['name']=='template_online') { ?>
                            <script type="text/javascript">
                                $("[name='tag<?php echo $onei;?>']").click(function () {
                                    $('#submit').attr("style","display: none;");
                                });
                                $(function () {
                                    if( $("[name='tag<?php echo $onei;?>']").parent().hasClass("active")){
                                        $('#submit').attr("style","display: none;");
                                    }
                                });
                            </script>
                        <?php } else { ?>
                            <script type="text/javascript">
                                $("[name='tag<?php echo $onei;?>']").click(function () {
                                    $('#submit').attr("style","display: block;");
                                });
                                $(function () {
                                    if( $("[name='tag<?php echo $onei;?>']").parent().hasClass("active")){
                                        $('#submit').attr("style","display: block;");
                                    }
                                });
                            </script>
                        <?php } ?>

                        <?php if($item['name']=='sms_explain') { ?>
                            <?php if(config::getadmin('sms_on')=='0') { ?>
                            <script type="text/javascript">
                                $("input.mobilechk_enable, input.mobilechk_admin, input.mobilechk_reg, input.mobilechk_login, input.mobilechk_buy, input.mobilechk_form, input.mobilechk_comment, input.mobilechk_guestbook, input.sms_keyword, input.sms_maxnum, input.sms_reg_on, input.sms_guestbook_on, input.sms_form_admin_on, input.sms_guestbook_admin_on, select.sms_order_on, input.sms_order_admin_on, input.sms_consult_admin_on, input.sms_form_on").attr("disabled","disabled");
                                $(".tag_3").css("display","none");
                            </script>

                        <?php } ?>
                            <!-- 短信设置 -->
                            <div style="padding:0px 20px;">
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <span class="glyphicon glyphicon-warning-sign"></span>	<?php echo lang_admin('tips');?></span>
                                    <?php echo lang_admin('prior_to_recharging');?>&nbsp;&nbsp;<a href="http://pay.cmseasy.cn/reg.php" target="_blank" class="btn btn-gray"><?php echo lang_admin('registered_user');?></a>&nbsp;&nbsp;！<?php echo lang_admin('change_the_account_and_password_in_the_sms_settings_to_the_registered_user_and_password');?><?php echo lang_admin('at');?>&nbsp;&nbsp;
                                    <a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab" class="btn btn-default"><?php echo lang_admin('short_message_manage');?></a>&nbsp;&nbsp;<?php echo lang_admin('after_recharging_sms_it_can_be_used_properly');?>
                                </div>
                            </div>
                            <style type="text/css">
                                #sms_explain {display:none;}
                            </style>


                        <?php } elseif ($item['name']=='mobilechk_enable_info') { ?>
                            <div class="blank20"></div>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                                <a class="btn btn-info" href="http://pay.cmseasy.cn/reg.php" target="_blank">
                                    如开通手机短信验证，请点击先购买短信！
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                            </div>
                            <div class="blank20"></div>
                            <style type="text/css">
                                .alert {margin:0px;}
                                #mobilechk_enable_info {display:none;}
                            </style>

                        <?php } elseif ($item['name']=='pic_enable_info') { ?>
                            <div class="blank20"></div>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                                <a class="btn btn-info"  href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo url('cache/make_show');?>" data-dataurlname="<?php echo lang_admin('pc_html');?>">
                                    拼图验证码所需id和key
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                            </div>
                            <div class="blank20"></div>
                            <style type="text/css">
                                .alert {margin:0px;}
                                #pic_enable_info {display:none;}
                            </style>


                        <?php } elseif ($item['name']=='pc_html_info') { ?>
                            <div class="blank20"></div>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                                <a class="btn btn-info"  href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo url('cache/make_index');?>" data-dataurlname="<?php echo lang_admin('pc_html');?>">
                                    <?php if(config::getadmin('list_index_php')==1 || ('list_page_php')==1 || ('show_page_php')==1 || ('list_type_php')==1 || ('list_special_php')==1)  { ?>
                                        <?php echo lang_admin('static_html');?>

                                    <?php } else { ?>

                                    <?php echo lang_admin('pc_html');?>
                                    <?php } ?>
                                </a>
                                </a></div>
                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                            </div>
                            <div class="blank20"></div>
                            <style type="text/css">
                                .alert {margin:0px;}
                                #pc_html_info {display:none;}
                            </style>

                        <?php } elseif ($item['name']=='wap_html_info') { ?>

                        <?php if(config::getadmin('mobile_open')==1 || ('mobile_open')==2) { ?>
                            <div class="blank20"></div>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                                <a class="btn btn-info"  href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo url('wapcache/make_index');?>" data-dataurlname="<?php echo lang_admin('wap_html');?>">
                                    <?php if(config::getadmin('wap_index_php')==1 || ('wap_list_page_php')==1 || ('wap_show_page_php')==1 || ('wap_list_type_php')==1 || ('wap_list_special_php')==1)  { ?>
                                        <?php echo lang_admin('static_wap_html');?>

                                    <?php } else { ?>

                                        <?php echo lang_admin('wap_html');?>
                                    <?php } ?>


                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                            </div>
                            <div class="blank20"></div>
                            <style type="text/css">
                                .alert {margin:0px;}
                                #wap_html_info {display:none;}
                            </style>
                        <?php } else { ?>
                        <div style="display:none;">
                            <div style="display:none;">
                        <?php } ?>



                        <?php } elseif ($item['name']=='urlrewrite_info') { ?>
                        <?php if(config::getadmin('mobile_open')==1 || ('mobile_open')==2) { ?>
                                <?php } else { ?>
                            </div></div>
                                        <?php } ?>
                            <!-- HTML生成请注意 -->
                            <div class="blank20"></div>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                            <div class="col-xs-12 col-sm-8 col-md-7 col-lg-10 text-left">
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <span class="glyphicon glyphicon-warning-sign"></span>

                                    <strong><?php echo lang_admin('tips');?>！</strong></span>

                                    <?php echo lang_admin('if_you_dont_know_about_pseudo_static_please_close_it_install_patches_if_necessary');?>

                                    <div class="blank10"></div>
                                    <?php echo lang_admin('pseudo_static_web_address');?>
                                    <div class="blank20"></div>
                                    <a class="btn btn-gray" href="https://www.cmseasy.cn/plus/show-275.html" target="_blank"><?php echo lang_admin('patches');?></a>
                                </div>
                            </div>
                            <div class="blank20"></div>
                            <style type="text/css">
                                .alert {margin:0px;}
                                #urlrewrite_info {display:none;}
                            </style>


                        <?php } elseif ($item['name']=='sms_manage') { ?>
                            <!-- 短信管理页面 -->
                            <script type="text/javascript">
                                jQuery(function($){
                                    $("#demo_btn").click(function(){
                                        $("#demo_div").attr("src",
                                            "demo.php?pattern="+$("#ifocus_pattern").val()+"&width="+$("#ifocus_width").val()+"&height="+$("#ifocus_height").val()+
                                            "&number="+$("#ifocus_number").val()+"&time="+$("#ifocus_time").val());
                                    });
                                    $('#sms_manage').load('<?php echo url('sms/manage');?>');
                                });
                                var base_url = '<?php echo config::getadmin('site_url');?>';
                                sms_manage_static=true;
                            </script>
                            <div id="sms_manage">
                            </div>
                            <style type="text/css">
                                input#sms_manage {display:none;}
                            </style>
                            <!--  -->
                        <?php } elseif ($item['name']!='template_mobile_dir') { ?>
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo $item['title'];?>：</div>
                        <?php } ?>

                        <?php if($item['name']=='mobilechk_explain') { ?>
                            <div style="padding:0px 20px;">
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('tips');?>！</strong></span>
                                    <?php echo lang_admin('after_opening_the_mobile_phone_authentication_code_you_need_to_configure_it_at_the_same_time');?>&nbsp;&nbsp;<a class="btn btn-default"><?php echo lang_admin('and_in_the');?></a>&nbsp;&nbsp;！<?php echo lang_admin('and_in_the');?>&nbsp;&nbsp;
                                    <a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab" class="btn btn-info"><?php echo lang_admin('short_message_manage');?></a>&nbsp;&nbsp;<?php echo lang_admin('after_recharging_sms_it_can_be_used_properly');?>
                                </div>
                            </div>
                            <style type="text/css">
                                #mobilechk_explain {display:none;}
                            </style>
                        <?php } ?>

                        <?php if($item['name']=='ditu_explain') { ?>
                        <!-- 地图设置提示 -->
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">

                            <span class="glyphicon glyphicon-warning-sign"></span>
                            <?php echo lang_admin('instructions');?>：<br />
                            1、<?php echo lang_admin('first_click');?>	<a href="https://api.map.baidu.com/lbsapi/getpoint/index.html" class="btn btn-gray" target="_blank">&nbsp;<?php echo lang_admin('button');?>&nbsp;</a>	，<?php echo lang_admin('get_map_values');?>；<br />
                            2、<?php echo lang_admin('data_includes_current_level_current_coordinate_point');?>；<br />
                            3、<?php echo lang_admin('longitudinal_value_before_comma_of_coordinate_point');?>；<br />
                            4、<?php echo lang_admin('latitude_after_comma_of_coordinate_points');?>；<br />
                            5、<?php echo lang_admin('copy_the_latitude_and_longitude_values_to_the_latitude_and_longitude_input_box_in_the_background_and_submit_them');?><br />
                            6、<?php echo lang_admin('the_map_call_code_is');?> {&nbsp;template 'ditu.html'&nbsp;} ,<?php echo lang_admin('after_copying_please_delete_the_blanks');?>
                            <style type="text/css">
                                #ditu_explain {display:none;}
                            </style>
                            <?php } ?>



                            <?php if($item['name']=='template_dir') { ?>
                            <!-- PC模板列表 -->
                            <style type="text/css">
                                #tag1 .col-xs-8.text-right,#tag1 .col-sm-8.text-right ,#tag1 .col-md-9.text-right ,#tag1 .col-lg-10.text-right,#tag1 .text-right,#tag2 .col-xs-8.text-right,#tag2 .col-sm-8.text-right ,#tag2 .col-md-9.text-right ,#tag2 .col-lg-10.text-right,#tag2 .text-right,#tag3 .col-xs-8.text-right,#tag3 .col-sm-8.text-right ,#tag3 .col-md-9.text-right ,#tag3 .col-lg-10.text-right,#tag3 .text-right,#tag4 .col-xs-8.text-right,#tag4 .col-sm-8.text-right ,#tag4 .col-md-9.text-right ,#tag4 .col-lg-10.text-right,#tag4 .text-right {display:none;}
                                .btn-primary {box-shadow:none;}
                                .glyphicon-trash {color: rgba(0, 0, 0, 0.45);}
                                .content-eidt-nav {display:none;}
                            </style>
                            <!-- 修改名称 -->
                            <div class="modal fade" id="mytempateedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo lang_admin('edit');?></h4>
                                        </div>
                                        <div class="modal-body" style="padding:30px 30px 30px 50px;">
                                            <input type="hidden" id="old_templatename" value="">
                                            <input onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')"
                                                   oncontextmenu="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')"
                                                   type="text" name="new_templatename" id="new_templatename" id="new_templatename" value=""
                                                   class="form-control" placeholder="<?php echo lang_admin('please_enter_the_name_of_the_template_file');?>">

                                        </div>
                                        <div class="modal-footer">
                                            <span class="pull-left" style="font-size:12px;color:#ccc;"><?php echo lang_admin('rename_tips');?></span>
                                            <button type="button" id="edit_templatename" class="btn btn-primary pull-right"><?php echo lang_admin('edit');?></button>
                                            <button   type="button" id="copy_templatename" class="btn btn-primary pull-right"><?php echo lang_admin('copy');?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(function () {
                                    //打开改名弹出框
                                    $('[name="mytempateedit"]').click(function(){
                                        $("#new_templatename").val($(this).data('templatename'));
                                        $("#old_templatename").val($(this).data('templatename'));
                                        $("#edit_templatename").attr("style","display: block;");
                                        $("#copy_templatename").attr("style","display: none;");
                                        $("#myModalLabel").html("<?php echo lang_admin('edit');?>");
                                        //打开购买弹出框
                                        $('#mytempateedit').modal('show');
                                    });
                                    //打开复制弹出框
                                    $('[name="mytempatecopy"]').click(function(){
                                        $("#new_templatename").val($(this).data('templatename'));
                                        $("#old_templatename").val($(this).data('templatename'));

                                        $("#edit_templatename").attr("style","display: none");
                                        $("#copy_templatename").attr("style","display: block");
                                        $("#myModalLabel").html("<?php echo lang_admin('copy');?>");
                                        //打开购买弹出框
                                        $('#mytempateedit').modal('show');
                                    });
                                    //复制
                                    $('#copy_templatename').click(function() {
                                        var new_templatename = $("#new_templatename").val();
                                        var old_templatename = $("#old_templatename").val();
                                        if (new_templatename=="" || new_templatename==undefined){
                                            alert("<?php echo lang_admin("the_name_cannot_be_empty");?>");return;
                                        }
                                        if(old_templatename==new_templatename){
                                            alert("<?php echo lang_admin("name").lang_admin("repetition");?>");return;
                                        }
                                        $.ajax({
                                            type: "get",
                                            url: "<?php echo url('template/copytemplatename',true);?>",
                                            data: {'new_templatename': new_templatename, "old_templatename": old_templatename},
                                            dataType: 'json',
                                            async: true,
                                            success: function (data) {
                                                if (data.static == 1) {
                                                    //关闭服务器登录弹出框
                                                    $('#mytempateedit').modal('hide');
                                                    $(".modal-backdrop.fade").hide();
                                                    alert(data.message);
                                                    gotoinurl("/index.php?case=config&act=system&set=template&admin_dir=<?php echo get('admin_dir');?>");
                                                } else {
                                                    alert(data.message);
                                                }
                                            }
                                        });
                                    });
                                    //改名
                                    $('#edit_templatename').click(function() {
                                        var new_templatename = $("#new_templatename").val();
                                        var old_templatename = $("#old_templatename").val();
                                        if (new_templatename=="" || new_templatename==undefined){
                                            alert("<?php echo lang_admin("the_name_cannot_be_empty");?>");return;
                                        }
                                        $.ajax({
                                            type: "get",
                                            url: "<?php echo url('template/eidttemplatename',true);?>",
                                            data: {'new_templatename': new_templatename, "old_templatename": old_templatename},
                                            dataType: 'json',
                                            async: true,
                                            success: function (data) {
                                                if (data.static == 1) {
                                                    //关闭服务器登录弹出框
                                                    $('#mytempateedit').modal('hide');
                                                    $(".modal-backdrop.fade").hide();
                                                    alert(data.message);
                                                    gotoinurl("/index.php?case=config&act=system&set=template&admin_dir=<?php echo get('admin_dir');?>");
                                                } else {
                                                    alert(data.message);
                                                }
                                            }
                                        });
                                    });

                                });
                            </script>

                            <div style="padding:0px 15px;">
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('tips');?>！</strong></span>
                                    <?php echo lang_admin('after_switching_the_template_if_the_original_data_is_not_replaced_by_the_template_data_the_label_in_the_template_needs_to_be_reset_otherwise_the_blank_will_appear_because_the_data_page_is_not_called_refer_to_the_tutorial');?>&nbsp;&nbsp;
                                    <a class="btn btn-default" href="https://www.cmseasy.cn/chm/chang-jian/show-194.html" target="_blank"><?php echo lang_admin('see');?></a>
                                </div>
                            </div>

                            <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">
                            </div>
                            <div class="blank10"></div>

                            <div class="tempalte-list">

                                <?php if(is_array($item['select']))
                                    foreach($item['select'] as $key2 => $val) { ?>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                            <div class="tempalte-box">
                                                <div class="tempalte-pic">
                                                    <img class="img-responsive enlargeImg" src="<?php echo $base_url;?>/template/<?php echo $key2;?>/skin/thumbnails.jpg" />
                                                </div>

                                                <div class="tempalte-info">
                                                    <p>
                                                        <strong><?php echo trim($val);?></strong>

                                                    </p>
                                                    <p>
                                                        <?php if(trim($item['value'])==trim($val) ) { ?>

                                                            <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo $base_url;?>/index.php?case=table&act=list&table=templatetag&tagfrom=content&admin_dir=<?php echo get('admin_dir',true);?>&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('template_tags');?>"><?php echo lang_admin('template_tags');?></a>


                                                            <a href="#" onclick="gotourl(this)" data-dataurl="<?php echo $base_url;?>/index.php?case=template&act=edit&admin_dir=<?php echo get('admin_dir',true);?>&site=default" class="btn btn-default" data-dataurlname="<?php echo lang_admin('edit_template');?>"><?php echo lang_admin('edit_template');?></a>


                                                        <?php } ?>
                                                    </p>
                                                </div>
                                                <div class="tempalte-btn">
                                                    <div class="col-xs-6">
                                                        <div class="row">
                                                            <button  type="submit"
                                                                <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                    class="btn" checked="checked" disabled="disabled" value="<?php echo lang_admin('used');?>"<?php } ?>
                                                                <?php if($item['value']!=$val) { ?>
                                                                     class="btn" onclick="setTemplate_dir('<?php echo $key2;?>')" value="<?php echo lang_admin('application');?><?php } ?>">

                                                                <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                    <?php if(getisdefault()==lang::getisadmin()) { ?>
                                                                        <?php if(($isvisual)) { ?>
                                                                            <a class="text-danger" href="<?php echo $base_url;?>/index.php?case=template&act=visual&admin_dir=<?php echo get('admin_dir',true);?>&site=default" class="btn-visual" target="_blank"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;<?php echo lang_admin('visual');?></a>
                                                                        <?php } else { ?>
                                                                            <a class="text-danger"  class="btn-visual disabled" style="pointer-events: none;"><span class="icon-screen-desktop"></span>&nbsp;<?php echo lang_admin('lang_selected');?></a>
                                                                        <?php } ?>

                                                                    <?php } else { ?>
                                                                        <i class="glyphicon glyphicon-ok"></i> <?php echo lang_admin('used');?>
                                                                    <?php } ?>
                                                                <?php } elseif ($item['value']!=$val) { ?>

                                                                    <i class="glyphicon glyphicon-retweet"></i> <?php echo lang_admin('application');?>
                                                                <?php } ?>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="row">


                                                            <div class="dropup">
                                                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu<?php echo $key2;?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="glyphicon glyphicon-edit"></i> <?php echo lang_admin('dosomething');?> <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu<?php echo $key2;?>">

                                                                    <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                    <?php } else { ?>
                                                                        <li>
                                                                            <a data-dataurl="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="if(confirm('<?php echo lang_admin('are_you_sure_you_want_to_delete_it');?>')){ gotourl(this);}">
                                                                                <?php echo lang_admin('delete');?>
                                                                            </a>
                                                                        </li>
                                                                        <div class="line"></div>
                                                                    <?php } ?>

                                                                    <li>
                                                                        <a href="#"  name="mytempatecopy" data-templatename="<?php echo trim($val);?>"  data-dataurlname="<?php echo lang_admin('copy_template');?>"><?php echo lang_admin('copy');?></a>
                                                                    </li>
                                                                    <div class="line"></div>
                                                                    <li>
                                                                        <a href="#"  name="mytempateedit" data-templatename="<?php echo trim($val);?>"  data-dataurlname="<?php echo lang_admin('edit_template');?>"><?php echo lang_admin('edit');?></a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>


                                <script type="text/javascript">
                                    function setTemplate_dir(value){
                                        document.getElementById("template_dir").value=value;
                                    }
                                </script>
                                <div class="blank10"></div>
                                <?php echo form::hidden($item['name'],get($item['name'],true));?>

                                <?php } elseif ($item['name']=='template_shopping_dir') { ?>
                                <style type="text/css">
                                    .content-eidt-nav {display:none;}
                                </style>
                                <!-- 商城模板列表 -->
                                <div style="padding:0px 15px;">
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('tips');?>！</strong></span>
                                        <?php echo lang_admin('after_switching_the_template_if_the_original_data_is_not_replaced_by_the_template_data_the_label_in_the_template_needs_to_be_reset_otherwise_the_blank_will_appear_because_the_data_page_is_not_called_refer_to_the_tutorial');?>&nbsp;
                                        &nbsp;<a class="btn btn-default" href="https://www.cmseasy.cn/chm/chang-jian/show-194.html" target="_blank"><?php echo lang_admin('see');?></a>
                                    </div>
                                </div>

                                <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">
                                </div>
                                <div class="blank10"></div>
                                <div class="tempalte-list">
                                    <?php if(is_array($shoppingmodelist))
                                        foreach($shoppingmodelist as $key2 => $val) { ?>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                                <div class="tempalte-box">
                                                    <div class="tempalte-pic">
                                                        <img class="img-responsive enlargeImg" src="<?php echo $base_url;?>/template/<?php echo $key2;?>/skin/thumbnails.jpg" />
                                                    </div>

                                                    <div class="tempalte-info">
                                                        <p>
                                                            <strong><?php echo trim($val);?></strong>
                                                        </p>
                                                        <p>
                                                            <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                <a class="btn btn-default" href="#" onclick="gotourl(this)"   data-dataurl="<?php echo $base_url;?>/index.php?case=table&act=list&table=templatetag&tagfrom=shopcontent&admin_dir=<?php echo get('admin_dir',true);?>&site=default" data-dataurlname="<?php echo lang_admin('template_label_list');?>"><?php echo lang_admin('template_tags');?></a>
                                                            <?php } ?>
                                                        </p>

                                                    </div>
                                                    <div class="tempalte-btn">
                                                        <div class="col-xs-6">
                                                            <div class="row">
                                                                <button   type="submit"
                                                                    <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                        class="btn" checked="checked" disabled="disabled" value="<?php echo lang_admin('used');?>"<?php } ?>
                                                                    <?php if($item['value']!=$val) { ?>
                                                                          class="btn" onclick="setTemplate_shopping_dir('<?php echo $key2;?>')" value="<?php echo lang_admin('application');?><?php } ?>">

                                                                    <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                        <i class="glyphicon glyphicon-ok"></i> <?php echo lang_admin('used');?>
                                                                    <?php } elseif ($item['value']!=$val) { ?>
                                                                        <i class="glyphicon glyphicon-retweet"></i> <?php echo lang_admin('application');?>
                                                                    <?php } ?>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="row">
                                                                <a<?php if(trim($item['value'])==trim($val) ) { ?> class="disabled"<?php } else { ?>  data-dataurl="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="if(confirm('<?php echo lang_admin('are_you_sure_you_want_to_delete_it');?>')){gotourl(this);}"<?php } ?>><i class="glyphicon glyphicon-trash"></i> <?php echo lang_admin('delete');?></a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php } ?>
                                    <script type="text/javascript">
                                        function setTemplate_shopping_dir(value){
                                            document.getElementById("template_shopping_dir").value=value;
                                        }
                                    </script>
                                    <div class="blank10"></div>

                                    <?php echo form::hidden($item['name'],get($item['name'],true));?>


                                    <?php } elseif ($item['name']=='template_online') { ?>
                                            <!-- 在线模板 -->
                                            <?php if(config::getadmin('template_view')=='1') { ?>
                                            <style type="text/css">
                                                .content-eidt-nav {display:none;}
                                            </style>
                                            <script type="text/javascript">
                                                $("[name='tag<?php echo $onei;?>']").click(function () {
                                                    gotoinurl('<?php echo url("expansion/buytemplate",true);?>');
                                                });
                                            </script>
                                            <div class="blank30"></div>



                                            <div class="blank30"></div>
                                            <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">

                                                <div class="blank10"></div>
                                                <?php } else { ?>
                                                <style type="text/css">.nav-tabs>li.tag_5 {display:none;}</style>
                                                <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left hidden">

                                                    <div class="blank10"></div>

                                                    <?php } ?>
                                    <?php } elseif ($item['name']=='buymodules_online') { ?>
                                            <!-- 组件市场 -->
                                            <?php if(config::getadmin('buymodules_view')=='1') { ?>
                                            <style type="text/css">
                                                .content-eidt-nav {display:none;}
                                            </style>
                                            <script type="text/javascript">

                                                $("[name='tag<?php echo $onei;?>']").click(function () {
                                                    gotoinurl('<?php echo url("expansion/buymodules",true);?>');
                                                });
                                            </script>
                                            <div class="blank30"></div>
                                            <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">

                                                <div class="blank10"></div>
                                                <?php }?>
                                    <?php } elseif ($item['name']=='template_mobile_dir') { ?>
                                            <!-- 手机模板列表 -->
                                            <style type="text/css">
                                                .content-eidt-nav {display:none;}
                                            </style>
                                            <div style="padding:0px 15px;">
                                                <div class="alert alert-danger" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('tips');?>！</strong></span>
                                                    <?php echo lang_admin('after_switching_the_template_if_the_original_data_is_not_replaced_by_the_template_data_the_label_in_the_template_needs_to_be_reset_otherwise_the_blank_will_appear_because_the_data_page_is_not_called_refer_to_the_tutorial');?>&nbsp;&nbsp;<a class="btn btn-default" href="https://www.cmseasy.cn/chm/chang-jian/show-194.html" target="_blank"><?php echo lang_admin('see');?></a>
                                                </div>
                                            </div>

                                            <div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">
                                            </div>
                                            <div class="blank10"></div>

                                            <div class="tempalte-list">
                                                <?php if(is_array($mobiletpllist))
                                                    foreach($mobiletpllist as $key2 => $val) { ?>

                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                                            <div class="tempalte-box">
                                                                <div class="tempalte-pic">
                                                                    <img class="img-responsive enlargeImg" src="<?php echo $base_url;?>/template/<?php echo $key2;?>/skin/thumbnails.jpg" />
                                                                </div>

                                                                <div class="tempalte-info">
                                                                    <p>
                                                                        <strong><?php echo trim($val);?></strong>
                                                                    </p>
                                                                    <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                        <p>
                                                                            <a class="btn btn-default"  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo $base_url;?>/index.php?case=table&act=list&table=templatetagwap&tagfrom=content&admin_dir=<?php echo get('admin_dir',true);?>&site=default"  data-dataurlname="<?php echo lang_admin('template_mobile_tag_list');?>"><?php echo lang_admin('template_tags');?></a>
                                                                        </p>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="tempalte-btn">
                                                                    <div class="col-xs-6">
                                                                        <div class="row">
                                                                            <button type="submit"
                                                                                <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                                    class="btn" checked="checked" disabled="disabled" value="<?php echo lang_admin('used');?>"<?php } ?>
                                                                                <?php if($item['value']!=$val) { ?>
                                                                                    class="btn" onclick="setTemplate_mobile_dir('<?php echo $key2;?>')" value="<?php echo lang_admin('application');?><?php } ?>">

                                                                                <?php if(trim($item['value'])==trim($val) ) { ?>
                                                                                    <i class="glyphicon glyphicon-ok"></i> <?php echo lang_admin('used');?>
                                                                                <?php } elseif ($item['value']!=$val) { ?>
                                                                                    <i class="glyphicon glyphicon-retweet"></i> <?php echo lang_admin('application');?>
                                                                                <?php } ?>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="row">
                                                                            <a<?php if(trim($item['value'])==trim($val) ) { ?> class="disabled"<?php } else { ?> href="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="return confirm('<?php echo lang_admin('are_you_sure_you_want_to_delete_it');?>')"<?php } ?>><i class="glyphicon glyphicon-trash"></i> <?php echo lang_admin('delete');?></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    <?php } ?>
                                                <script type="text/javascript">
                                                    function setTemplate_mobile_dir(value){
                                                        document.getElementById("template_mobile_dir").value=value;
                                                    }
                                                </script>
                                                <div class="blank10"></div>

                                                <?php echo form::hidden($item['name'],get($item['name'],true));?>

                                                <?php } elseif ($item['name']=='template_admin_dir') { ?>
                                                <style type="text/css">#tag5 {padding-top:30px;}</style>
                                                <!-- 后台模板 -->

                                                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">


                                                    <?php echo form::select($item['name'],get($item['name'],true),$admintpllist,'class="select"');?>


                                                    <?php } elseif ($item['name']=='template_user_dir') { ?>
                                                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">



                                                        <?php echo form::select($item['name'],get($item['name'],true),$usertpllist,'class="select"');?>


                                                        <?php } elseif ($item['color']) { ?>
                                                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                                                            <div id="<?php echo $item['name'];?>list" class="input-group colorpicker-component" title="Using input value">
                                                                <input type="text" name="<?php echo $item['name'];?>" id="<?php echo $item['name'];?>" class="form-control" value="<?php echo $item['value'];?>"/>
                                                                <span class="input-group-addon" id="colorPickerget">
                                                                 <i class="glyphicon glyphicon-adjust" >
                                                                </i>
                                                              </span>
                                                            </div>

                                                            <script type="text/javascript">
                                                                $("#<?php echo $item['name'];?>list").colorpicker();
                                                                $("#<?php echo $item['name'];?>").val("<?php echo config::getadmin($item['name'],true);?>");
                                                            </script>

                                                            <?php } else { ?>
                                                            <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                                                                <?php if($item['radio']) { ?>
                                                                    <?php
                                                                    foreach ($item['select'] as $key=>$val)
                                                                        $_res .= form::radio($item['name'], $key, $key==get($item['name'],true)?true:false) .$val;
                                                                    echo $_res;
                                                                    $_res="";
                                                                    ?>
                                                                <?php } elseif (isset($item['select']) && is_array($item['select'])) { ?>
                                                                    <?php echo form::select($item['name'],get($item['name'],true),$item['select'],'class="select"');?>

                                                                <?php } elseif (strlen(get($item['name'],true))>50) { ?>
                                                                    <?php echo form::textarea($item['name'],get($item['name'],true),' class="textarea"');?>
                                                                <?php } elseif (isset($item['image'])) { ?>
                                                                    <?php echo form::upload_image($item['name'],get($item['name'],true));?>
                                                                <?php } elseif ($item['name']=="admin_dir") { ?>
                                                                    <?php echo form::input($item['name'],get($item['name'],true),'onkeyup="value=value.replace(/[^\w\.\/]/ig,\'\')"');?>
                                                                <?php } else { ?>
                                                                    <?php echo form::input($item['name'],get($item['name'],true));?>
                                                                <?php } ?>

                                                                <?php if($item['name']=='watermark_pos') { ?>
                                                                    <!-- 水印设置 -->
                                                                    <?php echo template('config/watermark_pos_select.php'); ?>
                                                                <?php } ?>

                                                                <?php } ?>
                                                                <?php if(strlen($item['intro'])>1) { ?><?php echo $item['intro'];?><?php } ?>





                                                            </div>
                                                        </div>
                                                        <div class="clearfix blank20"></div>
                                                        <?php } ?>



                                                        <?php $onei++;?>

                                                    </div>

                                                    <?php } ?>
                                                    <?php } ?>

                                                </div>
                                                <div class="blank30"></div>
                                                <div class="line"></div>
                                                <div class="blank30"></div>
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                                                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                                                        <input name="submit" value="1" type="hidden">
                                                        <input   type="submit" id="submit" value="<?php echo lang_admin('submitted');?>" class="btn btn-primary btn-lg">
                                                    </div>
                                                </div>
                                                <div class="blank30"></div>
                                                <div class="blank30"></div>
        </form>
    </div>
</div>




<!-- 查看大图 -->
<style type="text/css">
    .enlargeImg_wrapper {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(52, 52, 52, 0.8);
        text-align:center;
        line-height:100vh;
    }
    img:hover {
        cursor: zoom-in;
    }
    .enlargeImg_wrapper:hover {
        cursor: zoom-out;
    }
    .enlargeImg_wrapper img {
        width:auto;
        min-height:auto;
        max-height:100%;
        margin:0px auto;
    }
</style>
<script type="text/javascript">
    $(function() {
        enlargeImg();
    })
    //查看大图
    function enlargeImg() {
        $(".enlargeImg").click(function() {
            var imgSrc = $(this).attr('src');
            $(this).after("<div onclick='closeImg()' class='enlargeImg_wrapper'><img src='" + imgSrc + "'</div>");
            $('.enlargeImg_wrapper').fadeIn(200);
        })
    }
    //关闭并移除图层
    function closeImg() {
        $('.enlargeImg_wrapper').fadeOut(200).remove();
    }

</script>

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