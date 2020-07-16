<div class="main-right-box">
<h5>{lang_admin('spider_statistics')}</h5>
<div class="blank20"></div>
<div class="box" id="box">
    <input class="btn btn-primary" type="button" value=" {lang_admin('statistical_settings_for_spiders')} " onclick="gotourl(this)"   data-dataurl="{url::create('config/system/set/spidersite')}" data-dataurlname="{lang_admin('statistical_settings_for_spiders')}" />
    <div class="blank20"></div>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
          <th class="catid"><!--id-->{lang_admin('id')}</th>
          <th class="catname">{lang_admin('search_engines')}</th>
          <th class="htmldir">IP</th>
          <th class="htmldir">{lang_admin('time')}</th>
          <th class="htmldir">{lang_admin('url')}</th>
          <th class="manage">{lang_admin('dosomething')}</th>
        </tr>

</thead>
<tbody>
{loop $data $d}
<tr>

<td ><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>

<td >{$d['id']}</td>
<td >{$d['bot']}</td>
<td>{$d['ip']}</td>
<td>{$d['time']}</td>
<td align="left" style="padding-left:10px;"><a href="{$d['url']}" target="_blank">{$d['url']}</a></td>

<td class="manage">
<a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"  data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]");?>">{lang_admin('delete')}</a>
</tr>
{/loop}


</tbody>
</table>
</div>
<div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::html($record_count); ?></div>


<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>

<input type="hidden" name="batch" value="">
<input  class="btn btn-gray" type="button" value=" {lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>

<input  class="btn btn-gray" type="button" value=" {lang_admin('empty')} " name="clear" onclick="if(confirm('{lang_admin('are_you_sure_its_empty')}')){this.form.action='<?php echo modify('act/clear',true);?>'; this.form.batch.value='clear'; returnform(this.form);}"/>

</form>


<div class="blank30"></div>
</div>
</div>


