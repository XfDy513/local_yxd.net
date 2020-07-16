<div class="main-right-box">
<h5>{lang_admin('inner_chain_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<input onclick="gotourl(this)"   data-dataurl="{url::create('table/add/table/linkword')}" type="button" name="addcontentlinkword" class="btn btn-primary" value="{lang_admin('increase_the_internal_chain')}" data-dataurlname="{lang_admin('increase_the_internal_chain')}" />

<div class="blank30"></div>
<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="s_out"><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /> </th>
<th class="catid text-center"><!--id-->{lang_admin('id')}</th>
<th class="catname"><!--linkword-->{lang_admin('link_words')}</th>
<th class="htmldir"><!--linkurl-->URL</th>
<th class="catid text-center"><!--linkorder-->{lang_admin('weight')}</th>
<th class="catid text-center"><!--linktimes-->{lang_admin('frequency')}</th>
<th class="manage">{lang_admin('dosomething')}</th>
</tr>
</thead>
<tbody>

{loop $data $d}
<tr>

<td class="s_out"><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>

<td class="catid text-center">{cut($d['id'])}</td>
<td class="htmldir">{cut($d['linkword'])}</td>
<td class="htmldir">{$d['linkurl']}</td>
<td class="catid text-center">{cut($d['linkorder'])}</td>
<td class="catid text-center">{cut($d['linktimes'])}</td>
                
<td class="manage">    
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('edit')}" class="btn btn-primary">{lang_admin('edit')}</a>
<a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#"   data-dataurl="<?php echo modify("/act/delete/table/$table/id/$d[$primary_key]/token/$token");?>" title="{lang_admin('delete')}" class="btn btn-default">{lang_admin('delete')}</a>
</td>
</tr>
{/loop}


</tbody>
</table>


</div>
<div class="page"><?php if(get('table')!='type' && front::get('case')!='field') echo pagination::html($record_count); ?></div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input type="hidden" name="batch"  id="batch" value="" />

<input  class="btn btn-gray" type="button" value=" <?php if(get('table')=='archive') {?>{lang_admin('thorough')}<?php } ?>{lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('do_delete_id_as')}('+getSelect(this.form)+'){lang_admin('is_it_recorded')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}" />
<input  class="btn btn-gray" type="submit" value=" <?php if(get('table')=='archive') {?>{lang_admin('thorough')}<?php } ?>{lang_admin('empty')} " name="delete" onclick="qk()" />
</form>
<script type="text/javascript">
        function qk(){
            if(confirm("{lang_admin('do_you_really_want_to_clear_the_records')}")) {
                var inputs = document.getElementsByTagName("input");
                var boxs = [];
                for (let i = 0; i < inputs.length; i++) {
                    if (inputs[i].type == "checkbox") {
                        inputs[i].checked=true;
                    }
                }

                document.getElementById("listform").action = '<?php echo modify('act/batch',true);?>';
                document.getElementById("batch").value='delete';
            }
        }
</script>
<div class="blank30"></div>
</div>
</div>

