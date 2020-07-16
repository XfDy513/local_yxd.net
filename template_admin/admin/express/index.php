<div class="main-right-box">
<h5>{lang_admin('logistics_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">
    <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=express&act=config&table=expressconfig&admin_dir={get('admin_dir')}&site=default" class="btn btn-primary" data-dataurlname="{lang_admin('express_bird_configuration')}">{lang_admin('express_bird_configuration')}</a>
<div class="blank30"></div>
<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);" >
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
<th class="catid text-center"><!--id-->{lang_admin('logistics_document_number')}</th>
<th class="catname"><!--oid-->{lang_admin('order_number')}</th>
<th class="catname"><!--pname-->{lang_admin('logistics_types')}</th>
<th class="catname"><!--pname-->{lang_admin('ordering_user')}</th>
<th class="catname"><!--pname-->{lang_admin('customer')}</th>
<th class="htmldir"><!--adddate-->{lang_admin('order_time')}</th>
<th class="manage">{lang_admin('dosomething')}</th>
</tr>

</thead>
<tbody>
{loop $data $d}
<tr class="s_out">
<?php $expressid=$d['courier_number'];$expresstype=$d['expresstype'];?>
<td ><input onclick="c_chang(this)" type="checkbox"  value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>
<td class="catid text-center">{$d['courier_number']}</td>
<td class="catname">{$d['oid']}</td>
    <td class="catid">{$d['expresstype']}</td>
    <td class="catname" align="left">{$d['mid']}</td>
<td class="catname" align="left">{$d['pname']}</td>
<td class="htmldir">{date('Y-m-d H:i:s',$d['adddate'])}</td>

<td class="manage">
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/querlist/expressid/$expressid/expresstype/$expresstype");?>" title="{lang_admin('see')}" class="btn btn-primary">{lang_admin('see')}</a>
</td>
</tr>
{/loop}

</tbody>
</table>

    <div class="line"></div>
<div class="page"><?php  echo pagination::adminhtml(count($data)); ?></div>
<div class="blank30"></div>
</div>


<div class="blank30"></div>

<input type="hidden" name="batch" id="batch" value="">
</form>


<div class="blank30"></div>
</div>
</div>
