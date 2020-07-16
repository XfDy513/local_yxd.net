<div class="main-right-box">
<h5>{lang_admin('bulletin_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

    <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=add&table=announcement&admin_dir={get('admin_dir')}&site=default" class="btn btn-primary"  data-dataurlname="{lang_admin('adding_announcements')}">{lang_admin('adding_announcements')}</a>




<div class="blank30"></div>
<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">




<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
<th class="catid"><!--id-->{lang_admin('id')}</th>
<th class="catname"><!--title-->{lang_admin('title')}</th>

<th class="catid"><!--adddate-->{lang_admin('add_time')}</th>
<th class="manage">{lang_admin('dosomething')}</th>
            </tr>

        </thead>
        <tbody>
            {loop $data $d}
            <tr>

                <td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>
                <td class="sort">{cut($d['id'])}</td>
                <td align="left" class="catname">{cut($d['title'])}</td>
                <td class="htmldir">{cut($d['adddate'])}</td>
                <td class="manage">

                    <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]/deletestate/".front::get('deletestate'));?>" title="{lang_admin('edit')}" class="btn btn-gray" data-dataurlname="<?php echo lang_admin('editorial_bulletin');?>">{lang_admin('edit')}</a>
                    <a href="#" onclick="gotourl(this)"   data-dataurl='<?php echo url("announ/show/id/$d[$primary_key]",false);?>' target="_blank" title="{lang_admin('see')}" class="btn btn-default">{lang_admin('see')}</a>
                </td>
            </tr>
            {/loop}


        </tbody>
    </table>
</div>

<input type="hidden" name="batch" value="">
<input  class="btn btn-gray" type="button" value="{lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>



<div class="blank20"></div>
<div class="line"></div>

	<div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?></div>
	<div class="blank10"></div>

</form>
<div class="blank30"></div>
</div>
</div>
