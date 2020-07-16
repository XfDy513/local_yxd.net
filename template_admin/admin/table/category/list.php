
<style type="text/css">
    .table tr.th {border-top:1px solid #eee;}
    .table tr td.catname {position: relative; }
    .indent {float:left; padding: 6px 5px; border:none;background:none;}
    .table tr td.catname a.child {float:left; width:36px; height:36px;line-height:36px; cursor:pointer;  text-align:center;  z-index:2;}
    .table tr td.catname a.child i {width:36px; height:36px;line-height: 36px; color:#ccc;}
    .table tr td.catname .input-group .form-control {width:auto; right:0px;}
.category-list-shopping-icon {display:inline-block; line-height: 32px;
    padding: 0px 15px; border-radius: 3px; background:#f5f5f5;}
    @media(max-width:1366px) {
        .htmldir {
            display: none;
        }
    }
</style>

<div class="main-right-box">
    <h5>{lang_admin('column_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">
        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
            <?php
            $data=category::getgetcategorydata();
            ?>
            <!--改变的或者新增的栏目序号-->
            <input type="hidden" id="cahngenum" name="cahngenum" value=""/>
            <!--改变的或者新增的栏目序号-->

            <span class="pull-right">
        <a class="openall btn btn-default" onclick="$('[name=\'leveldiv\']').removeAttr('style');$('.classall').show();$('.openall').hide();">{lang_admin('expand_all_sub_columns')}</a>
        <a class="classall btn btn-default" onclick="$('[name=\'leveldiv\']').attr('style','display:none');$('.openall').show();$('.classall').hide();" style="display: none">{lang_admin('close_all_sub_columns')}</a>
    </span>

            <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                    {lang_admin('add_to')}
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation">
                        <a role="menuitem"  tabindex="-1" href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url("table/add/table/$table");?>" data-dataurlname="{lang_admin('add_content_column')}">{lang_admin('add_content_column')}</a>
                    </li>
                    <?php if(session::get('ver') == 'corp'){ ?>
                    <li role="presentation">
                        <a role="menuitem" tabindex="-1" href="#" onclick="gotourl(this)"   data-dataurl="<?php echo url("table/add/table/$table/shopping/1");?>" data-dataurlname="{lang_admin('add_commodity_column')}">{lang_admin('add_commodity_column')}</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="blank30"></div>
            <!-- 栏目列表 -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall"> </th>
                        <th class="sort text-center"><abbr title="{lang_admin('the_smaller_the_value_the_higher')}">{lang_admin('sort')}</abbr></th>
                        <!--<th class="sort">{lang_admin('id')}</th>-->
                        <th class="catname"><a class="openall" onclick="$('[name=\'leveldiv\']').removeAttr('style');$('.classall').show();$('.openall').hide();">{lang_admin('unfold')}</a>
                            <a class="classall" onclick="$('[name=\'leveldiv\']').attr('style','display:none');$('.openall').show();$('.classall').hide();" style="display: none">{lang_admin('close')}</a></th>
                        <th class="htmldir"><!--htmldir-->{lang_admin('catalog_name')}</th>
                        <th class="isnav text-center"><!--isnav-->{lang_admin('navigation')}</th>
                        <th class="htmldir text-center">
{lang_admin('modular')}
                        </th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>
                    </thead>
                    <tbody id="listtable">
                    <?php
                         $token=Phpox_token::grante_token('table_del');
                         echo category::gethtmlcategorydata_new(category::getcategorydata_new(),false,0,$token);
                      ?>
                    </tbody>
                </table>
                <div class="line"></div>
                <div class="blank10"></div>
                <p style="color:#c0c0c0;"><i class="icon-info"></i> {lang_admin('the_smaller_the_value_the_higher')}</p>
                <div class="clearfix"></div>
                {if config::get('lang_open')=='1'}
            <span class="pull-right">
                <input type="hidden" name="iscopysubcolumn" value="0">
                <input type="hidden" name="iscopycontent" value="0">
                <input type="hidden" name="langurlname" value="">
                <select id="copytolang" name="copytolang" class="form-control select pull-left" style="display:inline-block;width:auto;margin-right:5px;">
                    <option value="0" selected>{lang_admin('please_select_language')}</option>
                    {loop getlang() $i $d}
                    <option value="{$d['langurlname']}">{$d['langname']}</a></option>
                    {/loop}
                </select>
                <input type="button" value="{lang_admin('copy')}"
           onclick="if(!getSelect(this.form)){alert('{lang_admin('please_select_the_column')}');}else{if($('#copytolang').val()==0){alert('{lang_admin('please_select_language')}');}else{this.form.action='<?php echo url('table/batch/table/'.$table,true);?>'; this.form.batch.value='copytolang';this.form.langurlname.value=$('#copytolang').val();  $('#mycopyModal').modal('show');}}" class="btn btn-default pull-left">
            </span>
                {/if}
                <div class="form-inline">
                    <div class="form-group">
                        <input type="hidden" name="inedx" id="index" value="{category::maxid_new()}">
                        <input type="button"   value="{lang_admin('preservation')}" name="preservation" onclick=" this.form.action='<?php echo url("table/newadd/table/$table");?>';this.form.batch.value='newadd'; returnform(this.form);" class="btn btn-gray"/>

                        <input type="hidden" name="batch" value="">
                        <input type="button" value="{lang_admin('delete')}" name="delete"
                               onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo url('table/batch/table/'.$table,true);?>'; this.form.batch.value='delete'; returnform(this.form);}" class="btn btn-gray"/>

                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                                {lang_admin('add_to')}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation">
                                    <a role="menuitem" id="add_content_column" tabindex="-1" href="#">{lang_admin('add_content_column')}</a>
                                </li>
                                <?php if(session::get('ver') == 'corp'){ ?>
                                <li role="presentation">
                                    <a role="menuitem" id="add_commodity_column" tabindex="-1" href="#">{lang_admin('add_commodity_column')}</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>


                        <script type="text/javascript">
                            <!--

                            $("#catid option:eq(0)").text("{lang_admin('multiple_selection_move_to_column')}");

                            //-->
                        </script>

                        <?php
                        $option="onchange=\"if(getSelect(this.form) && confirm('".lang_admin('do_move_id_to')."('+getSelect(this.form)+')".lang_admin('do_you_have_a_column')."')){this.form.action='".url('table/batch/table/'.$table,true)."'; this.form.batch.value='move'; returnform(this.form);}\"";
                        echo form::select('catid',0,category::getoption(),$option);
                        ?>

                    </div>
                </div>
            </div>

        </form>

        <div class="blank30"></div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#add_content_column').click(function() {
            //新增内容栏目
            addcatrgoty(0);
        });
        $('#add_commodity_column').click(function() {
            //新增商品栏目
            addcatrgoty(1);
        });

        //复制框
        $('[name="catrgoty_copy"]').click(function(){
            //复制
            $("[name=iscopysubcolumn]").val($('#is_copy_subcolumn').val());
            $("[name=iscopycontent]").val($('#is_copy_content').val());
            $('#mycopyModal').modal('hide');
            $(".modal-backdrop.fade").hide();
            returnform($('#listform'));
        })
    });

    //记录修改或者新增的序号
    function setchange(num){
        var cahngenum=$("#cahngenum").val();
        if(cahngenum!=""){
            cahngenum=cahngenum+","+num;
        }else{
            cahngenum=num;
        }
        $("#cahngenum").val(cahngenum);
    }


    //新增
    function addcatrgoty(isshoopping){
        var index=$("#index").val();
        index=parseInt(index)+1;
        var htmldata="<tr>";
        htmldata+='<input type="hidden" id="isshopping'+index+'" name="isshopping'+index+'" value="'+isshoopping+'" >';
        htmldata+='<td class="s_out"><input  type="checkbox" value=""  disabled> </td>';
        htmldata+='<td class="sort"><input type="text"  onchange="setchange(\''+index+'\');"  name="listorder'+index+'" id="listorder'+index+'" value="0" class="form-control "></td>';
        htmldata+='<td class="catname"><div class="input-group">';
        if(isshoopping){
            htmldata+='<span class="input-group-addon  category-list-shopping-icon">{lang_admin("commodity")}</span>';
        } else {
            htmldata+='<span class="input-group-addon">{lang_admin("content")}</span>';
        }
        htmldata+='<input type="text" name="catname'+index+'" onchange="setchange(\''+index+'\');" id="catname'+index+'" value="" class="form-control "></div></td>';
        htmldata+='<td class="htmldir"></td>';
        htmldata+='<td class="htmldir"><input type="text" name="htmldir'+index+'" id="htmldir'+index+'" value="" class="form-control "></td>';
        htmldata+='<td class="isnav">';
        htmldata+='<span class="hotspot" onmouseover="tooltip.show(\"{lang_admin("choose_whether_the_column_is_displayed_in_navigation_only_for_top_level_columns")}\");" onmouseout="tooltip.hide();">';
        htmldata+='<select id="isnav'+index+'" onchange="setchange('+index+');"  name="isnav'+index+'" class="form-control select isnav" >';
        htmldata+='<option value="1" selected>{lang_admin("show")}</option>';
        htmldata+='<option value="0" >{lang_admin("no_show")}</option>';
        htmldata+='</select></span> </td>';
        htmldata+='<td class="manage">';
        htmldata+='<a  href="#"  onclick="delcatrgoty(this)" title="{lang_admin("delete")}" class="btn btn-danger">{lang_admin("delete")}</a>';
        htmldata+='</td>';
        htmldata+="</tr>";
        $("#listtable").append(htmldata);
        $("#index").val(index);
    }
    //删除新增的栏目
    function delcatrgoty(obj){
        $(obj).parent().parent().remove();
    }

    //点击加载  catid 分类id,obj节点,leveldiv子栏目展开
    var catdata = {};
    function loadowncategory(catid,obj,leveldiv){
        if(!leveldiv){
            leveldiv=1;
        }
        if(!catdata[catid]){
            var htmldata=loadowncategoryhtml(catid,leveldiv);
            $(obj).parent().parent().after(htmldata);
        }

    }

    function loadowncategoryhtml(catid,leveldiv){
        var url='{url("table/loadowncategory/table/category")}&catid='+catid;
        var    htmldataarray="";
        $.ajax({
            type: "get",
            url: url,
            async: false,
            success: function (data) {
                var newcategorydata = JSON.parse(data);
                catdata[catid]=newcategorydata;
                for(var i=0;i<catdata[catid].length;i++){
                    var fhcatname="";
                    for (var j=0;j<=leveldiv;j++){
                        if (j==0){
                            continue;
                        }else if(j==1){
                            fhcatname="<span class=\"input-group-addon indent\"></span><span class=\"input-group-addon indent\"></span>";
                        }else{
                            fhcatname="<span class=\"input-group-addon indent\"></span>"+fhcatname;
                        }
                    }
                    var htmldata='<tr onmouseover="m_over(this)" onmouseout="m_out(this)" name="leveldiv" lang="'+leveldiv+'">'+
                        '<input type="hidden" id="catid'+catdata[catid][i].catid+'" name="catid'+catdata[catid][i].catid+'" value="'+catdata[catid][i].catid+'">' +
                        '<td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="'+catdata[catid][i].catid+'" name="select[]"> </td>' +
                        '<td class="sort"><input type="text" onchange="setchange(\''+catdata[catid][i].catid+'\');" name="listorder'+catdata[catid][i].catid+'" id="listorder'+catdata[catid][i].catid+'" value="'+catdata[catid][i].listorder+'" class="form-control "></td>' +
                        '<td class="catname">'+fhcatname ;
                    if(catdata[catid][i].son>0){
                        htmldata+= '<a onclick="child(this);loadowncategory('+catdata[catid][i].catid+',this,'+(leveldiv+1)+');" title="{lang_admin("click_to_expand_and_close")}" ' +
                            'class="child"><i class="glyphicon glyphicon-menu-down"></i></a>';
                    }else{
                        htmldata+= '<a class="child"></a>';
                    }

                    htmldata+='<div class="input-group">' +
                        '<input type="text" name="catname'+catdata[catid][i].catid+'" id="catname'+catdata[catid][i].catid+'" onchange="setchange(\''+catdata[catid][i].catid+'\');"' +
                        ' value="'+catdata[catid][i].catname+'" class="form-control ">' +
                        '</div></td>' +
                        '<td class="htmldir"><span class="hotspot" onmouseover="tooltip.show(\'{lang_admin("category_file_storage_directory_directory_must_be_in_english_or_pinyin_no_space_in_the_middle")}\');"' +
                        ' onmouseout="tooltip.hide();">'+catdata[catid][i].htmldir+'</span></td>' +
                        '<td class="isnav text-center"><span class="hotspot" onmouseover="tooltip.show(\'{lang_admin("choose_whether_the_column_is_displayed_in_navigation_only_for_top_level_columns")}\');" onmouseout="tooltip.hide();">' +
                        '<select id="isnav'+catdata[catid][i].catid+'" name="isnav'+catdata[catid][i].catid+'" onchange="setchange(\''+catdata[catid][i].catid+'\');" class="form-control select isnav">' +
                        '<option value="1" '+(catdata[catid][i].isnav==1?'selected':'')+'>{lang_admin("show")}</option>' +
                        '<option value="0" '+(catdata[catid][i].isnav==1?'':'selected')+'>{lang_admin("no_show")}</option></select></span></td>' +
                        '<td class="htmldir text-center"><span class="'+(catdata[catid][i].isshopping==1?'category-list-shopping-icon">{lang_admin("commodity")}':'">{lang_admin("content")}')+'</span></td>' +
                        '<td class="manage">' +
                        '<a href="#" onclick="gotourl(this)" data-dataurl="{url("table/edit/table/category")}&id='+catdata[catid][i].catid+'&shopping='+catdata[catid][i].isshopping+'" ' +
                        'title="{lang_admin("edit")}" class="btn btn-gray" data-dataurlname="{lang_admin("editorial_category")}">{lang_admin("edit")}</a>' +
                        '<div class="btn-group"><button type="button" class="btn btn-default dropdown-toggle" ' +
                        'data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{lang_admin("more")}<span class="caret"></span></button>' +
                        '<ul class="dropdown-menu"> <li>' +
                        '<a href="{url("archive/list",false)}&catid='+catdata[catid][i].catid+'" target="_blank" title="{lang_admin("see")}">{lang_admin("see")}</a></li>' +
                        '<li><a  href="#" onclick="gotourl(this)"   data-dataurl="{url("table/copy/table/category")}&id='+catdata[catid][i].catid+'&shopping='+catdata[catid][i].isshopping+'" ' +
                        ' title="{lang_admin("copy_column")}" data-dataurlname="{lang_admin("copy_column")}">{lang_admin("copy")}</a></li>' +
                        '<li><a href="#" onclick="gotourl(this)" data-dataurl="{url("table/list/table/archive")}&catid='+catdata[catid][i].catid+'&shopping='+catdata[catid][i].isshopping+'" title="{lang_admin("content_manage")}" ' +
                        'data-dataurlname="{lang_admin("content_manage")}">{lang_admin("administration")}</a></li>' +
                        '<li role="separator" class="divider"></li>' +
                        '<li><a onclick="if(confirm(\'{lang_admin("are_you_sure_you_want_to_delete_it")}\')){gotourl(this);};" href="#" ' +
                        'data-dataurl="{url("table/delete/table/category")}&id='+catdata[catid][i].catid+'&token=<?php echo $token;?>" title="{lang_admin("delete")}">{lang_admin("delete")}</a></li>' +
                        '</ul></div></td></tr>';
                    htmldataarray+=htmldata;
                }
            }
        });
        return htmldataarray;
    };

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

                <label style="font-size:14px;"><?php echo lang_admin("whether_copy_sub_column");?></label>
                <select id="is_copy_subcolumn" name="pc_style_color" class="form-control select pc_style_color">
                    <option value="1" selected><?php echo lang_admin('yes');?></option>
                    <option value="0"><?php echo lang_admin('no');?></option>
                </select>
                <div class="blank20"></div>
                <label style="font-size:14px;"><?php echo lang_admin("whether_copy_content");?></label>
                <select id="is_copy_content" name="pc_style_color" class="form-control select pc_style_color">
                    <option value="1" selected><?php echo lang_admin('yes');?></option>
                    <option value="0"><?php echo lang_admin('no');?></option>
                </select>

                <div class="blank20"></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="catrgoty_copy"  name="catrgoty_copy" class="btn btn-primary"><?php echo lang_admin('copy');?></button>
                <button type="button" id="closmode" name="app_clos" class="btn btn-secondary" data-dismiss="modal"><?php echo lang_admin("close");?></button>
            </div>
        </div>
    </div>
</div>



