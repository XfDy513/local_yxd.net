


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
    <h5>{lang_admin('type_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">



        <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

            <?php
             $data= type::listtypedata_new();
            ?>

            <!--改变的或者新增的分类序号-->
            <input type="hidden" id="cahngenum" name="cahngenum" value=""/>
            <!--改变的或者新增的分类序号-->

            <span class="pull-right">
                <a class="openall btn btn-default" onclick="$('[name=\'leveldiv\']').removeAttr('style');$('.classall').show();$('.openall').hide();">{lang_admin('expand_all_sub_columns')}</a>
                <a class="classall btn btn-default" onclick="$('[name=\'leveldiv\']').attr('style','display:none');$('.openall').show();$('.classall').hide();" style="display: none">{lang_admin('close_all_sub_columns')}</a>
            </span>

            <input class="btn btn-primary" type="button" value=" {lang_admin('adding_type')} " onclick="gotourl(this)" data-dataurlname="{lang_admin('adding_type')}" data-dataurl="index.php?case=table&act=add&table=type&admin_dir={get('admin_dir',true)}" />

            <div class="blank30"></div>
            <div class="line"></div>
            <div id="tagscontent" class="right_box">
                <div class="blank5"></div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr class="th">
                            <th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall"> </th>
                            <th class="sort text-center">{lang_admin('sort')}</th>
                            <!--<th class="sort">{lang_admin('id')}</th>-->
                            <th class="catname"><a class="openall" onclick="$('[name=\'leveldiv\']').removeAttr('style');$('.classall').show();$('.openall').hide();">{lang_admin('unfold')}</a>
                                <a class="classall" onclick="$('[name=\'leveldiv\']').attr('style','display:none');$('.openall').show();$('.classall').hide();" style="display: none">{lang_admin('close')}</a></th>


                            <th class="htmldir"><!--typename-->{lang_admin('directory_name')}</th>
                            <th class="manage">{lang_admin('dosomething')}</th>
                        </tr>
                        </thead>
                        <tbody id="listtable">
                        <?php
                            $token = Phpox_token::grante_token('table_del');
                            echo type::gethtmltypedata_new(type::listtypedata_new(),false,0,$token);
                        ?>
                        </tbody>
                    </table>
                    <div class="blank10"></div>
                </div>
                <span class="pull-right">
    <input type="hidden" name="langurlname" value="">
    <select id="copytolang" name="copytolang" class="form-control select pull-left" style="display:inline-block;width:auto;margin-right:5px;">
        <option value="0" selected>{lang_admin('please_select_language')}</option>
        {loop getlang() $i $d}
        <option value="{$d['langurlname']}">{$d['langname']}</a></option>
        {/loop}
    </select>
    <input type="button" value="{lang_admin('copy')}"
           onclick="if(!getSelect(this.form)){alert('请选择分类！');}else{if($('#copytolang').val()==0){alert('{lang_admin('please_select_language')}');}else{this.form.action='<?php echo modify('act/batch/table/'.$table,true);?>'; this.form.batch.value='copytolang';this.form.langurlname.value=$('#copytolang').val(); returnform(this.form);}}" class="btn btn-success pull-left">
</span>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="hidden" name="inedx" id="index" value="{type::maxid_new()}">
                        <input type="button"   value="{lang_admin('preservation')}" name="preservation" onclick=" this.form.action='<?php echo modify("/act/newadd/table/$table");?>';this.form.batch.value='newadd'; returnform(this.form);" class="btn btn-gray"/>

                        <input type="hidden" name="batch" value=""  >


                        <input type="button" value="{lang_admin('delete')}" name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}" class="btn btn-gray"/>

                        <input class="btn btn-gray" id="adding_type" type="button" value=" {lang_admin('adding_type')} " style="margin-right: 15px;" />

                        <script type="text/javascript">
                            <!--

                        $("#typeid option:eq(0)").text("{lang_admin('multiple_choices_to_join_the_type')}");

                            //-->
                        </script>

                        <?php
                             $option="onchange=\"if(getSelect(this.form) && confirm('".lang_admin('do_move_id_to')."('+getSelect(this.form)+')".lang_admin('do_you_have_a_type')."')){this.form.action='". modify('act/batch',true)."'; this.form.batch.value='move'; returnform(this.form);}\"";
                           echo form::select('typeid',0,type::getoption(),$option);
                        ?>

                    </div>
                </div>

                <div class="blank30"></div>

        </form>

        <div class="blank30"></div>
    </div>
</div>


<script type="text/javascript">
    $(function () {
        $('#adding_type').click(function() {
            //新增商品栏目
            addtype();
        });
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
    function addtype(){
        var index=$("#index").val();
        index=parseInt(index)+1;
        setchange(index);
        var htmldata="<tr>";
        htmldata+='<td class="s_out"><input  type="checkbox" value=""  disabled> </td>';
        htmldata+='<td class="sort"><input type="text" name="listorder'+index+'" id="listorder'+index+'" value="0" class="form-control "></td>';
        htmldata+='<td class="id"></td>';
        htmldata+='<td class="catname">';
        htmldata+='<input type="text" name="typename'+index+'" id="typename'+index+'" value="" class="form-control "> </td>';
        htmldata+='<td class="htmldir  text-center"></td>';
        htmldata+='<td class="htmldir"><input type="text" name="htmldir'+index+'" id="htmldir'+index+'" value="" class="form-control "></td>';
        htmldata+='<td class="manage">';
        htmldata+='<a  href="#" onclick="delcatrgoty(this)" title="{lang_admin("delete")}" class="btn btn-danger">{lang_admin("delete")}</a>';
        htmldata+='</td>';
        htmldata+="</tr>";
        $("#listtable").append(htmldata);
        $("#index").val(index);
    }
    //删除新增的栏目
    function delcatrgoty(obj){
        $(obj).parent().parent().remove();
    }

    //点击加载  typeid 分类id,obj节点,leveldiv子栏目展开
    var typedata = {};
    function loadowntype(typeid,obj,leveldiv){
        if(!leveldiv){
            leveldiv=1;
        }
        if(!typedata[typeid]){
            var url='{url("table/loadowntype/table/type")}&typeid='+typeid;
            $.ajax({
                type: "get",
                url: url,
                async: false,
                success: function (data) {
                    var newtypedata = JSON.parse(data);
                    typedata[typeid]=newtypedata;
                    for(var i=0;i<typedata[typeid].length;i++){
                        var htmldata='<tr onmouseover="m_over(this)" onmouseout="m_out(this)" name="leveldiv" lang="'+leveldiv+'">'+
                            '<input type="hidden" id="typeid'+typedata[typeid][i].typeid+'" name="typeid'+typedata[typeid][i].typeid+'" value="'+typedata[typeid][i].typeid+'">' +
                            '<td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="'+typedata[typeid][i].typeid+'" name="select[]"> </td>' +
                            '<td class="sort"><input type="text" onchange="setchange(\''+typedata[typeid][i].typeid+'\');" name="listorder'+typedata[typeid][i].typeid+'" id="listorder'+typedata[typeid][i].typeid+'" value="'+typedata[typeid][i].listorder+'" class="form-control "></td>' +
                            '<td class="catname">' ;
                        if(typedata[typeid][i].son>0){
                            htmldata+= '<a onclick="child(this);loadowntype('+typedata[typeid][i].typeid+',this,'+(leveldiv+1)+');" title="{lang_admin("click_to_expand_and_close")}" ' +
                                'class="child"><i class="glyphicon glyphicon-menu-down"></i></a>';
                        }else{
                            htmldata+= '<a class="child"></a>';
                        }
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
                        htmldata+='<div class="input-group">' +fhcatname+
                            '<input type="text" name="typename'+typedata[typeid][i].typeid+'" id="typename'+typedata[typeid][i].typeid+'" onchange="setchange(\''+typedata[typeid][i].typeid+'\');"' +
                            ' value="'+typedata[typeid][i].typename+'" class="form-control ">' +
                            '</div></td>' +
                            '<td class="htmldir"><span class="hotspot" onmouseover="tooltip.show(\'{lang_admin("category_file_storage_directory_directory_must_be_in_english_or_pinyin_no_space_in_the_middle")}\');"' +
                            ' onmouseout="tooltip.hide();">'+typedata[typeid][i].htmldir+'</span>' +
                            '</td><td class="manage">' +
                            '<a href="#" onclick="gotourl(this)" data-dataurl="{modify("/act/edit/table/type")}&id='+typedata[typeid][i].typeid+'" ' +
                            'title="{lang_admin("edit")}" class="btn btn-gray" data-dataurlname="{lang_admin("editorial_category")}">{lang_admin("edit")}</a>' +
                            '<div class="btn-group"><button type="button" class="btn btn-default dropdown-toggle" ' +
                            'data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{lang_admin("more")}<span class="caret"></span></button>' +
                            '<ul class="dropdown-menu"> <li>' +
                            '<a href="{url("type/list",false)}&typeid='+typedata[typeid][i].typeid+'" target="_blank" title="{lang_admin("see")}">{lang_admin("see")}</a></li>' +
                            '<li><a href="#" onclick="gotourl(this)" data-dataurl="{modify("/act/list/table/archive")}&search_typeid='+typedata[typeid][i].typeid+'" title="{lang_admin("content_manage")}" ' +
                            'data-dataurlname="{lang_admin("content_manage")}">{lang_admin("administration")}</a></li>' +
                            '<li role="separator" class="divider"></li>' +
                            '<li><a onclick="if(confirm(\'{lang_admin("are_you_sure_you_want_to_delete_it")}\')){gotourl(this);};" href="#" ' +
                            'data-dataurl="{modify("/act/delete/table/type")}&id='+typedata[typeid][i].typeid+'&token={$token}" title="{lang_admin("delete")}">{lang_admin("delete")}</a></li>' +
                            '</ul></div></td></tr>';
                        $(obj).parent().parent().after(htmldata);
                    }
                }
            });
        }

    }
</script>
