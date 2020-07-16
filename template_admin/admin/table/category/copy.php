
<style type="text/css">
    @media(max-width:468px) {
        input#title {width:100%;}
        .edit-category .text-left {margin:0px; padding:0px 5px;}
    }
    span.hotspot {float:right; padding-left:10px;}
</style>

<div class="main-right-box">

    <div class="box edit-category" id="box">


        <form method="post" name="form1" action="<?php $id=''; echo modify("/act/add/table/".$table.$id);?>"  onsubmit="return returnform(this);">
            <input type="hidden" name="onlymodify" value=""/>

            <h5>
                {lang_admin('copy_column')}
                <!--工具栏-->
                <div class="content-eidt-nav pull-right">
                    <a id="fullscreen-btn" class="btn btn-default">
                        <i class="icon-frame"></i>
                        {lang_admin('container_fluid')}
                    </a>

                    <span class="pull-right">
                    <div class="btn-group">
                        <select id="isnav" name="isnav" class="form-control select isnav">
                            <option value="1" selected="">{lang_admin('show')}</option>
                            <option value="0">{lang_admin('no_show')}</option>
                        </select>
                    </div>
                    <div class="btn-group">
                        <select id="isshow" name="checked" class="form-control select checked">
                            <option value="1" selected="">
                                {lang_admin('to_examine')}
                            </option>
                            <option value="0">
                                {lang_admin('cancellation_of_audit')}
                            </option>
                        </select>
                    </div>


                    <input  name="submit" value="1" type="hidden">
                        <button class="btn btn-success" type="submit" onclick="mysave()">
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

            <div class="row" style="display: none;">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('copy_mode')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                    <input name="addtype" value="single"  type="radio" checked="checked" onclick="stob(this.value)" />
                    {lang_admin('single_copy')}
                </div>
            </div>

            <?php if($shopping){
                $data['catidshopping']=$data['parentid'];  ?>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subordinate_columns')}</div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-10 text-left">{form::getform('catidshopping',$form,$field,$data)}<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_its_a_first_level_column_you_dont_need_to_choose_it')}"></span>
                    </div>
                </div>

            <?php }else{ ?>
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subordinate_columns')}</div>
                    <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">{form::getform('parentid',$form,$field,$data)}<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_its_a_first_level_column_you_dont_need_to_choose_it')}"></span>
                    </div>
                </div>
            <?php } ?>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><span class="icon-note"></span>&nbsp;{lang_admin('name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">{form::getform('catname',$form,$field,$data,'class="form-control"')}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('please_fill_in_the_column_name')}"></span>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subtitle')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">{form::getform('subtitle',$form,$field,$data,'class="form-control"')}
                    <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('column_custom_subtitle')}"></span>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('catalog_name')}</div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left"><input type="text" name="htmldir" id="htmldir" value="{$data['htmldir']}" class="form-control" onkeyup="value=value.replace(/[^0-9a-zA-Z-]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" /> <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('catalogues_must_be_english_names_if_left_blank_the_pinyin_names_will_be_used_automatically_do_not_mix_symbols')}"></span>
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
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-10 text-left">
                    <ul class="nav nav-tabs content-nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tag1" aria-controls="#tag1" role="tab" data-toggle="tab">{lang_admin('information')}</a></li>
                        <li role="presentation"><a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab">SEO</a></li>
                        <li role="presentation"><a href="#tag3" aria-controls="#tag4" role="tab" data-toggle="tab">{lang_admin('extend')}</a></li>
                        <li role="presentation"><a href="#tag4" aria-controls="#tag4" role="tab" data-toggle="tab">{lang_admin('jurisdiction')}</a></li>
                        <li role="presentation"><a href="#tag5" aria-controls="#tag5" role="tab" data-toggle="tab">{lang_admin('custom')}</a></li>
                        <li role="presentation"><a href="#tag6" aria-controls="#tag6" role="tab" data-toggle="tab">{lang_admin('field')}</a></li>

                    </ul>
                </div>
            </div>
            <div class="clearfix blank20"></div>

            <div class="tab-content">


                <!-- 信息 -->
                <div role="tabpanel" class="tab-pane active" id="tag1">

                </div>

                <!-- SEO -->
                <div role="tabpanel" class="tab-pane" id="tag2">

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('page_title')}
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('meta_title',$form,$field,$data,'class="form-control"')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('it_can_fill_in_keywords_different_from_content_names_which_is_beneficial_to_search_optimization')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                            <span class="icon-note"></span>&nbsp;{lang_admin('key_word')}
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('keyword',$form,$field,$data,'class="form-control"')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('the_keywords_information_in_meta_information_can_be_filled_in_the_keywords_related_to_the_content_separated_by_commas_in_english_which_is_conducive_to_search_optimization')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                            <span class="icon-note"></span>&nbsp;{lang_admin('page_description')}
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('description',$form,$field,$data,'')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('description_information_in_meta_information_can_fill_in_content_related_profiles_which_is_conducive_to_search_optimization')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">HTML</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('ishtml',$form,$field,$data)}
                            <p class="tips-p">{lang_admin('when_html_is_generated_by_separate_settings_columns_in_dynamic_and_static_settings_must_be_selected_as_specified_and_columns_in_dynamic_and_static_generation_need_to_generate_html')}</p>
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('select_whether_the_column_is_static_such_as_setting_the_browse_and_download_permissions_must_be_dynamic_the_default_is_to_inherit_the_static_and_dynamic_settings_of_the_website')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            <div class="alert alert-warning alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <span class="glyphicon glyphicon-warning-sign"></span>	<strong>URL</strong> 	[{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}]


                            </div>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                            {lang_admin('list_url')}
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <!--<input name="htmlrule1" type="text" class="form-control" value="{$data['htmlrule']}" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>
                            <div class="clearfix blank20"></div>-->
                            {form::getform('htmlrule',$form,$field,$data,'')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                            {lang_admin('sublist_url')}
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">
                           <!-- <input name="listhtmlrule1" type="text" class="form-control" value="{$data['listhtmlrule']}" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>
                            <div class="clearfix blank20"></div>-->
                            {form::getform('listhtmlrule',$form,$field,$data,'')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"> </span></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('content_url')}
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                          <!--  <input name="showhtmlrule1" type="text" class="form-control" value="{$data['showhtmlrule']}" />
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span></span>
                            <div class="clearfix blank20"></div>-->
                            {form::getform('showhtmlrule',$form,$field,$data,'class=""')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('if_you_are_not_familiar_with_the_operation_please_do_not_modify_the_following_options')}"></span>
                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                </div>


                <!-- 扩展 -->
                <div role="tabpanel" class="tab-pane" id="tag3">



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('sort')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('listorder',$form,$field,$data,'class="form-control"')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('column_sorting')}" onmouseout="tooltip.hide();">
</span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('column_pictures')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('image',$form,$field,$data)}

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('news_coverage')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                        </div>
                        <div class="blank10"></div>
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 text-left">
                            {form::getform('categorycontent',$form,$field,$data)}
                            <p><i class="icon-info"></i> {lang_admin('if_you_use_the_settings_section_cover_please_select_the_list_page_html_template_for_this_section_at_the_template')}</p>

                        </div>
                    </div>

                    <div class="clearfix blank20"></div>
                    <style type="text/css">
                        #categorycontent {min-height:500px;}
                        @media(max-width:468px) {
                            #categorycontent {min-height:300px;}
                            #categorycontent #edui1 {width:100%;}
                        }
                    </style>


                </div>

                <!-- 权限 -->
                <div role="tabpanel" class="tab-pane" id="tag4">


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('read_menoy')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            {form::getform('readmenoy',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('read_menoy')}"></span>


                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('domw_menoy')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">


                            {form::getform('domwmenoy',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('domw_menoy')}"></span>


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
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('jurisdiction')}</div>
                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-5 text-left">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="th">
                                        <th>{lang_admin('user_group')}</th>
                                        <th class="text-center">{lang_admin('browse')}</th>
                                        <th class="text-center">{lang_admin('download')}</th>
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
                                <div class="blank30"></div>
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <span class="glyphicon glyphicon-warning-sign"></span>	 {lang_admin('check_to_prohibit_browsing_or_downloading_for_this_user_group')}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 自定义 -->
                <div role="tabpanel" class="tab-pane" id="tag5">



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('mobile_navigation')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('ismobilenav',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('is_it_displayed_in_navigation')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <?php if($shopping){ ?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('commodity_template')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                <?php $data['templateshopping']=$data['template'];?>
                                {form::getform('templateshopping',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('the_template_style_used_in_the_current_column')}" onmouseout="tooltip.hide();"></span>

                            </div>
                        </div>

                    <?php }else{ ?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('column_template')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                {form::getform('template',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('the_template_style_used_in_the_current_column')}" onmouseout="tooltip.hide();"></span>

                            </div>
                        </div>

                    <?php }?>
                    <div class="clearfix blank20"></div>

                    <?php if($shopping){
                        $data['listshoppingtemplate']=$data['listtemplate'];
                        $data['showshoppingtemplate']=$data['showtemplate'];?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('sublist')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                {form::getform('listshoppingtemplate',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('subordinate_columns_of_the_column_apply_template_style')}" onmouseout="tooltip.hide();"></span>

                            </div>
                        </div>
                        <div class="clearfix blank20"></div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('commodity_content')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                {form::getform('showshoppingtemplate',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('column_subordinate_content_page_template_style')}" onmouseout="tooltip.hide();"></span>

                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('sublist')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                {form::getform('listtemplate',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('subordinate_columns_of_the_column_apply_template_style')}" onmouseout="tooltip.hide();"></span>

                            </div>
                        </div>
                        <div class="clearfix blank20"></div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('content')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                {form::getform('showtemplate',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('column_subordinate_content_page_template_style')}" onmouseout="tooltip.hide();"></span>

                            </div>
                        </div>
                    <?php }?>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('content_sorting')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('contentrank',$form,$field,$data)}

                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('column_subordinate_content_ranking')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('wap_template')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('templatewap',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('after_enabling_the_independent_mobile_version_template_the_current_column_template_style')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('wap_sublistwap')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('listtemplatewap',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('after_enabling_the_independent_mobile_version_template_the_subordinate_subcolumn_template_style')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('wap_content')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('showtemplatewap',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('after_enabling_the_independent_mobile_version_template_the_template_style_of_the_subordinate_content_page')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>



                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('new_window_opens')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('isblank',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('is_it_open_in_the_new_window')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('link_property_settings')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('nofollow',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('whether_link_properties_are_enabled')}"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <?php if(session::get('ver') == 'corp'){ ?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('screening_or_not')}</div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                {form::getform('isscreening',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('whether_to_join_the_screening')}"></span>

                            </div>
                        </div>
                        <div class="clearfix blank20"></div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('binding_forms')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('showform',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('does_the_content_page_bind_the_form')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>


                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('paging')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            <td>{form::getform('ispages',$form,$field,$data)}
                                <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('select_whether_the_column_is_paginated')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('paging_value')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('attr3',$form,$field,$data,'class="input_c"')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('leave_blank_to_display_according_to_the_number_of_global_settings')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('anti_counterfeiting_code_prefix')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('ecoding',$form,$field,$data,'class="form-control"')}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('set_anti_counterfeiting_code_prefix')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('subcontent')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('includecatarchives',$form,$field,$data)}
                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('select_whether_the_column_list_contains_the_contents_of_the_subordinate_columns')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('jump')}</div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                            {form::getform('linkto',$form,$field,$data,'class="form-control"')}

                            <span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('after_filling_in_the_external_link_address__the_access_column_will_jump_to_the_completed_address')}" onmouseout="tooltip.hide();"></span>

                        </div>
                    </div>
                    <div class="clearfix blank20"></div>

                    <?php if($shopping){ ?>
                        <input type="hidden" name="isshopping" id="isshopping" value="1" />
                    <?php }else{ ?>
                        <input type="hidden" name="isshopping" id="isshopping" value="0" />
                    <?php } ?>

                    <script type="text/javascript">
                        //{lang_admin('preservation')}
                        function mysave() {
                            if ('{$shopping}') {
                                $('#parentid').val($('#catidshopping').val());
                            }
                        }
                    </script>



                </div>


                <!-- 字段 -->
                <div role="tabpanel" class="tab-pane" id="tag6">
                    {loop $field $f}
                    <?php
                    $name=$f['name'];
                    if (!preg_match('/^my_/', $name) || preg_match('/^my_field/', $name)) {
                        unset($field[$name]);
                        continue;
                    }
                    $category = category::getInstance();
                    $sonids = $category->sons(setting::$var['archive'][$name]['catid']);
                    if(setting::$var['archive'][$name]['catid'] != $data['catid'] && !in_array($data['catid'],$sonids)
                        && (setting::$var['archive'][$name]['catid'])){
                        unset($field[$name]);
                        continue;
                    }
                    if (!isset($data[$name]))
                        $data[$name]='';

                    ?>
                    <?php if( ((setting::$var['category'][$name]['isshoping'] == '0')|| (setting::$var['category'][$name]['isshoping'] == '')) ){?>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php
                                $newcname='cname_'.lang::getisadmin();
                                echo setting::$var['category'][$name][$newcname];
                                $newselect='select_'.lang::getisadmin();
                                $form[$name]['select']=setting::$var['category'][$name][$newselect];
                                ?></div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">

                                <?php echo"<style>div#$name.edui-default {width:100%;min-height:500px;}@media(max-width:468px) {div#$name.edui-default {width:100%;min-height:300px;}}</style>";?>
                                <?php echo form::getform($name,$form, $field, $data); ?>
                            </div>

                        </div>
                        <div class="clearfix blank20"></div>
                    <?php }?>
                    {/loop}


                </div>

            </div>


            <div class="blank30"></div>
            <div class="line"></div>
            <div class="blank30"></div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-5 text-left">
                    <input  name="submit" value="1" type="hidden">
                    <input type="submit"  value=" {lang_admin('submitted')} "  onclick="mysave();"   class="btn btn-primary btn-lg" />
                </div>
            </div>
        </form>
        <div class="blank30"></div>
    </div>
</div>


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



<!-- 上传 -->
<script type="text/javascript" src="{$base_url}/common/js/ajaxfileupload/ajaxfileupload.js"></script>
<script type="text/javascript" src="{$base_url}/common/js/ajaxfileupload/ThumbAjaxFileUpload.js"></script>
<script type="text/javascript" src="{$base_url}/common/js/upimg/dialog.js"></script>
<link href="{$skin_admin_path}/css/dialog.css" rel="stylesheet" type="text/css" />

<!-- 上传框 -->
<script src="{$base_url}/common/plugins/fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="{$base_url}/common/plugins/fileinput/js/locales/zh.js" type="text/javascript"></script>
<link href="{$base_url}/common/plugins/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css">

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
