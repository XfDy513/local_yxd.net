
<style type="text/css">

    .archive-list-side {
        display: block;
        position: absolute;
        left:0px;
        top:0px;
        bottom:0px;
        padding:0px ;
        border-right:1px solid #eee;
    }
    .archive-list-side-content {position: relative; height:460px; padding-right:30px;}
    .archive-list-side .table { }
    .archive-list-side .table td.manage {min-width:auto;color:#333;}
    .archive-list-side .table td.manage a {color:#333;}
    .archive-list-side .table td.manage .glyphicon {color:#00b7ee}
    .archive-list-side .table td a.child {float:none;display:inline-block; margin-left:0px; color:#ccc;}
    .archive-list-side .table td a.child:before {
        content: '\e258';
        font-family: "glyphicons halflings";
        font-size: 0.6rem;
        display: inline-block;
        position: absolute;
        right: 10px;
        top: 10px;
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        -ms-transform: rotate(0);
        -o-transform: rotate(0);
        transform: rotate(0);
        transition: -webkit-transform 0.2s ease-in-out;
    }
    .archive-list-side .table td a.checked:before {
        webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    @media(max-width:468px) {
        .archive-list {margin:0px;}
        .archive-list-side {width:100%; clear:both; position: inherit; }
        #listform {clear:both;}

    }


    input#search_title,input#ecoding_title { padding-right:29px; text-overflow: ellipsis;}

    #archive-list-side-btn i, #archive-list-side-close i {margin:17px 0px;}
    @media(max-width:1366px) {
        .htmldir {
            display: none;
        }
    }

    .archive-list-side-content-box, .outer-container {
        width: 100%;
        height: 460px;
    }

    .outer-container {
        position: relative;
        overflow: hidden;
    }


    .inner-container {
        position: absolute;
        left: 0;
        right:0;
        overflow-x: scroll;
        overflow-y: scroll;
    }

    .inner-container::-webkit-scrollbar {
        display: none;
    }



</style>
<!--子栏目展开状态-->
<script type="text/javascript">
    $(function(){
        $('.child').click(function(){
            $('.child').removeClass('checked');
            $(this).toggleClass('checked');
        });
    });
</script>




<div class="main-right-box">
    <h5><?php echo lang_admin('content_list');?></h5>
    <div class="blank20"></div>
    <div class="box" id="box">

        <div class="listform" style="position: relative;">
            <!-- 内容列表 -->
            <form name="listform" id="listform"  action="<?php echo uri();?>" method="post"  onsubmit="return returnform(this)">

                <!-- 内容列表 -->
                <div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 pull-right archive-list" id="archive-list">
                    <div class="row">

                    <div class="pull-right">
                        <?php if(chkpower('archive_check')) { ?>
                            <?php if ($shopping){?>

                                <input type="button" value="<?php echo lang_admin('modified_unit_price_for_input');?>" name="updateprice" onclick="var newprice = prompt ('<?php echo lang_admin('modified_unit_price_for_input');?>:','0'); if(getSelect(this.form) && newprice!=''){this.form.action='<?php echo modify('act/updateprice/catid/'.get('catid'),true);?>';this.form.batch.value=newprice;  returnform(this.form);}" class="btn btn-success pull-left"/>

                                &nbsp;<a href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo url::create('table/list/table/archive/needcheck/1/shopping/1');?>"  class="btn btn-gray" data-dataurlname="<?php echo lang_admin('unaudited_shopping');?>">
                                    <?php echo lang_admin('unaudited_shopping');?>
                                </a>&nbsp;
                            <?php  }else{ ?>
                                <a href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo url::create('table/list/table/archive/needcheck/1');?>"  class="btn btn-gray" data-dataurlname="<?php echo lang_admin('unaudited_content');?>">
                                    <?php echo lang_admin('unaudited_content');?>
                                </a>
                            <?php  } ?>
                        <?php } ?>
                        <?php if ($shopping){?>



                            <a href="#"  onclick="gotourl(this)"  data-dataurl='<?php echo url::modify("table/".get('table')."/deletestate/1/page/1/shopping/1",true);?>'  class="btn btn-gray" data-dataurlname="<?php echo lang_admin('recycle_bin');?>">
                                <?php echo lang_admin('recycle_bin');?>
                            </a>

                        <?php  }else{ ?>

                            <a href="#"  onclick="gotourl(this)"  data-dataurl='<?php echo url::modify("table/".get('table')."/deletestate/1/page/1",true);?>'  class="btn btn-gray" data-dataurlname="<?php echo lang_admin('recycle_bin');?>">
                                <?php echo lang_admin('recycle_bin');?>
                            </a>
                        <?php  } ?>
                    </div>

                    <div class="pull-left">
                        <?php if ($shopping){?>

                            <a href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo $base_url;?>/index.php?case=table&act=add&table=archive&shopping=1&admin_dir=<?php echo get('admin_dir');?>"  class="btn btn-info" data-dataurlname="<?php echo lang_admin('adding_shopping');?>">
                                <?php echo lang_admin('adding_shopping');?>
                            </a>
                        <?php  }else{ ?>
                            <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo $base_url;?>/index.php?case=table&act=add&table=archive&admin_dir=<?php echo get('admin_dir');?>"  class="btn btn-info" data-dataurlname="<?php echo lang_admin('adding_content');?>">
                                <?php echo lang_admin('adding_content');?>
                            </a>
                        <?php  } ?>
                    </div>

                    <div class="blank10"></div>
                    <div class="line"></div>
                    <div class="blank20"></div>

                    <select id="sorting"  onchange="setPX()" name="pxType" class="form-control select" style="display: inline; width:auto;">
                        <option value="0" ><?php echo lang_admin('modification_time_positive_order');?></option>
                        <option value="1" ><?php echo lang_admin('modification_time_reverse_order');?></option>
                        <option value="2"><?php echo lang_admin('add_time_positive_order');?></option>
                        <option value="3"><?php echo lang_admin('add_time_reverse_order_');?></option>
                        <option value="4"><?php echo lang_admin('browsing_volume_positive_order');?></option>
                        <option value="5"><?php echo lang_admin('browse_volume_reverse_order');?></option>
                        <option value="6"><?php echo lang_admin('by_serial_number_positive_order');?></option>
                        <option value="7"><?php echo lang_admin('number_in_reverse_order');?></option>
                        <option value="8"><?php echo lang_admin('by_id_positive_order');?></option>
                        <option value="9"><?php echo lang_admin('by_id_in_reverse_order');?></option>
                        <?php if ($shopping){?>
                            <option value="10"><?php echo lang_admin('by_salesnum_reverse_order');?></option>
                            <option value="11"><?php echo lang_admin('by_salesnum_in_reverse_order');?></option>
                        <?php  } ?>
                    </select>
                    <div class="blank10"></div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr class="th">
                                <th class="s_out text-center"><input title="<?php echo lang_admin('click_to_select_all_items_on_this_page');?>"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
                                <th class="sort text-center"><abbr title="<?php echo lang_admin('the_smaller_the_value_the_higher');?>"><?php echo lang_admin('sort');?></abbr></th>
                                <th class="catname"><!--title--><?php echo lang_admin('title');?></th>
                                <?php if ($shopping){?>
                                    <th class=""><?php echo lang_admin('stock');?></th>
                                <?php  } ?>
                                <th class="htmldir text-center"><!--view--><?php echo lang_admin('browse');?></th>
                                <th class="htmldir text-center"><!--adddate--><?php echo lang_admin('add_time');?></th>

                                <th class="htmldir text-center"><!--checked--><?php echo lang_admin('to_examine');?></th>

                                <th class="manage"><?php echo lang_admin('dosomething');?></th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php if(is_array($data))
                                foreach($data as $d) { ?>
                                    <tr>

                                        <td class="s_out text-center"><input onclick="c_chang(this)" type="checkbox" value="<?php echo $d[$primary_key];?>" name="select[]" class="checkbox" /> </td>
                                        <td class="sort text-center"><?php echo form::input("listorder[$d[$primary_key]]",$d['listorder'],'class="input_c"');?></td>
                                        <td align="left" class="catname"><?php echo cut($d['title']);?></td>

                                        <?php if ($shopping){?>
                                            <td><?php echo cut($d['inventory']);?></td>
                                        <?php  } ?>
                                        <td class="htmldir text-center"><?php echo cut($d['view']);?></td>
                                        <td class="htmldir text-center"><?php echo cut($d['adddate']);?></td>
                                        <td class="htmldir text-center"><?php echo helper::yes($d['checked']);?></td>
                                        <td class="manage">

                                            <?php if(chkpower('archive_check') || $d['checked']==0){?><a  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]/deletestate/".front::get('deletestate'));?>" title="<?php echo lang_admin('edit');?>" class="btn btn-gray" data-dataurlname="<?php echo lang_admin('edit_content');?>"><?php echo lang_admin('edit');?></a><?php } ?>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <?php echo lang_admin('more');?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href='<?php if($d['linkto']){echo $d['linkto'];}elseif(front::get('site')!='default'){echo config::get('site_url').'index.php?case=archive&act=show&aid='.$d[$primary_key];}else{echo url("archive/show/aid/$d[$primary_key]",false);}?>' target="_blank" title="<?php echo lang_admin('see');?>"><?php echo lang_admin('see');?></a></li>
                                                    <li><a  href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("/act/copy/table/$table/id/$d[$primary_key]");?>" title="<?php echo lang_admin('copy');?>" data-dataurlname="<?php echo lang_admin('copy_content');?>"><?php echo lang_admin('copy');?></a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a onclick="if(confirm('<?php echo lang_admin('deleted_to_the_recycle_bin');?>')){gotourl(this);}" href="#"  data-dataurl="<?php echo modify("/act/deletestate/table/$table/id/$d[$primary_key]/token/$token/catid/".get('catid'));?>" title="<?php echo lang_admin('deleted_to_the_recycle_bin');?>"><?php echo lang_admin('delete');?></a></li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                    </div>

                    <div class="blank10"></div>
                    <p style="color:#c0c0c0;"><i class="icon-info"></i> <?php echo lang_admin('the_smaller_the_value_the_higher');?></p>
                    <div class="blank10"></div>
<!--复制到其他语言-->
                        {if config::get('lang_open')=='1'}
                        <span class="pull-right">
                                 <input type="hidden" name="copylangcatid" value="">
                                 <input type="hidden" name="langurlname" value="">
                                    <select id="copytolang" name="copytolang" class="form-control select pull-left" style="display:inline-block;width:auto;margin-right:5px;">
                                        <option value="0" selected>{lang_admin('please_select_language')}</option>
                                        {loop getlang() $i $d}
                                        <option value="{$d['langurlname']}">{$d['langname']}</a></option>
                                        {/loop}
                                    </select>
                                    <input type="button" value="{lang_admin('copy')}"
                                           onclick="if(!getSelect(this.form)){alert('{lang_admin('please_choose')}{lang_admin('content')}');}else{if($('#copytolang').val()==0){alert('{lang_admin('please_select_language')}');}else{this.form.action='<?php echo url('table/batch/table/'.$table,true);?>'; this.form.batch.value='copytolang';this.form.langurlname.value=$('#copytolang').val(); get_copylang($('#copytolang').val());  $('#mycopyModal').modal('show');/*returnform(this.form);*/}}" class="btn btn-default pull-left">
                            </span>
{/if}
                    <input type="hidden" name="batch" value="">
                    <?php  if(!front::get('deletestate') && chkpower('archive_check')) {?>
                        <input  class="btn btn-gray" type="button" value=" <?php echo lang_admin('sort');?> " name="order" onclick="this.form.action='<?php echo modify('act/batch/catid/'.get('catid'),true);?>'; this.form.batch.value='listorder'; returnform(this.form)"/>



                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo lang_admin('to_examine');?> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-del">


                                <?php  if(!front::get('deletestate') && chkpower('archive_check')) {?>
                                    <li>
                                        <input type="button" value=" <?php echo lang_admin('to_examine');?> " name="check" onclick="if(getSelect(this.form)  && confirm('<?php echo lang_admin('are_audits_confirmed');?>')){ this.form.action='<?php echo modify('act/batch/catid/'.get('catid'),true);?>';this.form.batch.value='check';returnform(this.form);}" class="btn btn-default" />
                                    </li>
                                <?php } ?>

                                <?php  if(!front::get('deletestate') && chkpower('archive_check')) {?>
                                    <li>
                                        <input type="button" value=" <?php echo lang_admin('cancellation_of_audit');?> " name="check" onclick="if(getSelect(this.form)  && confirm('<?php echo lang_admin('are_you_sure_to_cancel_the_audit');?>')){ this.form.action='<?php echo modify('act/batch/catid/'.get('catid'),true);?>';this.form.batch.value='nocheck';returnform(this.form);}" class="btn btn-default" />
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                    <?php } ?>

                    <?php if(chkpower('archive_del')){ ?>

                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo lang_admin('delete');?> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-del">
                            <li>
                                <?php if(!front::get('deletestate')) {?>
                                    <input type="button" value="<?php echo lang_admin('deleted_to_the_recycle_bin');?>" name="delete" onclick="if(getSelect(this.form) && confirm('<?php echo lang_admin('deleted_to_the_recycle_bin');?>')){this.form.action='<?php echo modify('act/batch/catid/'.get('catid'),true);?>'; this.form.batch.value='deletestate'; returnform(this.form);}" />
                                <?php } ?>
                            </li>
                            <li>
                                <input type="button" value="<?php if(get('table')=='archive') {?><?php echo lang_admin('thorough_del');?><?php } ?>" name="delete" onclick="if(getSelect(this.form) && confirm('<?php echo lang_admin('are_you_sure_you_want_to_delete_it');?>')){this.form.action='<?php echo modify('act/batch/catid/'.get('catid'),true);?>'; this.form.batch.value='delete'; returnform(this.form);}" />
                            </li>
                        </ul>
                        <?php } ?>
                    </div>

                    <?php if(get('table')=='archive' && front::get('deletestate')) {?>
                        <div class="btn-group dropup">
                            <input type="button" value=" <?php echo lang_admin('reduction');?> " name="restore" onclick="if(getSelect(this.form) && confirm('<?php echo lang_admin('are_you_sure_about_reduction');?>')){this.form.action='<?php echo modify('act/batch/catid/'.get('catid'),true);?>'; this.form.batch.value='restore';  returnform(this.form);}" class="btn btn-gray" />
                        </div>
                    <?php } ?>



                    <!-- 多选 -->
                    <style type="text/css">
                        .blank30-1450 {display:none; }
                        .multiple-selection {float:right;}
                        @media(max-width:1450px) {
                            .blank30-1450 {
                                display: block; claer:both; height:10px;
                            }
                            .multiple-selection {float:left;}
                        }
                        .multiple-selection select {margin-bottom:10px;}
                    </style>
                    <div class="blank30-1450"></div>

                    <script type="text/javascript">
                        <!--
                        $("#specialid option:eq(0)").text("<?php echo lang_admin('multiple_choices_to_join_the_theme');?>");

                        $("#typeid option:eq(0)").text("<?php echo lang_admin('multiple_choices_to_join_the_type');?>");

                        $("#catid option:eq(0)").text("<?php echo lang_admin('multiple_selection_move_to_column');?>");

                        $("#attr1 option:eq(0)").text(" <?php echo lang_admin('setting_recommendation_bits_by_multiple_choices');?>");

                        //-->
                    </script>

                    <div class="form-inline multiple-selection">
                        <div class="form-group">

                            <?php  if(!front::get('deletestate') && chkpower('archive_check')) {?>

                                <?php
                                $option="onchange=\"if(getSelect(this.form)  && confirm('".lang_admin('are_you_sure_you_want_to_join_us')."')){ this.form.action='".modify('act/setspecial/catid/'.get('catid'),true)."';this.form.batch.value='setspecial';returnform(this.form);}\"";
                                echo form::select('specialid',0,special::getoption(),$option);?>

                                <?php
                                $option="onchange=\"if(getSelect(this.form)  && confirm('".lang_admin('are_you_sure_you_want_to_join_us')."')){ this.form.action='".modify('act/settype/catid/'.get('catid'),true)."';this.form.batch.value='settype';returnform(this.form);}\"";
                                echo form::select('typeid',0,type::getoption(),$option); ?>

                                <?php
                                $option="onchange=\"if(getSelect(this.form)  && confirm('".lang_admin('are_you_sure_you_want_to_move')."')){this.form.action='". modify('act/batch/catid/'.get('catid'),true)."';this.form.batch.value='movelist';returnform(this.form);}\"";
                                if ($shopping) {
                                    echo form::select('catid', 0, category::getoptionshopping(), $option);
                                }else{
                                    echo form::select('catid', 0, category::getoptionconnent(), $option);
                                }
                                ?>



                                <?php if(chkpower('archive_setting')){?>

                                    <?php
                                    preg_match_all('/\(([\d\w]+)\)(\S+)/im', $settings['attr1'], $result, PREG_SET_ORDER);
                                    foreach($result as $val){
                                        $result[$val['1']]=$val['2'];
                                    }
                                    $result['0']=lang_admin('please_choose').' ...';
                                    $option="onchange=\"if(getSelect(this.form)  && confirm('".lang_admin('are_you_sure_about_the_settings')."')){ this.form.action='".modify('act/batch/catid/'.get('catid'),true)."';this.form.batch.value='recommend';returnform(this.form);}\"";
                                    echo form::select('attr1',0,$result,$option);
                                    ?>

                                <?php } ?>

                            <?php } ?>
                            <!-- 多选结束 -->


                        </div>
                    </div>

                    <div class="blank20"></div>
                    <div class="line"></div>

                    <div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?></div>

                    <div class="clearfix blank30"></div>
                    </div>
                </div>
            </form>

            <!-- 内容列表侧边栏 -->
            <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 pull-left archive-list-side" id="archive-list-side">

                <div class="archive-list-side-content">
                    <div class="outer-container">
                        <div class="inner-container">
                            <div class="archive-list-side-content-box">
                                <form name="searchform" id="searchform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this)">


                                    <a class="search-criteria-btn" style="text-decoration:underline;"><i class="icon-info"></i> <?php echo lang_admin('search_criteria');?></a>
                                    <div class="search-criteria" style="display:none;">
                                        <div class="blank10"></div>
                                        <?php echo lang_admin('column');?>：
                                        <?php
                                        if ($shopping) {
                                            echo form::select('search_catid',get('search_catid')?get('search_catid'):0,category::getoptionshopping());
                                        }else{
                                            echo form::select('search_catid',get('search_catid')?get('search_catid'):0,category::getoptionconnent());
                                        }
                                        ?>
                                        <div class="blank10"></div>
                                        <?php echo lang_admin('type');?>：
                                        <?php echo form::select('search_typeid',get('search_typeid')?get('search_typeid'):0,type::getoption()); ?>

                                        <div class="blank10"></div>
                                        <?php echo lang_admin('special');?>：
                                        <?php echo form::select('search_spid',get('search_spid')?get('search_spid'):0,special::getoption()); ?>
                                        <div class="blank10"></div>
                                        <?php echo lang_admin('author');?>：
                                        <?php echo form::select('search_userid',get('search_userid')?get('search_userid'):0,user::option()); ?>
                                        <div class="blank10"></div>
                                    </div>
                                    <div class="blank10"></div>
                                    <div class="backstage-search">
                                        <input type="text" class="form-control" name="search_title" id="search_title" placeholder="<?php echo lang_admin('please_fill_in_the_title');?>" value="" />
                                        <input type="hidden" name="search_static" value="1">
                                        <button type="submit" class="btn btn-default search-btn" name="search_static" onclick="this.form.action='<?php if($shopping){ echo url::modify('table/'.get('table').'/type/search/shopping/1',true); }else{ echo url::modify('table/'.get('table').'/type/search',true);}?>'" >
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>

                                </form>

                                <?php if ($shopping){?>
                                    <?php if(config::getadmin('isecoding')=='1') { ?>
                                        <div class="blank10"></div>
                                        <div class="backstage-search">
                                            <form name='search' action="<?php echo uri(); ?>" onsubmit="return returnform(this)" method="post">
                                                <input type="text" name="ecoding_title" id="ecoding_title" value="" placeholder="<?php echo lang_admin('security_code_search');?>" class="form-control" />
                                                <input type="hidden" name="search_static" value="1">
                                                <button type="submit" class="btn btn-default search-btn" name="submit" onclick="this.form.action='<?php if($shopping){ echo url::modify('table/'.get('table').'/type/search/shopping/1',true); }else{ echo url::modify('table/'.get('table').'/type/search',true);}?>'" >
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>

                                            </form>
                                        </div>
                                    <?php } ?>
                                <?php  } ?>
                                <div class="blank30"></div>
                                <div class="btn btn-default">
                                    <?php echo lang_admin('by_column_manage');?>
                                </div>

                                <div class="blank10"></div>

                                <form name="leftlistform" id="leftlistform"  action="<?php echo uri();?>" method="post">
                                    <?php
                                    if ($shopping) {
                                        $data = category::catshoppingcategorydata();
                                    }else{
                                        $data =  category::catconnentcategorydata();
                                    }
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody id="listtable">
                                            <?php if(is_array($data))
                                                foreach($data as $d) { ?>
                                                    <tr onmouseover="m_over(this)" onmouseout="m_out(this)" lang="<?php echo $d['level'];?>" <?php if($d['level']>0) { ?>style="display:none"<?php } ?>>
                                                        <td class="catname">
                                                            <?php if($d['isshopping']){ ?>
                                                            <a href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo modify("/act/list/table/archive/catid/".$d['catid']."/shopping/1");?>" title="<?php echo lang_admin('administration');?>">
                                                                <?php }else{ ?>
                                                                <a href="#"  onclick="gotourl(this)"  data-dataurl="<?php echo modify("/act/list/table/archive/catid/".$d['catid']);?>" title="<?php echo lang_admin('administration');?>">
                                                                    <?php } ?>
                                                                    <?php echo $d['catname'];?>
                                                                </a>
                                                                <?php if(category::hasson($d['catid'])) { ?>
                                                                    <a onclick="child(this)" title="<?php echo lang_admin('click_to_expand_and_close');?>" class="child"></a>
                                                                <?php } ?>
                                                                <br>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>

                                <div class="blank10"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blank10"></div>
    </div>
    <div class="clearfix"></div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $(".search-criteria-btn").click(function(){
            $(".search-criteria").toggle(500);
        });
    });
</script>

<!-- 复制框Modal -->
<div class="modal fade" id="mycopyModal" tabindex="-1" role="dialog" aria-labelledby="mycopyModal" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo lang_admin('copy');?></h4>
            </div>
            <div class="modal-body" style="margin: 0px 35px 0px 35px;overflow:hidden;">

                <label style="font-size:14px;"><?php echo lang_admin("please_select_the_column");?></label>
                <select id="copytolang_catid" name="copytolang_catid" class="form-control select">
                    <option value="0" selected>{lang_admin('please_select_language')}</option>
                </select>

                <div class="blank20"></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="archive_copy"  name="archive_copy" class="btn btn-primary"><?php echo lang_admin('copy');?></button>
                <button type="button" id="closmode" name="app_clos" class="btn btn-secondary" data-dismiss="modal"><?php echo lang_admin("close");?></button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(function () {
        //选中
        $("#sorting option[value='<?php echo $sorting;?>']").prop("selected",true);
    });
    function setPX() {
        var path= '<?php if($shopping){ echo modify("act/list/table/archive/shopping/1/catid/".get('catid')); }else{ echo modify("act/list/table/archive/catid/".get('catid')); }  ?>&sorting='+$("#sorting").val();
        gotoinurl(path);
    }
    function  setForm() {
        var action=$("#searchform").attr("action")+'&sorting='+$("#sorting").val();
        $("#searchform").attr("action",action);
    }

    //复制框加载 下拉栏目
    function get_copylang(langurlname) {
        var shopping=0;
        <?php if ($shopping){?>
              shopping=1;
        <?php  } ?>
        $.ajax({
            url: '<?php echo url('table/getcopylangcatory/table/archive/aid/'.$data['aid'],true);?>&langurlname='+langurlname+"&shopping="+shopping,
            type: 'GET',
            dataType: 'text',
            timeout: 10000,
            success: function(data){
                var codedata=JSON.parse(data);
                $("#copytolang_catid").html(codedata);
                /* $("#tag7").html(codedata[1]);*/
            }
        });
    }

    $(function () {
        //复制
        $('[name="archive_copy"]').click(function(){
            var copytolang_catid = $('#copytolang_catid').val() ;
            if (copytolang_catid==0){
                alert('{lang_admin("please_select_the_column")}');
            }else{
                //复制
                $("[name=copylangcatid]").val(copytolang_catid);
                $('#mycopyModal').modal('hide');
                $(".modal-backdrop.fade").hide();
                returnform($('#listform'));
            }
        })

        ;
    });
</script>


