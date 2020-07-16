
<style type="text/css">
    @media(max-width:468px) {
        input#title {width:100%;}
        .edit-content .text-left {margin:0px; padding:0px 5px;}
    }
    span.hotspot {float:right; display: inline-block; padding-left:10px; line-height:30px; color:#999;}
    span.hotspot input {margin:0px 5px;}
    i.glyphicon-remove {padding:8px 0px 0px 10px;border:none;background:none;}
    td.shpping-custom-price a span img {width:30px;height:30px;}
    .modal {top:30%;}
    .modal-content {border:none;border-top:5px solid #333; border-radius: 0px;}
    .close {color:red; opacity: 1;}

    .table td.shpping-custom-value a {width: 1%;position: relative;
        white-space: nowrap;border-radius: 3px 0px 0px 3px;    line-height: 28px;
        vertical-align: middle;display: table-cell;}
    .shpping-custom-value input.form-control {display: table-cell; position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0;}
</style>


<div class="main-right-box">
    <div class="box edit-content">


        <form method="post" name="form1" id="form1" action="<?php  $id='';
        if($shopping){
            echo modify("/act/add/table/".$table.$id."/deletestate/".front::get('deletestate').'/shopping/1');
        }else{
            echo modify("/act/add/table/".$table.$id."/deletestate/".front::get('deletestate'));
        } ?>"   onsubmit="return checkform(this);">
            <input type="hidden" name="onlymodify" value=""/>

            <h5>
                <?php echo lang_admin('modify_content');?>
                <!--工具栏-->
                <div class="content-eidt-nav pull-right">
                    <a id="fullscreen-btn" class="btn btn-default" style="display:none;">
                        <i class="icon-frame"></i>
                        {lang_admin('container_fluid')}
                    </a>
                    <span class="pull-right">
                    <div class="btn-group">
                        <select id="checked" name="checked" class="form-control select checked">
                            <option value="1" selected="">
                                {lang_admin('to_examine')}
                            </option>
                            <option value="0">
                                {lang_admin('cancellation_of_audit')}
                            </option>
                        </select>
                    </div>

                        <?php if(front::get('catid')) { ?><script type="text/javascript">get_field(<?php echo front::get('catid');?>);</script><?php } ?>
                        <input  name="submit" value="1" type="hidden">
                        <?php if($shopping){?>
                            <button class="btn btn-success" type="submit" onclick="mysave()">
                            <span class="glyphicon glyphicon-floppy-disk"></span> <?php echo lang_admin('preservation');?>
                        </button>
                        <?php }else{ ?>
                            <button class="btn btn-success" type="submit">
                            <span class="glyphicon glyphicon-floppy-disk"></span> <?php echo lang_admin('preservation');?>
                        </button>
                        <?php } ?>


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



            <!--所属栏目-->
            <?php if($shopping){  $data['catidshopping']=$data['catid']; ?>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;<?php echo lang_admin('column');?></div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                        <?php echo form::getform('catidshopping',$form,$field,$data);?>
                        <input type="hidden" name="catid" id="catid" value="<?php echo $data['catidshopping'];?>" />
                        <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_column_where_the_content_is_located_if_there_are_sub_columns_in_the_column__please_select_sub_columns');?>"></span>
                    </div>
                </div>

            <?php }else{ ?>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;<?php echo lang_admin('column');?></div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                        <?php echo form::getform('catid',$form,$field,$data);?>
                        <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_column_where_the_content_is_located_if_there_are_sub_columns_in_the_column__please_select_sub_columns');?>"></span>
                    </div>
                </div>

            <?php } ?>
            <div class="blank20"></div>

            <!--选择分类-->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('type');?></div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left"><?php echo form::getform('typeid',$form,$field,$data);?>
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_category_where_the_content_is_located_if_the_type_has_sub_type_please_select_sub_type');?>"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <!--选择专题-->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('special');?></div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <?php echo form::select('spid',$data['spid'], special::getoption()); ?>
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('the_content_can_be_divided_into_different_special_and_different_contents_can_be_distinguished');?>"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <!--内容标题-->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;<?php echo lang_admin('title');?></div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <?php echo form::getform('title',$form,$field,$data,'class="form-control"');?>
                    <span class="hotspot" id="txtcolor">
                            <?php echo lang_admin('color');?>
                        <input id="color" name="color" type="hidden" />
                        <span class="input-group-addon" style="padding:0px;background:none;border:none;display:inline-block;">
                            <i class="glyphicon glyphicon-adjust"></i>
                        </span>

                    </span>
                    <span class="hotspot">
                        <?php echo lang_admin('thickening');?>
                        <input name="strong" type="checkbox" value="1" <?php if($data['strong']==1) { ?>checked<?php } ?> />
                    </span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <!--副标题-->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('subtitle');?></div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <?php echo form::getform('subtitle',$form,$field,$data,'class="form-control"');?>
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title=""></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <!--语言包绑定-->
            <div class="row" style="display: none">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('language_package_binding');?></div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <?php echo form::getform('langid',$form,$field,$data,'class="form-control"');?>
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title=""></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <!--切换标签-->
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                    <ul class="nav nav-tabs content-nav-tabs" role="tablist">
                        <!--信息-->
                        <li role="presentation" id="con_tag_1" class="active"><a href="#tag1" aria-controls="#tag1" role="tab" data-toggle="tab"><?php echo lang_admin('information');?></a></li>
                        <!--seo-->
                        <li role="presentation" id="con_tag_2"><a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab">SEO</a></li>
                        <!--扩展-->
                        <li role="presentation" id="con_tag_3"><a href="#tag3" aria-controls="#tag3" role="tab" data-toggle="tab"><?php echo lang_admin('extend');?></a></li>
                        <!--权限-->
                        <li role="presentation" id="con_tag_4"><a href="#tag4" aria-controls="#tag4" role="tab" data-toggle="tab"><?php echo lang_admin('jurisdiction');?></a></li>
                        <!--自定义-->
                        <li role="presentation" id="con_tag_5"><a href="#tag5" aria-controls="#tag5" role="tab" data-toggle="tab"><?php echo lang_admin('custom');?></a></li>
                        <!--字段-->
                        <li role="presentation" id="con_tag_6"><a href="#tag6" aria-controls="#tag6" role="tab" data-toggle="tab"><?php echo lang_admin('field');?></a></li>
                        <?php if($shopping){ ?>
                            <!-- 商品 -->
                            <li role="presentation" id="con_tag_7"><a href="#tag7" aria-controls="#tag7" role="tab" data-toggle="tab"><?php echo lang_admin('commodity');?></a></li>

                            <!--商品-->
                            <?php if(session::get('ver') == 'corp'){ ?>
                                <!--切换tab-->
                                <li role="presentation" id="con_tag_8"><a href="#tag8" aria-controls="#tag8" role="tab" data-toggle="tab"><?php echo lang_admin('switch_label');?></a></li>
                                <!--商品自定义项-->
                                <li role="presentation" id="con_tag_9"><a href="#tag9" aria-controls="#tag9" role="tab" data-toggle="tab"><?php echo lang_admin('shopping_custom');?></a></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <!--切换标签内容-->
            <div class="tab-content">

                <!-- 信息 -->
                <div role="tabpanel" class="tab-pane active" id="tag1">



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span></div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                            <?php echo form::getform('content',$form,$field,$data);?>

                            <div class="fieldset flash" id="fsUploadProgress">
                                <span class="legend"></span>
                            </div>
                            <div id="divStatus"></div>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <style type="text/css">
                        #content {min-height:500px;}
                        @media(max-width:468px) {
                            #content {min-height:300px;}
                            #content #edui1 {width:100%;}
                        }
                    </style>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-rightwap-none"></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">
                            <input name="savehttppic" type="checkbox" value="1" id="pic1" />&nbsp;<?php echo lang_admin('save_remote_images');?>&nbsp;&nbsp;<input name="autothumb" type="checkbox" value="1" id="pic2" />&nbsp;<?php echo lang_admin('the_first_picture_is_automatically_saved_as_a_thumbnail');?>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>



                </div>


                <!-- SEO -->
                <div role="tabpanel" class="tab-pane" id="tag2">


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('page_title');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <?php echo form::getform('mtitle',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('it_can_fill_in_keywords_different_from_content_names_which_is_beneficial_to_search_optimization');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;<?php echo lang_admin('key_word');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('keyword',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('the_keywords_information_in_meta_information_can_be_filled_in_the_keywords_related_to_the_content_separated_by_commas_in_english_which_is_conducive_to_search_optimization');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;<?php echo lang_admin('web_description');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('description',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('description_information_in_meta_information_can_fill_in_content_related_profiles_which_is_conducive_to_search_optimization');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">Tag</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <div class="input-group">
                                <?php echo form::getform('tag',$form,$field,$data);?>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" data-toggle="modal" data-target="#myTagModel"  type="button" data-dataurlname="TAG">
                                        <?php echo lang_admin('add_tag');?>
                                    </button>
                                </span>
                            </div>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_tag_to_which_the_content_belongs');?>"></span>
                            <div class="clearfix blank10"></div>
                            <?php echo form::getform('tag_option',$form,$field,$data);?>
                        </div>
                        <script type="text/javascript">
                            $("#tag").attr("readonly","readonly");
                        </script>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">HTML</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('ishtml',$form,$field,$data);?>
                            <p class="tips-p"><?php echo lang_admin('when_html_is_generated_by_separate_settings_columns_in_dynamic_and_static_settings_must_be_selected_as_specified_and_columns_in_dynamic_and_static_generation_need_to_generate_html');?></p>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('choose_whether_the_content_is_static_such_as_setting_the_browse_and_download_permissions_must_be_dynamic_the_default_is_static_and_dynamic_settings_for_inheritance_columns');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <div class="alert alert-warning alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <span class="glyphicon glyphicon-warning-sign"></span>	<strong>URL</strong>	[<?php echo lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options');?>]

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">URL</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <!--    <input name="htmlrule1" type="text" class="form-control" value="<?php echo $data['htmlrule'];?>" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options');?>"></span>
                            <div class="clearfix blank20"></div>-->
                            <?php echo form::getform('htmlrule',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options');?>"></span>



                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                </div>


                <!-- 扩展 -->
                <div role="tabpanel" class="tab-pane" id="tag3">




                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('thumbnail');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('thumb',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('thumbnails_for_picture_list_page_display');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <div class="alert alert-warning alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <span class="glyphicon glyphicon-warning-sign"></span>	<strong><?php echo lang_admin('inner_page_multi_graph');?></strong> 	[<?php echo lang_admin('only_show_productshtml_and_show_pichtml_content_page_templates_are_displayed_graph');?>]
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('inner_page_multi_graph');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">



                            <div id="uploadarea">
                                <div id="pvpics">
                                    <?php
                                    $ic=0;
                                    if(is_array($data['pics'])){
                                        foreach($data['pics'] as $k => $v){
                                            $ic++;
                                            if(!isset($v['url'])) continue;

                                            //兼容老版本  老版本结构是{url:{url,alt},alt}  新版本是{url,alt}
                                            if (isset($v['url']['url'])){
                                                $v['url']=$v['url']['url'];
                                                $v['alt']=isset($v['url']['alt'])?$v['url']['alt']:"";
                                            }
                                            ?>
                                            <div id="pics<?php echo $ic;?>_up" style="clear:both;">
                                                <span id="pics<?php echo $ic;?>_preview" class="pull-left"><img style="width:90px;margin-right:10px;" src="<?php echo $v['url'];?>" border="0" /></span>

                                                <div class="thumb-box">
                                                    <input id="pics<?php echo $ic;?>" value="<?php echo $v['url'];?>" class="form-control" name="pics[<?php echo $ic;?>][url]" />

                                                    <input id="pics<?php echo $ic;?>_del" onclick="pics_delete('<?php echo $ic;?>','pics');" value="<?php echo lang_admin('delete');?>" type="button" name="delbutton" class="btn btn-gray thumb-del" />
                                                </div>
                                                <div class="blank10"></div>
                                                <input id="pics<?php echo $ic;?>alt" value="<?php echo $v['alt'];?>" class="form-control" placeholder="<?php echo lang_admin('text_description');?>" name="pics[<?php echo $ic;?>][alt]" />




                                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('inside_the_page_there_are_many_pictures_pictures_and_text_instructions');?>"></span>
                                                <div class="blank20"></div>
                                            </div>
                                            <?php
                                        }
                                    }?>
                                </div>
                                <input type="hidden" name="ic" id="ic" value="<?php echo $ic;?>" />
                                <div class="blank10"></div>
                                <a title="<?php echo lang_admin('select_files');?>" onclick="javascript:windowsdig('<?php echo lang_admin('select_files');?>','iframe:index.php?case=file&act=updialog&fileinputid=pics&getbyid=pvpics&max=99&checkfrom=piclistshow','900px','480px','iframe')" href="#body"><img src="<?php echo $base_url;?>/common/js/ajaxfileupload//pic.png" style="width:90px;max-width:90px;" /></a>
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('when_the_content_page_template_is_selected');?><br /> [ <?php echo lang_admin('picture_content_page');?>] <br /><?php echo lang_admin('used_for_picture_slide_display_effect_display');?>"></span>
                            </div>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('attachment');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <span id="file_info" style="color:red"></span><br>
                            <?php echo lang_admin('route');?>：<input type="text" name="attachment_path" class="form-control"  id="attachment_path" value="<?php echo $data['attachment_path'];?>" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('fill_in_this_form_without_uploading_the_attachment_please_fill_in_the_complete_url_address_such_as');?>：http://www.cmseasy.cn/upload/attachment.rar！"></span>
                            <div class="blank10"></div>

                            <input type="hidden" name="attachment_id"  id="attachment_id" value="<?php echo archive_attachment(@$data['aid'],'id');?>"  class="form-control" />
                            <?php echo lang_admin('name');?>：<input type="text" name="attachment_intro"  id="attachment_intro" value="<?php echo archive_attachment(@$data['aid'],'intro');?>" class="form-control" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('fill_in_the_attached_download_prompt_name');?>"></span>

                            <div class="blank10"></div>


                            <a href="javascript:;" class="file"><?php echo lang_admin('select_files');?>
                                <input type="file" name="fileupload" id="fileupload">
                            </a>

                            <input type="button"  name="filebuttonUpload"  id="filebuttonUpload" onclick="return ajaxFileUpload('fileupload','<?php echo url("tool/uploadfile",false);?>','#uploading');" value="<?php echo lang_admin('upload');?>" class="btn btn-default" />
                            <img id="uploading" src="<?php echo $base_url;?>/images/loading.gif" style="display:none;">
                            <input class="btn btn-default" value="<?php echo lang_admin('delete');?>" type="button" name="delbutton"  onclick="attachment_delect(get('attachment_id').value)" />



                        </div>
                    </div>
                    <div class="clearfix blank20"></div>




                </div>


                <!-- 权限 -->
                <div role="tabpanel" class="tab-pane" id="tag4">

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('read_menoy');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('readmenoy',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_tag_to_which_the_content_belongs');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('domw_menoy');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('domwmenoy',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_tag_to_which_the_content_belongs');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>
                    <script type="text/javascript">

                        $(function () {
                            if(parseInt( $("#readmenoy").val())>0){
                                $("#domwmenoy").val('0');
                                $("#domwmenoy").attr("disabled","disabled");
                            }else{
                                $("#readmenoy").val('0');
                                $("#domwmenoy").removeAttr("disabled");
                            }
                        });
                        //阅读收费和下载收费校验
                        $("#readmenoy").change(function(){
                            if(parseInt($(this).val())>0){
                                $("#domwmenoy").val('0');
                                $("#domwmenoy").attr("disabled","disabled");
                            }else{
                                $("#readmenoy").val('0');
                                $("#domwmenoy").removeAttr("disabled");
                            }
                        });

                    </script>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('jurisdiction');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="th">
                                        <th><?php echo lang_admin('membership_group');?></th>
                                        <th class="text-center"><?php echo lang_admin('browse');?></th>
                                        <th class="text-center"><?php echo lang_admin('download');?></th>

                                    </tr>
                                    <?php if(is_array(usergroup::getInstance()->group))
                                        foreach(usergroup::getInstance()->group as $group) { ?>
                                            <?php if ($group['groupid'] == '888') continue; ?>
                                            <tr>
                                                <td><?php echo $group['name'];?></td>
                                                <td class="text-center"><?php echo form::checkbox("_ranks[".$group['groupid']."][view]",-1, @$data['_ranks'][$group['groupid']]['view']);?></td>
                                                <td class="text-center"><?php echo form::checkbox("_ranks[".$group['groupid']."][down]",-1, @$data['_ranks'][$group['groupid']]['down']);?></td>
                                            </tr>
                                        <?php } ?>
                                </table>
                            </div>
                            <div class="blank30"></div>

                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-warning-sign"></span>	 <?php echo lang_admin('check_to_prohibit_browsing_or_downloading_for_this_user_group');?>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- 自定义 -->
                <div role="tabpanel" class="tab-pane" id="tag5">


                    <?php if($shopping){  ?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('commodity_template');?></div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                <?php $data['templateshopping']=$data['template'];?>
                                <?php echo form::getform('templateshopping',$form,$field,$data);?>
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_content_template_style_to_distinguish_the_other_content_styles_of_the_column_settings_so_as_to_have_a_separate_appearance_the_default_is_inheritance_column_template_settings');?>"></span>

                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('content_template');?></div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                <?php echo form::getform('template',$form,$field,$data);?>
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_content_template_style_to_distinguish_the_other_content_styles_of_the_column_settings_so_as_to_have_a_separate_appearance_the_default_is_inheritance_column_template_settings');?>"></span>

                            </div>
                        </div>
                    <?php }?>

                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('wap_template');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <?php echo form::getform('templatewap',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('select_the_content_template_style_to_distinguish_the_other_content_styles_of_the_column_settings_so_as_to_have_a_separate_appearance_the_default_is_inheritance_column_template_settings');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('topping');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('toppost',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('articles_can_be_topped_by_column_or_whole_station');?>"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('grade');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('grade',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('rating_the_content_will_show_the_level_of_pentagon');?>"></span>
                        </div>

                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('security_code');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <?php echo form::getform('isecoding',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('choose_whether_to_open_anti_counterfeiting_code');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('binding_forms');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('showform',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('after_binding_the_form_the_inner_page_automatically_displays_the_bound_submission_form');?>"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('recommendation_bit');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('attr1',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('after_checking_different_content_recommendation_bits_combining_with_the_recommendation_bits_in_the_content_label_different_content_can_be_called_differently');?>"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('brief_introduction');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('introduce',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('fill_in_the_content_brief_if_left_blank_automatically_intercept_the_characters_in_the_content_as_the_introduction');?>"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('release_time');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <input type="text" name="adddate" id="adddate" value="<?php echo date('Y-m-d H:i:s'); ?>" class="skey form-control" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('content_publishing_time_can_be_customized');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('modification_time');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <input  readonly="true" type="text" name="updatedate" id="updatedate" value="<?php echo date('Y-m-d H:i:s'); ?>" class="skey form-control" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('record_content_modification_time_can_not_be_modified');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('expiration_time');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('outtime',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('outdated_content_will_be_deleted_to_the_recycle_bin');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('author');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('author',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('content_author_can_be_customized');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('source');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <?php echo form::getform('attr3',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('content_publishing_source_can_be_customized_default_site_address');?>"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <!--统计量-->
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('visit_statistics');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-9 col-lg-5 text-left">
                            <?php echo form::getform('view',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('visit_statistics');?>"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('url');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <?php echo form::getform('linkto',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('after_filling_in_click_on_the_title_and_connect_to_the_link_address');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('security_code');?></div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <?php echo form::getform('ecoding',$form,$field,$data);?>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('security_code');?>"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                </div>

                <!-- 字段 -->
                <div role="tabpanel" class="tab-pane" id="tag6">
                    <?php $fieldzdy=$field; ?>
                    <?php if(is_array($fieldzdy))
                        foreach($fieldzdy as $f) { ?>
                            <?php
                            $name=$f['name'];
                            if (!preg_match('/^my_/', $name) || preg_match('/^my_field/', $name)) {
                                unset($fieldzdy[$name]);
                                continue;
                            }
                            $category = category::getInstance();
                            $adminlang=lang::getisadmin();
                            setting::$var['archive'][$name]['catid_'.$adminlang]=setting::$var['archive'][$name]['catid_'.$adminlang]==""?0:setting::$var['archive'][$name]['catid_'.$adminlang];
                            $sonids = $category->sons(setting::$var['archive'][$name]['catid_'.$adminlang]);
                            if(setting::$var['archive'][$name]['catid_'.$adminlang] != $data['catid'] && !in_array($data['catid'],$sonids)
                                && (setting::$var['archive'][$name]['catid_'.$adminlang])){
                                unset($fieldzdy[$name]);
                                continue;
                            }
                            if (!isset($data[$name]))
                                $data[$name]='';

                            ?>
                            <?php if( ((setting::$var['archive'][$name]['isshoping'] == '0')|| (setting::$var['archive'][$name]['isshoping'] == ''))
                                && (setting::$var['archive'][$name]['istage'] !='1') ){?>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php
                                        $newcname='cname_'.lang::getisadmin();
                                        echo setting::$var['archive'][$name][$newcname];
                                        $newselect='select_'.lang::getisadmin();
                                        $form[$name]['select']=setting::$var['archive'][$name][$newselect];
                                        ?></div>
                                    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">


                                        <?php echo"<style>div#$name.edui-default {width:100%;min-height:500px;}@media(max-width:468px) {div#$name.edui-default {width:100%;min-height:300px;}}</style>";?>
                                        <?php echo form::getform($name,$form, $fieldzdy, $data); ?>


                                    </div>
                                </div>
                                <div class="clearfix blank20"></div>
                            <?php }?>
                        <?php } ?>


                </div>

                <!-- 标签页 -->
                <div role="tabpanel" class="tab-pane" id="tag8">
                    <?php $fieldtag=$field; ?>
                    <?php if(is_array($fieldtag))
                        foreach($fieldtag as $f) { ?>
                            <?php
                            $name=$f['name'];
                            if (!preg_match('/^my_/', $name) || preg_match('/^my_field/', $name)) {
                                unset($fieldtag[$name]);
                                continue;
                            }
                            $category = category::getInstance();
                            setting::$var['archive'][$name]['catid_'.$adminlang]=setting::$var['archive'][$name]['catid_'.$adminlang]==""?0:setting::$var['archive'][$name]['catid_'.$adminlang];
                            $sonids = $category->sons(setting::$var['archive'][$name]['catid_'.$adminlang]);
                            if(setting::$var['archive'][$name]['catid_'.$adminlang] != $data['catid'] && !in_array($data['catid'],$sonids)
                                && (setting::$var['archive'][$name]['catid_'.$adminlang])){
                                unset($fieldtag[$name]);
                                continue;
                            }
                            if (!isset($data[$name]))
                                $data[$name]='';

                            ?>
                            <?php if( ((setting::$var['archive'][$name]['isshoping'] == '0')|| (setting::$var['archive'][$name]['isshoping'] == ''))
                                && ( setting::$var['archive'][$name]['istage'] =='1'  ) ){?>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"> <?php $newcname='cname_'.lang::getisadmin(); echo setting::$var['archive'][$name][$newcname]; ?></div>
                                    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">

                                        <?php echo form::getform($name,$form, $fieldtag, $data); ?>


                                        <input type="button" value="<?php echo lang_admin('delete');?>" name="restore" onclick="deletemediumtext('<?php echo setting::$var['archive'][$name]['name']; ?>',this)" class="btn btn-gray" />

                                    </div>
                                </div>
                                <div class="clearfix blank20"></div>
                            <?php }?>
                        <?php } ?>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('field_name');?></div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">

                            <input type="text" name="addmediumtextname" id="addmediumtextname" value="my_" onkeyup="value=value.replace(/[^0-9a-zA-Z-_]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-zA-Z-_]/g,''))" class="form-control">
                        </div>
                    </div>
                    <div class="blank20"></div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('label_name');?></div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                            <div class="row">
                                <?php
                                $langdata=lang::getlang();
                                if(is_array($langdata)){
                                    foreach ($langdata as $key=>$value){
                                        $newname='addmediumtextshow_'.$value['langurlname'];
                                        ?>
                                        <div class="col-xs-6 col-sm-4 col-md-3">
                                            <input type="text" name="<?php echo $newname;?>" id="<?php echo $newname;?>" placeholder="<?php echo $value['langname'];?>"  value="" class="form-control">
                                        </div>
                                    <?php    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix blank10"></div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">

                            <input type="hidden" name="batchmediumtext" id="batchmediumtext" value="" class="form-control">
                            <input type="submit" value="<?php echo lang_admin('newly_added');?>" name="restore"
                                   onclick="
                                           this.form.action='<?php echo url('field/add/table/archive/copy/1/id/'.$copyid.'/shopping/'.$shopping,true);?>';
                                           this.form.batchmediumtext.value='addmediumtext'; $('#form1').attr('onsubmit','return checkform2(this)');"
                            "
                            class="btn btn-gray" />

                        </div>
                    </div>
                </div>

                <!--商品自定义字段-->
                <?php if(session::get('ver') == 'corp'){ ?>
                    <script type="text/javascript"> var savename=new Array(); var savenameindex=0; </script>
                    <div role="tabpanel" class="tab-pane" id="tag9">
                        <div class="row show-none" id="sopingfield">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                            <div class="col-xs-12 col-sm-7 col-md-9 col-lg-5 text-left">

                                <?php echo form::getform('my_field',$form,$field,$data,'class="form-control"');?>
                                <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('save_the_commodity_information_field');?>"></span>

                            </div>
                        </div>
                        <div class="clearfix blank20"></div>

                        <?php if(is_array($field))
                            foreach($field as $f) { ?>
                                <?php
                                $name=$f['name'];
                                if (!preg_match('/^my_/', $name)) {
                                    unset($field[$name]);
                                    continue;
                                }
                                $category = category::getInstance();
                                $category->sonall="";
                                setting::$var['archive'][$name]['catid_'.$adminlang]=setting::$var['archive'][$name]['catid_'.$adminlang]==""?0:setting::$var['archive'][$name]['catid_'.$adminlang];
                                $shoppingcatid=$category->sonall(setting::$var['archive'][$name]['catid_'.$adminlang],true);

                                if (!isset($data[$name]))
                                    $data[$name]='';
                                ?>
                                <?php if( (setting::$var['archive'][$name]['isshoping'] == '1')  && (setting::$var['archive'][$name]['isbuyurl'] != '1') ){?>
                                    <script type="text/javascript"> savename[savenameindex]="<?php echo setting::$var['archive'][$name]['name']; ?>:1";savenameindex++;  </script>
                                    <div class="row">
                                        <input type="hidden" name="shoppingcatid" value="<?php echo $shoppingcatid;?>">
                                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php $newcname='cname_'.lang::getisadmin(); echo setting::$var['archive'][$name][$newcname]; ?></div>
                                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                                            <div style="display: none">
                                                <?php echo form::getform($name,$form, $field, $data); ?>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table" id=<?php echo setting::$var['archive'][$name]['name']."0"; ?>>
                                                    <tr>
                                                        <td class="shopping-custom-mode"><span><?php echo lang_admin('content_key');?></span></td>
                                                        <td class="shpping-custom-value"><span><?php echo lang_admin('display_value');?></span></td>
                                                        <td class="shpping-custom-operation price-operator"><span><?php echo lang_admin('operator');?></span></td>
                                                        <td class="shpping-custom-price"><span><?php echo lang_admin('operational_price');?></span></td>
                                                        <td class="shpping-custom-pic"><span><?php echo lang_admin('productpic');?></span></td>
                                                        <td colspan="2"><span><?php echo lang_admin('dosomething');?></span></td>
                                                    </tr>
                                                    <tr id=<?php echo setting::$var['archive'][$name]['name']."1"; ?> class="shopping-custom-field-list">
                                                        <td class="shopping-custom-mode"><input type="text"  id=<?php echo setting::$var['archive'][$name]['name']."id1"; ?> value="1" class="form-control"></td>
                                                        <td class="shpping-custom-value"><input type="text" onchange="mycopy(1,'<?php echo setting::$var['archive'][$name]['name']; ?>')"   id=<?php echo setting::$var['archive'][$name]['name']."note1"; ?> value="" class="form-control"></td>
                                                        <td class="price-operator shpping-custom-operation">
                                                            <select  type="text"  id="<?php echo setting::$var['archive'][$name]['name']."fh1"; ?>"  class="form-control select showform">
                                                            <option value="+" selected>+</option>
                                                            <option value="-">-</option>
                                                            <option value="*">*</option>
                                                            <option value="/">/</option>
                                                            </select>
                                                        </td>
                                                        <td class="shpping-custom-price">
                                                            <input type="number"  id=<?php echo setting::$var['archive'][$name]['name']."mynum1"; ?> value="0" class="form-control" onKeyUp="value=(parseInt((value=value.replace(/\D/g,''))==''?'0':value,10))"></td>
                                                        <td class="shpping-custom-pic">
                                                            <a title="<?php echo lang_admin('select_files');?>" onclick="javascript:windowsdig('选择文件','iframe:index.php?case=file&amp;act=updialog&amp;fileinputid=<?php echo setting::$var["archive"][$name]["name"]."myimg1";?>&amp;getbyid=<?php echo setting::$var["archive"][$name]["name"]."myimg1";?>_preview&amp;max=1&amp;checkfrom=picshow&amp;admin_dir=admin','900px','480px','iframe')" href="#body" style="display:block; float:left;width:30px; height:30px; ">
                                                                <span id="<?php echo setting::$var['archive'][$name]['name']."myimg1";?>_preview"><img width="30" src="./common/js/ajaxfileupload/pic.png" class="img-responsive"  onerror="this.src=common/js/ajaxfileupload/pic.png" width="30"></span>

                                                            </a>

                                                            <input type="hidden" name="<?php echo setting::$var['archive'][$name]['name']."myimg1";?>" id="<?php echo setting::$var['archive'][$name]['name']."myimg1";?>" value="" class="form-control">

                                                            <i class="glyphicon glyphicon-remove" title="<?php echo lang_admin('delete');?>" id="thumb_del" onclick="pics_delete('','<?php echo setting::$var["archive"][$name]["name"]."myimg1";?>');document.getElementById('<?php echo setting::$var["archive"][$name]["name"]."myimg1";?>_preview').innerHTML='<img width=\'90\' src=\'common/js/ajaxfileupload/pic.png\'>';" type="button" name="delbutton"></i>



                                                        </td>
                                                        <td><input type="button" name="delete" onclick="mydelete(1,'<?php echo setting::$var['archive'][$name]['name']; ?>')" value=" <?php echo lang_admin('delete');?> " class="btn btn-gray" /></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="clearfix blank20"></div>
                                    </div>
                                <?php }?>
                            <?php } ?>


                        <!--组合商品-->
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('combined_commodity_type');?></div>
                            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">

                                <div style="display: none"><?php echo form::getform('combined',$form,$field,$data);?></div>
                                <div class="table-responsive">
                                    <table class="table" id=<?php echo setting::$var['archive'][$name]['name']."0"; ?>>
                                        <tr>
                                            <td class="shpping-custom-value"><span><?php echo lang_admin('column');?></span></td>
                                            <td class="shpping-custom-value"><span><?php echo lang_admin('commodity');?></span></td>
                                            <td class="shpping-custom-value"><span><?php echo lang_admin('mold');?></span></td>
                                            <td class="shpping-custom-value"><span><?php echo lang_admin('dosomething');?></span></td>
                                        </tr>
                                        <tr  class="shopping-custom-field-list">
                                            <td class="shpping-custom-value">
                                                <select  name="shoppingtypecatid" onchange="getshopping();" class="form-control select tolast"><option value="0"><?php echo lang_admin('please_choose');?></option></select>
                                            </td>
                                            <td class="shpping-custom-value">
                                                <select  name="categoryid" onchange="setoverlay(this,true)" class="form-control select tolast"><option value="0"><?php echo lang_admin('please_choose');?></option></select>
                                            </td>
                                            <td class="shpping-custom-value input-group">

                                                <a onclick="ShoppingType(this)"  class="label label-warning" data-toggle="modal" data-target="#ShoppingType"><?php echo lang_admin('set_up');?><?php echo lang_admin('custom');?></a>
                                                <input type="text"  disabled value="" class="form-control">
                                                <input type="hidden" name="hiddenshopping" value="" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('please_fill_in_numeric_characters_greater_than_0');?>"></span>
                            </div>
                        </div>

                    </div>

                <?php } ?>

                <style type="text/css">
                    .edui-editor {min-height:500px;}
                </style>

                <!-- 商品 -->


                    <div role="tabpanel" class="tab-pane" id="tag7">
                        <?php if($shopping){ ?>
                            <input type="hidden" name="isshopping" id="isshopping" value="1" class="form-control ">
                        <?php } ?>
                        <!--价格   区分语言-->
                        <?php
                        $langdata=lang::getlang();
                        $attr2=json_decode($data['attr2'],true);
                        if(is_array($langdata)){
                            foreach ($langdata as $key=>$value){
                                $newcname='attr2_'.$value['langurlname'];
                                ?>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo $value['langname'].lang_admin('price');?></div>
                                    <div class="col-xs-12 col-sm-7 col-md-9 col-lg-5 text-left">
                                        <input type="number" name="<?php echo $newcname;?>" id="<?php echo $newcname;?>" value="<?php echo is_array($attr2)?$attr2[$newcname]:$data['attr2'];?>" class="form-control " onkeyup="value=(parseInt((value=value.replace(/\D/g,''))==''?'0':value,10))">
                                        <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('please_fill_in_numeric_characters_greater_than_0');?>"></span>
                                    </div>
                                </div>
                                <div class="clearfix blank20"></div>
                            <?php    }
                        }
                        ?>
                        <!--销售量-->
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('sales_volume');?></div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                <input type="number" name="salesnum" id="salesnum" value="<?php echo $data['salesnum'];?>" class="form-control " onkeyup="value=(parseInt((value=value.replace(/\D/g,''))==''?'0':value,10))">
                                <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('please_fill_in_numeric_characters_greater_than_0');?>"></span>

                            </div>
                        </div>
                        <div class="clearfix blank20"></div>
                        <!--库存-->
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo lang_admin('stock');?></div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                <input type="number" name="inventory" id="inventory" value="<?php echo $data['inventory'];?>" class="form-control " onkeyup="value=(parseInt((value=value.replace(/\D/g,''))==''?'0':value,10))">
                                <span class="tips" data-toggle="tooltip" data-html="ture" data-placement="right" title="<?php echo lang_admin('please_fill_in_numeric_characters_greater_than_0');?>"></span>

                            </div>
                        </div>
                        <div class="clearfix blank20"></div>

                        <!--购买链接-->
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                                <a class="btn btn-gray"><?php echo lang_admin('buyurl');?></a>
                            </div>
                        </div>
                        <div class="blank20"></div>

                        <div id="go-buy">
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <input type="text" name="addbuyurlname" id="addbuyurlname" placeholder="<?php echo lang_admin('name');?>" value="" class="form-control" >
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="addbuyurls" id="addbuyurls" placeholder="<?php echo lang_admin('buyurl_html');?>"  value="" class="form-control">
                                        <span class="input-group-btn">
                                        <input type="button" value="<?php echo lang_admin('newly_added');?>" name="restore" onclick=" addbuyurl(this)" class="btn btn-gray" />
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blank20"></div>
                        <input type="hidden" name="buyurl" id="buyurl" placeholder=""  value="" class="form-control">

                    </div>






                <div class="blank30"></div>

        </form>


        <div class="blank30"></div>
    </div>
</div>


<script type="text/javascript">
    //组合商品
    var shopingtype=new Array();
    var prevshoopingid='';  //选择的商品ID
    var thisbutton;
    $(function () {
        var field="";
        for (i in savename)
        {
            var savenameArry= new Array(); //定义一数组
            savenameArry=savename[i].split(":"); //字符分割
            if(i==0){
                field=field+savenameArry[0];
            }else{
                field=field+','+savenameArry[0];
            }
            var mydata=$("#"+savenameArry[0]+"").val();
            if(mydata!=''){
                var newsavenameArry= new Array(); //定义一数组
                newsavenameArry=mydata.split(/[\s\n]/); //字符分割
                for (var j=0;j<newsavenameArry.length ;j++ )
                {
                    var newmydata= new Array(); //定义新数组
                    if(j==0){
                        newmydata=newsavenameArry[j].split(":"); //字符分割
                        if(newmydata[0] == ''){
                            newmydata[0]=1;
                        }
                        $("#"+savenameArry[0]+"id"+(j+1)+"").val(newmydata[0]);
                        newmydata=newmydata[1].split(","); //字符分割
                        $("#"+savenameArry[0]+"note"+(j+1)+"").val(newmydata[0]);
                        $("#"+savenameArry[1]+"fh"+(j+1)+"").val(newmydata[1]);
                        $("#"+savenameArry[0]+"mynum"+(j+1)+"").val(newmydata[2]);
                        $("#"+savenameArry[0]+"myimg"+(j+1)+"").val(newmydata[3]);
                        $("#"+savenameArry[0]+"myimg"+(j+1)+"_preview").html("<img src='"+newmydata[3]+"' style='width:30px;max-width:30px'>");
                    }
                    else{
                        var newIndex=parseInt(j)+1;
                        setsavenameNum(savenameArry[0],"+",newIndex);
                        setonchange(j,savenameArry[0],"-");   //删除上一个框的onchang事件
                        var  htmljd="<tr id='"+savenameArry[0]+newIndex+"' >";
                        newmydata=newsavenameArry[j].split(":"); //字符分割
                        htmljd+="<td class=\"shopping-custom-mode\"><input type='text'  id='"+savenameArry[0]+"id"+newIndex+"' value='"+newmydata[0]+"' class='form-control'></td>";
                        newmydata=newmydata[1].split(","); //字符分割
                        htmljd+="<td class=\"shpping-custom-value\"><input type='text'  id='"+savenameArry[0]+"note"+newIndex+"' value='"+newmydata[0]+"' class='form-control'></td>";
                        htmljd+="<td class=\"shpping-custom-operation\">";
                        htmljd+="<select  type='text'  id='"+savenameArry[0]+"fh"+newIndex+"'  class='form-control select showform'>";
                        if(newmydata[1]=="+"){
                            htmljd+="<option value='+' selected>+</option>";
                        }else{
                            htmljd+="<option value='+'>+</option>";
                        }
                        if(newmydata[1]=="-"){
                            htmljd+="<option value='-' selected>-</option>";
                        }else{
                            htmljd+="<option value='-'>-</option>";
                        }
                        if(newmydata[1]=="*"){
                            htmljd+="<option value='*' selected>*</option>";
                        }else{
                            htmljd+="<option value='*'>*</option>";
                        }
                        if(newmydata[1]=="/"){
                            htmljd+="<option value='/' selected>/</option>";
                        }else{
                            htmljd+="<option value='/'>/</option>";
                        }
                        htmljd+="</select></td>";
                        htmljd+="<td class=\"shpping-custom-price\"><input type='text'  id='"+savenameArry[0]+"mynum"+newIndex+"' value='"+newmydata[2]+"' class='form-control' onKeyUp=\"value=(parseInt((value=value.replace(/\\D/g,''))==''?'0':value,10))\"></td>";
                        htmljd+="<td class=\"shpping-custom-pic\">";

                        htmljd+="<a title=\"<?php echo lang_admin('select_files');?>\" onclick=\"javascript:windowsdig('选择文件','iframe:index.php?case=file&act=updialog&fileinputid="+savenameArry[0]+"myimg"+newIndex+"&getbyid="+savenameArry[0]+"myimg"+newIndex+"_preview&max=1&amp;checkfrom=picshow&admin_dir=admin','900px','480px','iframe')\" href=\"#body\" style=\" float:left; width:30px;\">";
                        htmljd+="<span id=\""+savenameArry[0]+"myimg"+newIndex+"_preview\"><img src=\""+newmydata[3]+"\" class=\"img-responsive\" width=\"30\"></span>";

                        htmljd+="</a>";
                        htmljd+=" <input type=\"hidden\" name=\""+savenameArry[0]+"myimg"+newIndex+"\" id=\""+savenameArry[0]+"myimg"+newIndex+"\" value=\""+newmydata[3]+"\" class=\"form-control\">";

                        htmljd+="<i class=\"glyphicon glyphicon-remove\" title=\"<?php echo lang_admin('delete');?>\" id=\"thumb_del\" onclick=\"pics_delete('','"+savenameArry[0]+"myimg"+newIndex+"');document.getElementById('"+savenameArry[0]+"myimg"+newIndex+"_preview').innerHTML='<img width=\\'30\\' src=\\'common/js/ajaxfileupload/pic.png\\' style=\\'max-width:30px\\'>';\" type=\"button\" name=\"delbutton\"></i>";

                        htmljd+="</td>";
                        htmljd+="<td><input type='button' name='delete' onclick='mydelete("+newIndex+",\""+savenameArry[0]+"\")' value=' <?php echo lang_admin('delete');?> ' class='btn btn-gray'' /></td>";
                        htmljd+="</tr>";
                        $("#"+savenameArry[0]+0+"").append(htmljd);//插入节点  插入到表格
                    }
                    var newIndex=parseInt(j)+1;
                    if(newIndex == newsavenameArry.length ){
                        newIndex=parseInt(newIndex)+1;
                        setsavenameNum(savenameArry[0],"+",newIndex);
                        setonchange(j,savenameArry[0],"-");   //删除上一个框的onchang事件
                        var  htmljd="<tr id='"+savenameArry[0]+newIndex+"' >";
                        newmydata=newsavenameArry[j].split(":"); //字符分割
                        htmljd+="<td class=\"shopping-custom-mode\"><input type='text'  id='"+savenameArry[0]+"id"+newIndex+"' value='"+newIndex+"' class='form-control'></td>";
                        newmydata=newmydata[1].split(","); //字符分割
                        htmljd+="<td class=\"shpping-custom-value\"><input type='text' onchange='mycopy("+newIndex+",\""+savenameArry[0]+"\")' id='"+savenameArry[0]+"note"+newIndex+"' value='' class='form-control'></td>";
                        htmljd+="<td class=\"shpping-custom-operation\">";
                        htmljd+="<select  type='text'  id='"+savenameArry[0]+"fh"+newIndex+"'  class='form-control select showform'>";
                        htmljd+="<option value='+' selected>+</option>";
                        htmljd+="<option value='-'>-</option>";
                        htmljd+="<option value='*'>*</option>";
                        htmljd+="<option value='/'>/</option>";
                        htmljd+="</select></td>";
                        htmljd+="<td class=\"shpping-custom-price\"><input type='text'  id='"+savenameArry[0]+"mynum"+newIndex+"' value='0' class='form-control' onKeyUp=\"value=(parseInt((value=value.replace(/\\D/g,''))==''?'0':value,10))\"></td>";
                        htmljd+="<td class=\"shpping-custom-pic\">";



                        htmljd+="<a title=\"选择文件\" onclick=\"javascript:windowsdig('选择文件','iframe:index.php?case=file&amp;act=updialog&amp;fileinputid="+savenameArry[0]+"myimg"+newIndex+"&amp;getbyid="+savenameArry[0]+"myimg"+newIndex+"_preview&amp;max=1&amp;checkfrom=picshow&amp;admin_dir=admin','900px','480px','iframe')\" href=\"#body\" style=\" float:left; width:30px;\">";
                        htmljd+="<span id=\""+savenameArry[0]+"myimg"+newIndex+"_preview\"><img src=\"./common/js/ajaxfileupload/pic.png\" class=\"img-responsive\" width=\"30\"></span>";

                        htmljd+="</a>";
                        htmljd+=" <input type=\"hidden\" name=\""+savenameArry[0]+"myimg"+newIndex+"\" id=\""+savenameArry[0]+"myimg"+newIndex+"\" value=\"\" class=\"form-control\">";
                        htmljd+="<i class=\"glyphicon glyphicon-remove\" title=\"<?php echo lang_admin('delete');?>\" id=\"thumb_del\" onclick=\"pics_delete('','"+savenameArry[0]+"myimg"+newIndex+"');document.getElementById('"+savenameArry[0]+"myimg"+newIndex+"_preview').innerHTML='<img src=\\'common/js/ajaxfileupload/pic.png\\' style=\\'max-width:30px\\'>';\" type=\"button\" name=\"delbutton\"></i>";


                        htmljd+="</td>";
                        htmljd+="<td><input type='button' name='delete' onclick='mydelete("+newIndex+",\""+savenameArry[0]+"\")' value=' <?php echo lang_admin('delete');?> ' class='btn btn-gray' /></td>";
                        htmljd+="</tr>";
                        $("#"+savenameArry[0]+0+"").append(htmljd);//插入节点  插入到表格
                    }
                }
            }
        }
        $("[name=my_field]").val(field);
        $("#sopingfield").attr("style","display:none");
        //显示商品字段
        getshoppingcatid();
        //编辑栏目的时候
        $("#catidshopping").change(function () {
            //显示商品字段
            getshoppingcatid();
            //tag重新加载
            /*gettaglist($(this).val());*/
        });
        //组合商品的栏目加载
        getshoppingtypecatid();
        //组合商品加载
        getshopping();
        //弹出框确认键
        $('#btn_pay').click(function () {
            if(shopingtype.length>0){
                var newshoppingtype="";   //返回的隐藏类型
                var newshowshoppingtype="";  //返回的类型
                for(var i=0;i<shopingtype.length;i++){
                    if(shopingtype[i]!=''){
                        if(newshoppingtype==''){
                            newshoppingtype=prevshoopingid+",1#"+shopingtype[i]; //+,1 的原因是  默认买一个
                        }else{
                            newshoppingtype=newshoppingtype+";"+shopingtype[i];
                        }
                        var datafiledname=shopingtype[i].split(":");
                        datafiledname=datafiledname[1].split(",");
                        if(newshowshoppingtype==""){
                            newshowshoppingtype=datafiledname[0];
                        }else{
                            newshowshoppingtype+="-"+datafiledname[0];
                        }
                    }
                }
            }else{
                newshoppingtype=prevshoopingid+",1#";
            }
            $(thisbutton).parent().find('input[type="text" ]').val(newshowshoppingtype);
            $(thisbutton).parent().find('input[name="hiddenshopping"]').val(newshoppingtype);
            $("#closmode").trigger("click");  //关闭弹出框
            /*  if($("#combined").val() !=""){
                  var oldshoppingtype=$("#combined").val();
                  var oldshoppingtype=oldshoppingtype.split("-");
                  for(var index=0;index<oldshoppingtype.length;index++){
                      if(oldshoppingtype[index] == newshoppingtype){
                           alert("不可用重复选择同一个商品和同一个类型！");
                           return;
                      };
                  }
              }else{
                  $("#combined").val(newshoppingtype);
              };*/
        });
        //加载购买链接
        loadbuyurl();
    });

    //设置类型按钮
    function ShoppingType(obj) {
        shopingtype=new Array();  //清空之前选择的
        prevshoopingid='';
        thisbutton="";
        prevshoopingid=$(obj).parent().prev().find('select').val();
        thisbutton=obj;
        //获取分类字段
        var dataname=new Array();
        var data=$("[name=my_field]").val();
        var datanamefield=data.split(",");
        for(var index=0;index<datanamefield.length;index++){
            dataname[index]=datanamefield[index];
        }
        //获取设置的分类
        var dataarraytype=[];
        var oldshoppingtype =$(obj).parent().find('input[name="hiddenshopping"]').val();
        // alert(oldshoppingtype);
        var newoldshoppingtype=oldshoppingtype.toString().split("#");
        if(newoldshoppingtype.length>1){
            newoldshoppingtype=newoldshoppingtype[1].toString().split(";");
            for (var i = 0; i < newoldshoppingtype.length; i++) {
                var dataarray=newoldshoppingtype[i].toString().split(":");
                dataarraytype[dataarraytype.length]=dataarray[0];
            }
        }


        if(dataname.length>0){
            for(var index=0;index<dataname.length;index++){
                var	htmldata='<div class="visual-conent-car-btn">';
                var fieldname=dataname[index]+'Modal';
                htmldata+='<div id="'+fieldname+'" class="shop-type-info"><p></p></div>';
                htmldata+='</div>';
                $('#columntype').append(htmldata);
            }
            //设置名字
            setfieldName(dataname,'<?php echo url("archive/getfieldName",false); ?>');
            //加载按钮
            setleixing(dataname,'<?php echo url("archive/getarchiveType",false); ?>',prevshoopingid,dataarraytype);
        }
    }
    //类型加载
    function setleixing(field,setleixingurl,aid,oldshoppingtype){
        var url=setleixingurl+'&aid='+aid;
        $.ajax({
            type : "get",
            url : url,
            async : false,
            success : function(data) {
                var archiveData = JSON.parse(data);
                var datanamefield = field.toString().split(",");
                for (var index = 0; index < datanamefield.length; index++) {
                    if (archiveData==null || archiveData[datanamefield[index]] == 'num' || archiveData[datanamefield[index]] == ''
                        || archiveData[datanamefield[index]] == undefined ) {
                        $('#' + datanamefield[index] + 'Modal').attr("style", "display:none");
                    } else {
                        var dataarray = archiveData[datanamefield[index]].split("\n");
                        for (var i = 0; i < dataarray.length; i++) {
                            var newdataarray = dataarray[i].toString().split(",");
                            var fieldtype = newdataarray[0].toString().split(":");
                            var onclic="onclickprice(this,'"+newdataarray[1]+"','"+newdataarray[2]+"','"+datanamefield[index]+"','"+fieldtype[1]+"','"+fieldtype[0]+"')";
                            if(oldshoppingtype.length>0){
                                var j = $.inArray(datanamefield[index].toString()+','+fieldtype[0].toString(), oldshoppingtype);   //结果：index=1
                                if (j >= 0) {
                                    onclickprice("",newdataarray[1],newdataarray[2],datanamefield[index],fieldtype[1],fieldtype[0]);
                                    var htmldata = '<button style="border-color: rgb(255, 104, 1); border-width: 2px; margin: 0px 5px 15px 0px;" name="'+datanamefield[index]+'Modalbutton" id="'+datanamefield[index]+fieldtype[0]+'"  onclick="' + onclic + '" type="button" data-switch-toggle="animate" class="btn">' + fieldtype[1] + '</button>';
                                }else{
                                    var htmldata = '<button style=" border-width: 2px; margin: 0px 5px 15px 0px;"  name="'+datanamefield[index]+'Modalbutton" id="'+datanamefield[index]+fieldtype[0]+'"  onclick="' + onclic + '" type="button" data-switch-toggle="animate" class="btn">' + fieldtype[1] + '</button>';
                                }
                            }else{
                                var htmldata = '<button  style=" border-width: 2px; margin: 0px 5px 15px 0px;"   name="'+datanamefield[index]+'Modalbutton" id="'+datanamefield[index]+fieldtype[0]+'"  onclick="' + onclic + '" type="button" data-switch-toggle="animate" class="btn">' + fieldtype[1] + '</button>';
                            }
                            $('#' + datanamefield[index] + 'Modal').find('dd.shop-type-list').append(htmldata);
                            var butteid = datanamefield[index] + fieldtype[0];
                            Exists(newdataarray[3], butteid, fieldtype[1])
                        }
                    }
                }
            }
        });
    }
    //选择类型
    function  onclickprice(obj,fh,num,buttonname,val,key) {
        var nocolor=true;    //选中颜色判断
        if(fh == '+'){
            fh='jia';
        }else if(fh == '-'){
            fh='jian';
        }else if(fh == '*'){
            fh='chen';
        }else if(fh == '/'){
            fh='chu';
        }else{
            fh=fh;
        }
        if(shopingtype.length==0){
            shopingtype[0]=buttonname+','+key+":"+val+","+fh+","+num;
        }
        else{
            var ischunzai=true;
            for(var i=0;i<shopingtype.length;i++){
                var savenameArry= new Array(); //定义一数组
                savenameArry=shopingtype[i].split(":"); //字符分割
                savenameArry=savenameArry[0].split(","); //字符分割
                if(savenameArry[0]==buttonname){
                    if(key==savenameArry[1]){
                        shopingtype.splice(i,1);
                        nocolor=false;
                    }else{
                        shopingtype[i]=buttonname+','+key+":"+val+","+fh+","+num;
                    }
                    ischunzai=false;
                }
            }
            if (ischunzai){
                shopingtype[shopingtype.length]=buttonname+','+key+":"+val+","+fh+","+num;
            }

        }

        $("[name="+buttonname+"Modalbutton]").css({"border-color":"#ccc","border-width":"1px","margin":"1px 6px 16px 1px"});
        $("[name="+buttonname+"Modalbutton]").removeClass("btn-focus");
        if(nocolor){
            $(obj).css({"background":"#FF6801","border-width":"2px","margin":"0px 5px 15px 0px"});
            $(obj).addClass("btn-focus");
        }

    }
    //校验文件是否存在  插入图片
    function Exists(url,butteid,fieldtype) {
        $.ajax(url, {
            type: 'get',
            timeout: 1000,
            success: function () {
                var htmldata = '<img src=' + url + ' width="30" height="30" alt=' + fieldtype + '>';
                $("#img" + butteid).prepend(htmldata);
            },
            error: function () {
                return false;
            }
        });

    }
    //获取名字
    function setfieldName(field,setfieldNameurl){
        $.ajax({
            type : "get",
            url : setfieldNameurl+'&field='+field,
            async : false,
            success : function(data){
                var fieldName=JSON.parse(data);
                var fieldNameArray=fieldName.split(",");
                var datanamefield=field.toString().split(",");
                for(var index=0;index<datanamefield.length;index++){
                    $('#'+datanamefield[index]+'Modal').html('<dt>'+fieldNameArray[index]+'</dt>'+'<dd class="shop-type-list"></dd>');
                }
            }
        });
    }
    //显示商品字段
    function getshoppingcatid(){
        $("input[name='shoppingcatid']").each(function(i,item){
            str=item.value;
            var shoppingcatidstatic=false;
            arr=str.split(',');//注split可以用字符或字符串分割
            for(var i=0;i<arr.length;i++)
            {
                if( $("#catidshopping").val()==arr[i] && $("#catidshopping").val()!='0'){
                    shoppingcatidstatic=true;
                }
            }
            if(shoppingcatidstatic){
                $(item).parent().attr("style","display:black");
            }else{
                $(item).parent().attr("style","display:none");
            }
        });
    }
    //选择商品的时候
    function setoverlay(obj,static){
        $(obj).parent().next().find('input[type="text" ]').val('');
        $(obj).parent().next().find('input[name="hiddenshopping"]').val('');
        if($(obj).val() !='0'){
            $(obj).parent().next().find('input[name="hiddenshopping"]').val($(obj).val() + ",1#");
            if(static){
                var htmltrl='<tr  class="shopping-custom-field-list">';
                htmltrl+=' <td class="shpping-custom-value">';
                htmltrl+=' <select  name="shoppingtypecatid"  onchange="getshopping();" class="form-control select tolast"><option value="0"><?php echo lang_admin("please_choose");?></option></select>';
                htmltrl+='</td>';
                htmltrl+='<td class="shpping-custom-value">';
                htmltrl+='<select  name="categoryid" onchange="setoverlay(this,true)" class="form-control select tolast"><option value="0"><?php echo lang_admin("please_choose");?></option></select>';
                htmltrl+='</td>';
                htmltrl+='<td class="shpping-custom-value input-group"><a onclick="ShoppingType(this)"   class="label label-warning" data-toggle="modal" data-target="#ShoppingType"><?php echo lang_admin("set_up");?><?php echo lang_admin("custom");?></a>';
                htmltrl+='<input type="text"  disabled value="" class="form-control"><input type="hidden" name="hiddenshopping" value="" class="form-control">';
                htmltrl+='</td>';
                htmltrl+='</tr>';
                $(obj).parent().parent().parent().append(htmltrl);
                var htmltrl='<td class="shpping-custom-value">';
                htmltrl+='<input type="button" name="delete" onclick="dropshoppingtype(this)" value=" <?php echo lang_admin("delete");?> " class="btn btn-gray">';
                htmltrl+='</td>';
                $(obj).parent().parent().append(htmltrl);
                //去掉上一个选择商品的改变事件
                $(obj).attr('onchange',"setoverlay(this,false)");
                //组合商品加载
                getshoppingtypecatid();
                //组合商品加载
                getshopping();
            }
        }
    }
    //getshopping() 组合商品加载
    function getshopping(){
        $("select[name='shoppingtypecatid']").each(function (j, item) {
            var tolastid = item.value;
            if(tolastid!='0'){
                var hrefname = "<?php echo modify("/act/gettolast/table/coupon"); ?>";
                $.get(hrefname, {'tolastid': tolastid}, function (data) {
                    data = JSON.parse(data);
                    var selectid = $(item).parent().next().find("select[name='categoryid']").val();
                    var selectidstatic = true;
                    $(item).parent().next().find("select[name='categoryid']").html('');
                    var html = "<option value='0'><?php echo lang_admin('please_choose');?></option>";
                    for (var i = 0; i < data.length; i++) {
                        if (data[i]['aid'] == selectid) {
                            selectidstatic = false;
                            html += "<option value='" + data[i]['aid'] + "' selected>" + data[i]['title'] + "</option>";
                        } else {
                            html += "<option value='" + data[i]['aid'] + "'>" + data[i]['title'] + "</option>";
                        }
                    }
                    //如果商品选的是0  那么 清空商品的类型
                    if (selectid == '0' || selectidstatic) {
                        $(item).parent().next().next().find('input[type="text" ]').val('')
                        $(item).parent().next().next().find('input[name="hiddenshopping"]').val('');
                    }
                    $(item).parent().next().find("select[name='categoryid']").append(html);
                });
            }
        });
    }
    //组合商品的栏目加载
    function getshoppingtypecatid(){
        var hrefname="<?php echo modify("/act/getshoppingtypecatid/table/archive"); ?>";
        $.ajax({
            type : "get",
            url : hrefname,
            async : false,
            success : function(data) {
                data = JSON.parse(data);
                $("select[name='shoppingtypecatid']").each(function (j, item) {
                    var selectid = item.value;
                    $(item).html('');
                    var html = "";
                    for (var i = 0; i < data.length; i++) {
                        if (data[i]['aid'] == selectid) {
                            html += "<option value='" + data[i]['aid'] + "' selected>" + data[i]['title'] + "</option>";
                        } else {
                            html += "<option value='" + data[i]['aid'] + "'>" + data[i]['title'] + "</option>";
                        }

                    }
                    $(item).append(html);
                });
            }
        });
    }
    //saveshoppingtype 保存组合商品类型
    function saveshoppingtype(){
        //保存组合商品
        var newcombined='';
        $("select[name='categoryid']").each(function(j,item) {
            if(item.value != '0'){
                if(newcombined=='') {
                    newcombined= $(item).parent().next().find('input[name="hiddenshopping"]').val();
                }else{
                    newcombined+='-'+$(item).parent().next().find('input[name="hiddenshopping"]').val();
                }
            }
        });
        $("#combined").val(newcombined); //赋值
    }
    //删除组合商品
    function dropshoppingtype(obj){
        $(obj).parent().parent().remove();
    }


    //图片上传
    $( function () {
        $( "#file_my_colormyimg1" ).fileinput( {
            uploadUrl: '/index.php?case=tool&act=uploadimage3',
            allowedFileExtensions: [ 'jpg', 'png', 'gif' ],
            maxFileSize: 1000,
            language: 'zh',
            maxFilesNum: 1,
            maxFileCount: 1,
            showPreview: false,
            showCaption: false,
            showUploadedThumbs: false
        } ).on( 'fileerror', function ( event, data, msg ) {
            alert( msg );
        } ).on( 'fileuploaded', function ( event, data, previewId, index ) {
            response = data.response;
            if ( response.file_my_colormyimg1.code == '0' ) {
                $('#my_colormyimg1').val(response.file_my_colormyimg1.name);
            } else {
                alert( response.file_my_colormyimg1.msg );
            }
        } );
    } );
    //删除节点
    function mydelete(index,jdname){
        if(index>1){
            setsavenameNum(jdname,"-",index);
            setonchange(index,jdname,"+");   //增加上一个框的onchang事件
            var deletejd= document.getElementById(jdname+index);
            deletejd.parentNode.removeChild(deletejd);
        }else{
            alert("<?php echo lang_admin('article_one_cannot_be_deleted');?>");
        }
    }

    function setsavenameNum(savenames,Operator,index){
        for (i in savename)
        {
            var savenameArry= new Array(); //定义一数组
            savenameArry=savename[i].split(":"); //字符分割
            if(savenameArry[0]==savenames){
                var newsavenameArry=savenameArry[1].split(","); //字符分割
                var textIndex=0;
                for (var q=0;q<newsavenameArry.length ;q++ )
                {
                    if((Operator =="-") && (newsavenameArry[q]==index)){
                        continue;
                    }else {
                        if(textIndex>0){
                            savenameArry[1]=savenameArry[1]+','+newsavenameArry[q];
                        }else{
                            savenameArry[1]=newsavenameArry[q];
                        }
                        textIndex++;
                    }
                }
                if(Operator=="+"){
                    savename[i]=savenameArry[0]+':'+savenameArry[1]+','+index;
                }else{
                    savename[i]=savenameArry[0]+':'+savenameArry[1];
                }
            }
        }
    }
    //新增节点
    function mycopy(index,jdname){
        var newIndex=parseInt(index)+1;
        setsavenameNum(jdname,"+",newIndex);   //数据集增加
        setonchange(index,jdname,"-");   //去掉上一个框的onchang事件
        var  htmljd="<tr id='"+jdname+newIndex+"' >";
        htmljd+="<td class=\"shopping-custom-mode\"><input type='text'  id='"+jdname+"id"+newIndex+"' value='"+newIndex+"' class='form-control'></td>";
        htmljd+="<td class=\"shpping-custom-value\"><input type='text' onchange='mycopy("+newIndex+",\""+jdname+"\")' id='"+jdname+"note"+newIndex+"' value='' class='form-control'></td>";
        htmljd+="<td class=\"shpping-custom-operation\">";
        htmljd+="<select  type='text'  id='"+jdname+"fh"+newIndex+"'  class='form-control select showform'>";
        htmljd+="<option value='+' selected>+</option>";
        htmljd+="<option value='-' >-</option>";
        htmljd+="<option value='*' >*</option>";
        htmljd+="<option value='/' >/</option>";
        htmljd+="</select></td>";
        htmljd+="<td class=\"shpping-custom-price\"><input type='text'  id='"+jdname+"mynum"+newIndex+"' value='0' class='form-control' onKeyUp=\"value=(parseInt((value=value.replace(/\\D/g,''))==''?'0':value,10))\"></td>";

        htmljd+="<td class=\"shpping-custom-pic\">";


        htmljd+="<a title=\"<?php echo lang_admin('select_files');?>\" onclick=\"javascript:windowsdig('选择文件','iframe:index.php?case=file&amp;act=updialog&amp;fileinputid="+jdname+"myimg"+newIndex+"&amp;getbyid="+jdname+"myimg"+newIndex+"_preview&amp;max=1&amp;checkfrom=picshow&amp;admin_dir=admin','900px','480px','iframe')\" href=\"#body\" style=\"width:30px; float:left;\">";
        htmljd+="<span id=\""+jdname+"myimg"+newIndex+"_preview\"><img src=\"./common/js/ajaxfileupload/pic.png\" class=\"img-responsive\" width=\"30\"></span>";

        htmljd+="</a>";

        htmljd+=" <input type=\"hidden\" name=\""+jdname+"myimg"+newIndex+"\" id=\""+jdname+"myimg"+newIndex+"\" value=\"\" class=\"form-control\">";
        htmljd+="<i class=\"glyphicon glyphicon-remove\" title=\"<?php echo lang_admin('delete');?>\" id=\"thumb_del\" onclick=\"pics_delete('','"+jdname+"myimg"+newIndex+"');document.getElementById('"+jdname+"myimg"+newIndex+"_preview').innerHTML='<img src=\\'common/js/ajaxfileupload/pic.png\\' style=\\'max-width:30px\\'>';\" type=\"button\" name=\"delbutton\"></i>";


        htmljd+="</td>";

        htmljd+="<td><input type='button' name='delete' onclick='mydelete("+newIndex+",\""+jdname+"\")' value=' <?php echo lang_admin('delete');?> ' class='btn btn-gray'' /></td>";
        htmljd+="</tr>";
        $("#"+jdname+0+"").append(htmljd);//插入节点  插入到表格

    }

    function setonchange(index,name,staut){
        if(staut=="+"){
            index=parseInt(index)-1;
            $("#"+name+"note"+index+"").attr("onchange","mycopy("+index+",\""+name+"\")");
        }else{
            $("#"+name+"note"+index+"").removeAttr('onchange');
        }
    }

    //新增购买链接
    function addbuyurl(obj){
        if($("#addbuyurlname").val()=="") {
            alert("<?php echo lang_admin('the_name_cannot_be_empty');?>");
            $("#addbuyurlname").focus();
            return false;
        }
        if($("#addbuyurls").val()=="") {
            alert("<?php echo lang_admin('buyurl');?><?php echo lang_admin('on_null');?>");
            $("#addbuyurls").focus();
            return false;
        }

        var htmlstr="<div class=\"row\"  name=\"buyurldiv\"><div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right\"></div><div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left\"><div class=\"form-inline\">\n" +
            "<div class=\"form-group\">\n" +
            "<input type=\"text\" name=\"buyurlname\" placeholder=\"<?php echo lang_admin('name');?>\" value=\""+$("#addbuyurlname").val()+"\" class=\"form-control \">\n" +
            "</div>\n" +
            "<div class=\"input-group\">\n" +
            "<input type=\"text\" name=\"buyurls\" placeholder=\"<?php echo lang_admin('buyurl_html');?>\" value=\""+$("#addbuyurls").val()+"\" class=\"form-control \">\n" +
            "<span class=\"input-group-btn\">\n" +
            "<input type=\"button\" value=\"<?php echo lang_admin('delete');?>\" name=\"restore\" onclick=\"$(this).parent().parent().parent().parent().parent().next().remove();$(this).parent().parent().parent().parent().parent().remove();\" class=\"btn btn-gray\" />\n" +
            "</span>\n" +
            "</div>\n" +
            "</div></div></div>\n" +
            "<div class=\"clearfix blank20\"></div>\n";
        $(obj).parent().parent().parent().parent().parent().parent().prepend(htmlstr);
        $("#addbuyurlname").val("");
        $("#addbuyurls").val("");                        }

    //加载购买链接
    function loadbuyurl(){
        var buyurl=<?php echo $data['buyurl']==""?"{}":$data['buyurl']; ?>;
        $.each(buyurl, function (key, value) {
            var htmlstr="<div class=\"row\" name=\"buyurldiv\"><div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right\"></div><div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left\"><div class=\"form-inline\"  >\n" +
                "<div class=\"form-group\">\n" +
                "<input type=\"text\" name=\"buyurlname\" placeholder=\"<?php echo lang_admin('name');?>\" value=\""+value['buyurlname']+"\" class=\"form-control \">\n" +
                "</div>\n" +
                "<div class=\"input-group\">\n" +
                "<input type=\"text\" name=\"buyurls\" placeholder=\"<?php echo lang_admin('buyurl_html');?>\" value=\""+value['buyurls']+"\" class=\"form-control \">\n" +
                "<span class=\"input-group-btn\">\n" +
                "<input type=\"button\" value=\"<?php echo lang_admin('delete');?>\" name=\"restore\" onclick=\"$(this).parent().parent().parent().parent().parent().next().remove();$(this).parent().parent().parent().parent().parent().remove();\" class=\"btn btn-gray\" />\n" +
                "</span>\n" +
                "</div>\n" +
                "</div></div></div>\n" +
                "<div class=\"clearfix blank20\"></div>\n";
            $("#go-buy").prepend(htmlstr);
        });


    }

    //保存购买链接
    function savebuyurl(){
        var buyurl={};
        $("div[name='buyurldiv']").each(function(i,item) {
            var newbuyurl={};
            var buyurlname = $(item).find("input[name='buyurlname']").val();
            var buyurls = $(item).find("input[name='buyurls']").val();
            newbuyurl['buyurlname']=buyurlname;
            newbuyurl['buyurls']=buyurls;
            buyurl[i]=newbuyurl;
        });
        $("#buyurl").val(JSON.stringify(buyurl));
        console.log(buyurl);
    }

    //保存
    function mysave() {

        <?php if($shopping){;?>
        $('#catid').val($('#catidshopping').val());
        <?php };?>


        //saveshoppingtype 保存组合商品类型
        saveshoppingtype();

        for (i in savename)
        {
            var savenameArry= new Array(); //定义一数组
            savenameArry=savename[i].split(":"); //字符分割
            $("#"+savenameArry[0]+"").val("");   //先清空多行文本框
            var newData="";
            var savenameArryItem= new Array(); //定义一数组
            savenameArryItem=savenameArry[1].split(","); //字符分割

            for(var i=0;i<savenameArryItem.length;i++){
                var myid= $("#"+savenameArry[0]+"id"+(savenameArryItem[i])+"").val();
                var mynote= $("#"+savenameArry[0]+"note"+(savenameArryItem[i])+"").val();
                var myfh= $("#"+savenameArry[0]+"fh"+(savenameArryItem[i])+"").val();
                var mynum= $("#"+savenameArry[0]+"mynum"+(savenameArryItem[i])+"").val();
                var myimg= $("#"+savenameArry[0]+"myimg"+(savenameArryItem[i])+"").val();
                if(myimg=="./common/js/ajaxfileupload/pic.png"){
                    myimg="";
                }
                if((i==0) && (myid.length>0) && (mynote.length>0)  && (myid != undefined) && (mynote != undefined)){
                    newData=newData+myid+':'+mynote+','+myfh+','+mynum+','+myimg;
                }else if((i!=0) && (myid.length>0) && (mynote.length>0)  && (myid != undefined) && (mynote != undefined)){
                    newData=newData+'\r\n'+myid+':'+mynote+','+myfh+','+mynum+','+myimg;
                }
            }
            $("#"+savenameArry[0]+"").val(newData);   //附上新值
        }

        //保存购买链接
        savebuyurl();
    }

    function deletemediumtext(name,obj){
        $(obj).parent().parent().prev().prev().remove();
        $(obj).parent().parent().prev().remove();
        $(obj).parent().parent().remove();
        $.get("<?php echo url('field/delete/table/archive',true)?>&name="+name,function () {
            alert("<?php echo lang_admin('successful_deletion');?>");
        })
    }


</script>


<!-- 上传 -->
<script type="text/javascript" src="<?php echo $base_url;?>/common/js/ajaxfileupload/ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/common/js/ajaxfileupload/ThumbAjaxFileUpload.js"></script>

<!-- 上传框 -->
<script src="{$base_url}/common/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="{$base_url}/common/plugins/fileinput/js/locales/zh.js" type="text/javascript"></script>
<link href="{$base_url}/common/plugins/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css">

<!-- 日期 -->
<link rel="stylesheet" href="<?php echo $base_url;?>/common/js/jquery/ui/css/ui.datepicker.css" type="text/css" media="screen" title="core css file" charset="utf-8" />
<script language="javascript" src="<?php echo $base_url;?>/common/js/jquery/ui/js/ui.datepicker.js"></script>

<!-- 图片上传 -->
<script type="text/javascript" src="<?php echo $base_url;?>/common/js/upimg/dialog.js"></script>
<link href="<?php echo $skin_admin_path;?>/css/dialog.css" rel="stylesheet" type="text/css" />

<!-- 取色 -->
<link href="{$base_url}/common/css/bootstrap/bootstrap-3.3.7/plugins/colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet">
<script type="text/javascript" src="{$base_url}/common/css/bootstrap/bootstrap-3.3.7/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>

<script type="text/javascript">
    $(function () {
        $('#txtcolor').colorpicker();
    });
</script>

<!--新增tab名称校验-->
<script type="text/javascript">
    function checkform(obj) {
        if($("#catid").val()=="0") {
            alert("<?php echo lang_admin('please_select_the_column');?>");
            $("#catid").focus();
            return false;
        }
        if(!$("#title").val()) {
            alert("<?php echo lang_admin('please_fill_in_the_title');?>");
            $("#title").focus();
            return false;
        }
        <?php if(is_array($field))
        foreach($field as $f) { ?>
        <?php
        if (!preg_match('/^my_/', $f['name']) || !$f['notnull']) {
            //unset($field[$f['name']]);
            continue;
        }
        //$filecatid绑定的栏目
        $filecatid=setting::$var['archive'][$f['name']]['catid'];
        ?>
        if(!$("#<?php echo $f['name'];?>").val() && "<?php echo $filecatid;?>" ==$("#catid").val() && "<?php echo $filecatid;?>"!="0"){
            alert("<?php echo lang_admin('please_fill_in');?><?php $newcname='cname_'.lang::getisadmin();  echo setting::$var['archive'][$f['name']][$newcname]; ?>");
            setTab('tag',6,6);
            $("#<?php echo $f['name'];?>").focus();
            return false;
        }
        <?php } ?>

        returnform(obj);
        return  false;
    }

    //新增标签名得到校验
    function checkform2(obj) {
        if($("#batchmediumtext").val()=='addmediumtext'){
            if($("#addmediumtextname").val().indexOf('.')>-1)
            {alert('<?php echo lang_admin('field_name_cannot_contain');?>');
                $("#addmediumtextname").focus();
                return false;
            }
            if(!($("#addmediumtextname").val().indexOf('my_')>-1))
            {alert('<?php echo lang_admin('field_name_format_must_be');?>my_abc!');
                $("#addmediumtextname").focus();
                return false;
            }
            var re=/^\w+$/;
            if(!re.test($("#addmediumtextname").val()))
            {   alert('<?php echo lang_admin('field_name_format_must_be');?>my_abc!');
                $("#addmediumtextname").focus();
                return false;
            }
        }
        <?php
        $langdata=lang::getlang();
        if(is_array($langdata)){
        foreach ($langdata as $key=>$value){
        $newname='addmediumtextshow_'.$value['langurlname'];
        ?>
        if($("#<?php echo $newname;?>").val()=="") {
            alert("<?php echo lang_admin('请输入标签名');?>");
            $("#<?php echo $newname;?>").focus();
            return false;
        }
        <?php    }
        }
        ?>
        returnform(obj);
        return  false;
    }
</script>


<script type="text/javascript">
    $(function(){
        //加载tag
       /* gettaglist("<?php echo $data['catid'];?>");*/

        $("#catid").change( function(){
            get_field($("#catid").val());
            //tag重新加载
           /* gettaglist($(this).val());*/
        });
        $("#tag_option").change( function(){
            if($("#tag_option").find('option:selected').val() != '0'){
                if($("#tag").val() != ''){
                    var sp = ',';
                }else{
                    sp = '';
                }
                $("#tag").val($("#tag").val()+sp+$("#tag_option").find('option:selected').text());
                //$("#tagids").val($("#tagids").val()+sp+$("#tagid").find('option:selected').val());
            }
        });
        $("#color_btn").colorpicker({
            fillcolor:true,
            success:function(o,color){
                $("#title").css("color",color);
                $("#color").val(color);
            },
            reset:function(o,color){
                $("#title").css("color","");
                $("#color").val("");
            }
        });
        $("#title").css("color","<?php echo $data['color'];?>");
    });
    function attachment_delect(id) {
        $.ajax({
            url: '<?php echo url('tool/deleteattachment/site/'.front::get('site'),false);?>&id='+id,
            type: 'GET',
            dataType: 'text',
            timeout: 10000,
            error: function(){
                //	alert('Error loading XML document');
            },
            success: function(data){
                document.form1.attachment_id.value=0;
                get('attachment_path').value='';
                get('attachment_intro').value='';
                get('attachment_path_i').innerHTML='';
                get('file_info').innerHTML='';
            }
        });
    }

    function get_field(catid) {
        $.ajax({
            url: '<?php echo url('table/getfield/table/archive/aid/'.$data['aid'],true);?>&catid='+catid,
            type: 'GET',
            dataType: 'text',
            timeout: 10000,
            error: function(){
                //alert('Error loading XML document');
            },
            success: function(data){
                $("#tag9").html(data);
            }
        });
    }
    //获取tag
 /*   function gettaglist(catid) {
        if (catid != 0) {
            $.ajax({
                type: "get",
                url: "<?php /*echo url('table/gettaglist/table/archive');*/?>" + '&catid=' + catid,
                async: true,
                success: function (data) {
                    data = JSON.parse(data);
                    console.log(data);
                    var htmldata='<option value="0" selected="">请选择</option>';
                    for(var index=0;index<data.length;index++){
                        htmldata+='<option value="'+data[index]['tagname']+'">'+data[index]['tagname']+'</option>';
                    }
                    $("#tag_option").html(htmldata);
                }
            });
        }
    }*/
</script>


<!-- 商品字段选择 -->
<div class="modal fade" id="ShoppingType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo lang_admin("combined_commodity_type");?></h4>
            </div>
            <div class="modal-body">
                <forme>
                    <div id="columntype"></div>
                </forme>
            </div>
            <div class="modal-footer">
                <button type="button" id="closmode" class="btn btn-danger" data-dismiss="modal"><?php echo lang_admin("close");?></button>
                <button id="btn_pay" type="button" class="btn btn-primary"><?php echo lang_admin("sure");?></button>
            </div>
        </div>
    </div>
</div>
<!-- 添加tag  -->
<div class="modal fade" id="myTagModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="top:0;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo lang_admin("add_tag");?></h4>
            </div>
            <div class="modal-body" style="margin: 0px 35px 0px 35px;overflow:hidden;">
                <forme>
                    <div class="form-group">
                        <label style="font-size:14px;"><?php echo lang_admin("name");?></label>
                        <input type="text" name="add_tagnmae" id="add_tagnmae" value="" class="form-control" >
                    </div>
                </forme>
            </div>
            <div class="modal-footer">

                <button id="add_tag_submit"  type="button" class="btn btn-primary"><?php echo lang_admin("sure");?></button>
                <button type="button" name="closmode" class="btn btn-secondary" data-dismiss="modal"><?php echo lang_admin("close");?></button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        //弹出框确认键  添加tag
        $('#add_tag_submit').click(function () {
            var add_tagnmae=$("#add_tagnmae").val();
            if (add_tagnmae.length>0) {
                $.ajax({
                    type: "get",
                    url: "<?php echo url('table/getistag/table/archive');?>" + '&tagname=' + add_tagnmae,
                    async: false,
                    success: function (data) {
                        data = JSON.parse(data);
                        if(data.state){
                            alert(data.message);
                        }else{
                            var newtag=$("#tag").val()!=""?($("#tag").val()+','+add_tagnmae):add_tagnmae;
                            $("#tag").val(newtag);
                            //关闭弹出框
                            $("[name=closmode]").trigger("click");  //关闭弹出框
                        }
                    }
                });
            }
        });
    })
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
<script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo $base_url;?>/ueditor/addCustomizeButton.js"></script>
