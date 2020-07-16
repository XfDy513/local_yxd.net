<div class="main-right-box">
<h5>{lang_admin('topic_content_special_id')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<div class="blank5"></div>

<div style="float:left;width:500px;">
<form name="searchform" id="searchform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
{lang_admin('column')}
<?php echo form::select('search_catid',get('search_catid')?get('search_catid'):0,category::option()); ?>
{lang_admin('type')}
<?php echo form::select('search_typeid',get('search_typeid')?get('search_typeid'):0,type::option()); ?>
{lang_admin('title')}
<input type="text" name="search_title" id="search_title" value=""/>
    <input  name="submit" value="1" type="hidden">
    <input type="submit" value="搜索" class="button"/>

<div class="blank10"></div>
{lang_admin('area')}
<?php echo form::select('search_province_id',get('search_province_id')?get('search_province_id'):0,area::province_option()); ?>
<?php echo form::select('search_city_id',get('search_city_id')?get('search_city_id'):0,area::city_option(get('search_city_id'))); ?>
<?php echo form::select('search_section_id',get('search_section_id')?get('search_section_id'):0,area::section_option(get('search_section_id'))); ?>

{lang_admin('special')}
<?php echo form::select('search_spid',get('search_spid')?get('search_spid'):0,special::option()); ?>
</form>
</div>

<div style="float:right;">
<a href="{special::url($special['spid'])}" target="_blank" class="btn_d">{$special['title']}</a>{lang_admin('content_manage')}
</div>

<div class="blank5"></div>
<div id="tagscontent" class="right_box">

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

<table border="0" cellspacing="0" cellpadding="0" name="table1" id="table1" width="100%">
<thead>
<tr class="th">
<th><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
<th><!--aid-->{lang_admin('id')}</th>
<th><!--typeid-->{lang_admin('categorycategory')}</th>
<th><!--title-->{lang_admin('title')}</th>
<th><!--spid-->{lang_admin('belonging_to_this_topic')}</th>
<th><!--username-->{lang_admin('username')}</th>
<th><!--view-->{lang_admin('browse')}</th>
<th><!--adddate-->{lang_admin('add_time')}</th>
<th><!--checked-->{lang_admin('to_examine')}</th>
<th>{lang_admin('dosomething')}</th>
</tr>

</thead>
<tbody>
{loop $data $d}
<tr>

<td><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>
<td>{cut($d['aid'])}</td>
<td><a href="<?php echo url("archive/list/catid/".$d['catid'],false);?>" target="_blank">{catname($d['catid'])}</a></td>
<td align="left" style="padding-left:10px;">{cut($d['title'])}</td>
<td>{helper::yes($d['spid']==$special['spid'],false)}</td>
<td>{cut($d['username'])}</td>
<td>{cut($d['view'])}</td>
<td>{cut($d['adddate'])}</td>
<td>{helper::yes($d['checked'])}</td>
<td width="70">

<span class="hotspot" onmouseover="tooltip.show('{lang_admin('view_the_front_end_dynamic_page_of_the_website')}<br />{lang_admin('easy_to_observe_the_effect_of_the_modification')}');" onmouseout="tooltip.hide();"><a href="<?php if($d['linkto'])   echo $d['linkto']; else echo url('archive/show/aid/$d[$primary_key]',false);?>" target="_blank" title="{lang_admin('view_dynamic_pages')}" target="_blank"></a></span>

<span class="hotspot" onmouseover="tooltip.show('{lang_admin('click_edit_content')}');" onmouseout="tooltip.hide();"><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>"></a></span>

</td>
</tr>
{/loop}


</tbody>
</table>

<div class="page"><?php echo pagination::adminhtml($record_count); ?></div>
</div>

<div class="blank10"></div>

<input type="hidden" name="batch" value="">

<input type="hidden" name="spid" value="<?php echo get('spid'); ?>">
<input  class="btn_d" type="button" value="{lang_admin('join_the_topic')} " name="addtospecial"  onclick="this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='addtospecial'; returnform(this.form);" />
<input  class="btn_d" type="button" value="{lang_admin('remove_the_topic')} " name="addtospecial"  onclick="this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='removefromspecial'; returnform(this.form);" />


</form>

<div class="blank30"></div>
</div>
</div>
