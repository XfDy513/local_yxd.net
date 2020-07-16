
<div class="main-right-box">
<h5>{lang_admin('voting_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<div class="alert alert-warning alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<strong>{lang_admin('note_call_method')}：</strong> 	[	<span>{</span>{lang_admin('voting_number')}<span>}</span>	]	
</div>



<input class="btn btn-primary" type="button" value=" {lang_admin('adding_votes')} "  onclick="gotourl(this)" data-dataurlname="{lang_admin('adding_votes')}" data-dataurl="{$base_url}/index.php?case=table&act=add&table=ballot&admin_dir={get('admin_dir',true)}&site=default" />

    <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=config&act=system&set=vote&admin_dir={get('admin_dir',true)}&site=default" class="btn btn-gray" data-dataurlname="{lang_admin('voting_settings')}">{lang_admin('voting_settings')}</a>



<div class="blank30"></div>


<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /></th>
        <th class="catid"><!--id-->
		{lang_admin('voting_number')}</th>
        <th class="catname"><!--title-->
		{lang_admin('column_custom_subtitle')}</th>
        <th class="catid"><!--content-->
		{lang_admin('votes')}</th>
        <th class="manage">{lang_admin('please_operate_with_caution')}</th>
      </tr>
	  </thead>
<tbody>
    {loop $data $d}
    <tr>
      <td class="s_out" ><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /></td>
      <td class="catid">{cut($d['id'])}</td>
      <td class="catname" align="left">{cut($d['title'])}</td>
      <td class="catid">{cut($d['num'])}</td>
      <td class="manage">



	  <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('editorial_voting_items')}" class="btn btn-gray">{lang_admin('editorial_voting')}</a>

          <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {lang_admin('more')} <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                  <li><a target="_blank" href="<?php echo url("ballot/show/id/$d[$primary_key]",false);?>" title="{lang_admin('view_the_front_end_dynamic_page_of_the_website')}">{lang_admin('preview')}</a></li>

                  <li><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/list/table/option/bid/$d[$primary_key]");?>" title="{lang_admin('editorial_voting_items')}">{lang_admin('editorial_voting_items')}</a></li>

                  <li><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/result/table/ballot/bid/$d[$primary_key]");?>" title="{lang_admin('because_of_the_caching_of_wechat_it_is_necessary_to_cancel_the_public_numbers_attention_before_re_focusing_on_the_public_number_to_see_the_results_immediately_after_publication')}">{lang_admin('voting_statistics')}</a></li>

                  <li role="separator" class="divider"></li>
                  <li><a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"  data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}">{lang_admin('delete')}</a></li>

              </ul>
          </div>

	  </td>
    </tr>
    {/loop}
    </tbody>
  </table>
</div>

  <input type="hidden" name="batch" value="" />
  <input class="btn btn-gray" type="button" value=" {lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('do_delete_id_as')}('+getSelect(this.form)+'){lang_admin('is_it_recorded')}')){this.form.action='<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>'; this.form.batch.value='delete'; returnform(this.form);}"/>

    <div class="blank30"></div>
    <div class="line"></div>
    <div class="page">
        <?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?>
    </div>


</form>


<div class="blank30"></div>
</div>
</div>

