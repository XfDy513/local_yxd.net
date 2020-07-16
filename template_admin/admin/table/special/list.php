
<style type="text/css">
    @media(max-width:1366px) {
        .htmldir {
            display: none;
        }
    }
</style>

<div class="main-right-box">
    <h5>{lang_admin('special_list')}</h5>
    <div class="blank20"></div>
    <div class="box" id="box">


        <form name="listform" id="listform"  action="<?php echo uri(); ?>" method="post" onsubmit="return returnform(this);" >

            <!--改变的或者新增的分类序号-->
            <input type="hidden" id="cahngenum" name="cahngenum" value=""/>
            <!--改变的或者新增的分类序号-->

            <input class="btn btn-primary" type="button"  onclick="gotourl(this)"   data-dataurl="<?php echo url('table/add/table/special') ?>"  value=" {lang_admin('adding_special')} " data-dataurlname="{lang_admin('adding_special')}" />
            <div class="blank30"></div>
            <div class="line"></div>

            <div class="table-responsive">

                <table class="table table-hover">
                    <thead>
                    <tr class="th">
                        <th class="s_out text-center"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall"> </th>
                        <!--<th>排序</th>-->
                        <th class="sort">{lang_admin('sort')}</th>
                        <th class="catid text-center"><!--spid-->{lang_admin('id')}</th>
                        <th class="catname"><!--catname-->{lang_admin('special_name')}</th>
                        <th class="htmldir"><!--htmldir-->{lang_admin('catalog_name')}</th>
                        <th class="manage">{lang_admin('dosomething')}</th>
                    </tr>
                    <tbody id="listtable">

                    <?php $index=0;?>
                    {loop $data $d}
                    <?php $index++;?>
                    <?php $spid=$d['spid']; ?>
                    <tr>
                        <input type="hidden" id="spid{$index}" name="spid{$index}" value="{$d['spid']}" >
                        <td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$spid}" name="select[]"></td>
                        <td class="sort"><input type="text" name="listorder{$index}"  onchange="setchange('{$index}');" id="listorder{$index}" value="{$d['listorder']}" class="form-control "></td>
                        <td class="catid text-center">{$d['spid']}</td>
                        <td class="catname"><input type="text" name="title{$index}" id="title{$index}" onchange="setchange('{$index}');" value="{$d['title']}" class="form-control "></td>
                        <td class="htmldir">
                            <span class="hotspot" onmouseover="tooltip.show('{lang_admin('column_file_storage_directory_directory_must_be_in_english_or_pinyin_no_space_in_the_middle')}');"
                                  onmouseout="tooltip.hide();">{$d['htmldir']}</span>
                        </td>
                        <td class="manage">


                            <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("/act/edit/table/$table/id/$spid"); ?>" title="{lang_admin('edit')}" class="btn btn-gray" data-dataurlname="{lang_admin('editorial_special')}">{lang_admin('edit')}</a>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {lang_admin('more')} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo url("special/show/spid/$spid", false); ?>" target="_blank" title="{lang_admin('see')}">{lang_admin('see')}</a></li>
                                    <li><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("/act/list/table/archive/search_spid/$spid");?>" title="{lang_admin('content_manage')}" data-dataurlname="{lang_admin('content_manage')}">{lang_admin('administration')}</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"   data-dataurl="<?php echo modify("/act/delete/table/special/id/$spid/token/$token"); ?>" title="{lang_admin('delete')}">{lang_admin('delete')}</a></li>
                                </ul>
                            </div>





                        </td>
                    </tr>
                    {/loop}

                    </tbody>
                </table>

                <div class="line"></div>
                <div class="blank30"></div>
                <span class="pull-right">
<input type="hidden" name="langurlname" value="">
<select id="copytolang" name="copytolang" class="form-control select pull-left" style="display:inline-block;width:auto;margin-right:5px;">
<option value="0" selected>{lang_admin('please_select_language')}</option>
{loop getlang() $i $d}
<option value="{$d['langurlname']}">{$d['langname']}</a></option>
{/loop}
</select>
<input type="button" value="{lang_admin('copy')}"
       onclick="if(!getSelect(this.form)){alert('{lang_admin("please_select_a_special")}');}else{if($('#copytolang').val()==0){alert('{lang_admin('please_select_language')}');}else{this.form.action='<?php echo modify('act/batch/table/'.$table,true);?>'; this.form.batch.value='copytolang';this.form.langurlname.value=$('#copytolang').val(); returnform(this.form);}}" class="btn btn-success pull-left">
</span>
                <input type="hidden" name="inedx" id="index" value="{$index}">
                <input type="hidden" name="batch" value="">

                <input type="button" value="{lang_admin('preservation')}" name="preservation" onclick="this.form.action='<?php echo modify("/act/newadd/table/$table");?>';this.form.batch.value='newadd';returnform(this.form);" class="btn btn-gray"/>
                <input type="button" value="{lang_admin('delete')}" name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}" class="btn btn-gray"/>
                <input class="btn btn-gray" type="button" id="adding_special" value=" {lang_admin('adding_special')} "  />


                <div class="blank30"></div>
                <div class="line"></div>
                <div class="page"><?php echo pagination::adminhtml($record_count); ?></div>
                <div class="blank30"></div>
            </div>
        </form>

        <div class="blank30"></div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#adding_special').click(function() {
            //新增商品栏目
            addspecial();
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
    function addspecial(){
        var index=$("#index").val();
        index=parseInt(index)+1;
        var htmldata="<tr>";
        htmldata+='<td class="s_out"><input  type="checkbox" value="" disabled> </td>';
        htmldata+='<td class="sort"><input type="text" name="listorder'+index+'" onchange="setchange(\''+index+'\');" id="listorder'+index+'" value="0" class="form-control "></td>';
        htmldata+='<td class="id"></td>';
        htmldata+='<td class="catname">';
        htmldata+='<input type="text" name="title'+index+'" id="title'+index+'"  onchange="setchange(\''+index+'\');" value="" class="form-control "> </td>';
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
</script>