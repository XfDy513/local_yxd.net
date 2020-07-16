<div class="main-right-box">
<h5>{lang_admin('order_list')}</h5>
<div class="blank20"></div>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
<th class="catid text-center"><!--id-->{lang_admin('id')}</th>
<th class="catname"><!--oid-->{lang_admin('username')}</th>
<th class="catname"><!--oid-->{lang_admin('网站名称')}</th>
<th class="catname"><!--pname-->域名</th>
    <th class="catname"><!--pname-->QQ</th>
    <th class="catname"><!--pname-->申请时间</th>
<th class="htmldir text-center"><!--status-->{lang_admin('state')}</th>
<th class="manage">{lang_admin('dosomething')}</th>
</tr>

</thead>
<tbody>
{loop $data $d}
<tr class="s_out">

<td ><input onclick="c_chang(this)" type="checkbox"  value="{$d['id']}" name="select[]" class="checkbox" /> </td>
<?php
    switch($d['statu']){
        case 0:
        $d['statu']=lang_admin('no_check');
        break;
        case 1:
        $d['statu']=lang_admin('yes_check');
        break;
        case 2:
            $d['statu']=lang_admin('yes_ture');
            break;
        case 3:
            $d['statu']=lang_admin('is_off');
            break;
        default:
        $d['statu']=lang_admin('no_check');
        break;
    }
?>
<td class="catid text-center">{$d['id']}</td>
<td class="catname">{user::getusername($d['mid'])}</td>
<td class="catname" align="left">{$d['webname']}</td>
<td class="catname" align="left">{$d['ip']}</td>
<td class="catname" align="left">{$d['qq']}</td>
<td class="catname" align="left">{date('Y-m-d H:i:s',$d['adddate'])}</td>
<td class="htmldir text-center">{$d['statu']}</td>

<td class="manage">
    <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('handle')}" class="btn btn-gray">{lang_admin('handle')}</a>
    <a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"   data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}">{lang_admin('delete')}</a>
</td>
</tr>
{/loop}

</tbody>
</table>



<input type="hidden" name="batch" id="batch" value="">
<input  class="btn btn-gray" type="button" value=" {lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('do_delete_id_as')}('+getSelect(this.form)+'){lang_admin('is_it_recorded')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?></div>
    <div class="blank30"></div>
</div>

</form>

<div class="blank30"></div>
</div>
</div>
