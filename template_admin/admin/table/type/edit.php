

<style type="text/css">
    @media(max-width:468px) {
        input#title {width:100%;}
        .edit-category .text-left {margin:0px; padding:0px 5px;}
    }
    span.hotspot {float:right; padding-left:10px;}
</style>

<div class="main-right-box">

    <div class="box edit-category" id="box">

        <form method="post" name="form1" action="<?php if(front::$act=='edit') $id="/id/".$data[$primary_key]; else $id=''; echo modify("/act/".front::$act."/table/".$table.$id);?>"
              onsubmit="return returnform(this);">
            <input type="hidden" name="onlymodify" value=""/>

            <h5>
                {lang_admin('editorial_category')}
                <!--工具栏-->
                <div class="content-eidt-nav pull-right">
                    <a id="fullscreen-btn" class="btn btn-default">
                        <i class="icon-frame"></i>
                        {lang_admin('container_fluid')}
                    </a>

                    <span class="pull-right">
                    <div class="btn-group">
                        <select id="isshow" name="isshow" class="form-control select isshow">
                            <option value="1" selected="">
                                {lang_admin('to_examine')}
                            </option>
                            <option value="0">
                                {lang_admin('cancellation_of_audit')}
                            </option>
                        </select>
                    </div>
                        <?php if(session::get('ver') == 'corp'){ ?>
                            <div class="btn-group">
                    <select id="isscreening" name="isscreening" class="form-control select isscreening">
                        <option value="1">{lang_admin('join_screening')}</option>
                        <option value="0" selected="">{lang_admin('unfilter')}</option>
                    </select>
                    </div>
                        <?php } ?>
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

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subordinate_type')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('parentid',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('top_level_type_can_be_skipped')}">
</span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('typename',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('fill_in_the_type_name')}">
</span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subtitle')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('subtitle',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('classify_custom_subheadings')}"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('directory_name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('htmldir',$form,$field,$data)}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('the_catalogue_must_be_english_name_and_if_left_blank_the_pinyin_name_will_be_used_automatically')}">
</span>
                </div>
            </div>

            <div class="row" style="display: none;">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('language_package_binding')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    {form::getform('langid',$form,$field,$data,'class="form-control"')}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title=""></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>


            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                    <ul class="nav nav-tabs content-nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tag1" aria-controls="#tag1" role="tab" data-toggle="tab">{lang_admin('information')}</a></li>
                        <li role="presentation"><a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab">SEO</a></li>
                        <li role="presentation"><a href="#tag3" aria-controls="#tag3" role="tab" data-toggle="tab">{lang_admin('extend')}</a></li>
                        <li role="presentation"><a href="#tag4" aria-controls="#tag4" role="tab" data-toggle="tab">{lang_admin('jurisdiction')}</a></li>
                        <li role="presentation"><a href="#tag5" aria-controls="#tag5" role="tab" data-toggle="tab">{lang_admin('custom')}</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix blank20"></div>



            <div class="tab-content">


                <!-- 基本信息 -->
                <div role="tabpanel" class="tab-pane active" id="tag1">



                </div>







                <!-- SEO信息 -->
                <div role="tabpanel" class="tab-pane" id="tag2">

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('page_title')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('meta_title',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('it_can_fill_in_keywords_different_from_content_names_which_is_beneficial_to_search_optimization')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;{lang_admin('key_word')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            {form::getform('keyword',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('the_keywords_information_in_meta_information_can_be_filled_in_the_keywords_related_to_the_content_separated_by_commas_in_english_which_is_conducive_to_search_optimization')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;{lang_admin('web_description')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('description',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('description_information_in_meta_information_can_fill_in_content_related_profiles_which_is_conducive_to_search_optimization')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">HTML</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('ishtml',$form,$field,$data)}
                            <p class="tips-p">{lang_admin('when_html_is_generated_by_separate_settings_columns_in_dynamic_and_static_settings_must_be_selected_as_specified_and_columns_in_dynamic_and_static_generation_need_to_generate_html')}</p>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('select_whether_the_column_is_static_such_as_setting_the_browse_and_download_permissions_must_be_dynamic_the_default_is_to_inherit_the_static_and_dynamic_settings_of_the_website')}" onmouseout="tooltip.hide();">

</span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <div class="alert alert-warning alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <span class="glyphicon glyphicon-warning-sign"></span>	<strong>URL</strong> 	[{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}]

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('list_url')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                         <!--   <input name="htmlrule1" type="text" class="form-control" value="{$data['htmlrule']}" />
                            <div class="blank30"></div>-->
                            {form::getform('htmlrule',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('sublist_url')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                        <!--    <input name="listhtmlrule1" type="text" class="form-control" value="{$data['listhtmlrule']}" />
                            <div class="blank30"></div>-->
                            {form::getform('listhtmlrule',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>



                </div>


                <!-- 扩展 -->
                <div role="tabpanel" class="tab-pane" id="tag3">

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('thumbnail')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('image',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('banner_function_need_to_call_display_in_the_template')}" onmouseout="tooltip.hide();">

</span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('news_coverage')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                        </div>
                        <div class="blank10"></div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-10 text-left">
                            {form::getform('typecontent',$form,$field,$data)}
                            <p><i class="icon-info"></i> {lang_admin('if_you_use_the_settings_section_cover_please_select_the_list_page_html_template_for_this_section_at_the_template')}</p>
                            <div class="fieldset flash" id="fsUploadProgress">
                                <span class="legend"></span>
                            </div>
                            <div id="divStatus"></div>

                            <div class="blank30"></div>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_use_the_settings_section_cover_please_select_the_list_page_html_template_for_this_section_at_the_template')}" onmouseout="tooltip.hide();"></span>

                            <style type="text/css">
                                #typecontent {min-height:500px;}
                                @media(max-width:468px) {
                                    #typecontent {min-height:300px;}
                                    #typecontent #edui1 {width:100%;}
                                }
                            </style>
                        </div>

                    </div>
                    <div class="clearfix blank20"></div>



                </div>

                <!-- 权限 -->
                <div role="tabpanel" class="tab-pane" id="tag4">

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><!--{lang_admin('jurisdiction')}--></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="th">
                                        <th>{lang_admin('user_group')}</th>
                                        <th class="text-center">{lang_admin('browse')}</th>
                                        <th class="text-center">{lang_admin('download_attachments')}</th>
                                    </tr>
                                    <thead>
                                    <tbody>
                                    {loop usergroup::getInstance()->group $group}
                                    <?php if($group['groupid']=='888') continue; ?>
                                    <tr>
                                        <td>{$group.name}</td>
                                        <td class="text-center">{form::checkbox("_ranks[".$group['groupid']."][view]",-1, @$data['_ranks'][$group['groupid']]['view'])}</td>
                                        <td class="text-center">{form::checkbox("_ranks[".$group['groupid']."][down]",-1, @$data['_ranks'][$group['groupid']]['down'])}</td>
                                    </tr>
                                    {/loop}
                                    </tbody>
                                </table>
                            </div>


                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-warning-sign"></span>	 {lang_admin('check_to_prohibit_browsing_or_downloading_for_this_user_group')}</a>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- 自定义 -->

                <div role="tabpanel" class="tab-pane" id="tag5">




                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('template')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('template',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('template_styles_for_current_type_applications')}" onmouseout="tooltip.hide();">

</span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('sublist')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('listtemplate',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('classify_subordinate_subclasses_using_template_style')}" onmouseout="tooltip.hide();">

</span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subcontent')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('includecatarchives',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('choose_whether_the_categorization_list_contains_the_contents_of_the_subordinate_categorization')}" onmouseout="tooltip.hide();">

</span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('link')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('linkto',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('after_filling_in_the_external_link_address__the_access_column_will_jump_to_the_completed_address')}" onmouseout="tooltip.hide();">

</span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                </div>

            </div>

            <div class="line"></div>
            <div class="blank30"></div>
            <input  name="submit" value="1" type="hidden">
            <input type="submit"  value=" {lang_admin('submitted')} " class="btn btn-primary btn-lg" />
        </form>
        <div class="blank30"></div>
    </div>
</div>

<script type="text/javascript" src="{$base_url}/common/js/upimg/dialog.js"></script>
<link href="{$skin_admin_path}/css/dialog.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var base_url = '{$base_url}';
    function attachment_delect(id) {
        $.ajax({
            url: '{url('tool/deleteattachment/site/'.front::get('site'),false)}&id='+id,
            type: 'GET',
            dataType: 'text',
            timeout: 1000,
            error: function(){
            //	alert('Error loading XML document');
        },
        success: function(data){
            document.form1.attachment_id.value=0;
            get('attachment_path').innerHTML='';
            get('file_info').innerHTML='';
        }
    });
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

<!-- 百度编辑器 -->
<script type="text/javascript" charset="utf-8" src="{$base_url}/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base_url}/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="{$base_url}/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="{$base_url}/ueditor/addCustomizeButton.js"></script>

