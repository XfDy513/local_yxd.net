<div class="main-right-box">
<h5>TAG</h5>
<div class="blank20"></div>
<div class="box" id="box">


<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

<input class="btn btn-primary" type="button" value=" {lang_admin('add_tag')}"
       onclick="gotourl(this)" data-dataurl="index.php?case=table&act=add&table=tag&admin_dir={get('admin_dir',true)}" data-dataurlname="{lang_admin('add_tag')}" />

<div class="blank30"></div>


<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /></th>
<th class="catid text-center">{lang_admin('id')}</th>
<th class="catid">{lang_admin('sort')}</th>
<th class="catname">{lang_admin('name')}</th>
<th class="catname">{lang_admin('catalog_name')}</th>
<th class="catname text-center">{lang_admin('txt_size')}</th>
<th class="catname text-center">{lang_admin('txt_color')}</th>
<!--<th class="catname">{lang_admin('scope_of_use')}</th>-->
<th class="manage text-center">{lang_admin('dosomething')}</th>
</tr>
</thead>
<tbody>
    {loop $data $d}
    <tr>
      <td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /></td>
      <td class="catid text-center">{cut($d['tagid'])}</td>
     <td class="sort text-center">{form::input("listorder[$d[$primary_key]]",$d['listorder'],'class="input_c"')}</td>
      <td class="catname">{cut($d['tagname'])}</td>
      <td class="catname">{cut($d['htmldir'])}</td>
      <td class="catname text-center">{cut($d['txtsize'])}px</td>
      <td class="catname text-center"><span class="glyphicon glyphicon-stopglyphicon glyphicon-stop" style="color:{cut($d['txtcolor'])};"></span></td>
     <!-- <td class="catname" >
          <a href="#" class="tooltip-test" data-toggle="tooltip" title="{cut($d['ranges'])}">
              {cut($d['ranges'])}
         </a>
      </td>-->
      <td class="manage text-center">
        <a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('edit')}" class="btn btn-gray" data-dataurlname="{lang_admin('edit_label')}">{lang_admin('edit')}</a>
          <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {lang_admin('more')} <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo url("tag/show/tag/",false);?>{cut($d['tagname'])}" target="_blank" title="{lang_admin('see')}">{lang_admin('see')}</a></li>
                  <li><a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("case/cache/act/make_tag/submit/1/tag/".$d['tagid']);?>" title="{lang_admin('tag_generation_html')}">{lang_admin('tag_generation_html')}</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#" data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}">{lang_admin('delete')}</a></li>
              </ul>
          </div>
      </td>
    </tr>
    {/loop}
    </tbody>
    
  </table>
</div>
<input type="hidden" name="batch" value="" />
<input class="btn btn-gray" type="button" value=" {lang_admin('delete')} " name="delete"
onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>
<input  class="btn btn-gray" type="button" value=" {lang_admin('sort')} " name="order"
onclick="this.form.action='<?php echo modify('act/batch/tagid/'.get('tagid'),true);?>'; this.form.batch.value='listorder'; returnform(this.form)"/>

 
<div class="blank30"></div>
<div class="line"></div>

<div class="clear page">
  <?php if(get('table')!='type' && front::get('case')!='field') echo pagination::adminhtml($record_count); ?>
</div>

</form>
    <script>
        $(function () { $("[data-toggle='tooltip']").tooltip(); });
    </script>
<div class="blank30"></div>
</div>
</div>

