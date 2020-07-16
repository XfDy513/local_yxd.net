
<div class="main-right-box">
<h5>{lang_admin('extension')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

<div class="blank20"></div>
<div id="tagscontent" class="right_box">

<table border="0" cellspacing="0" cellpadding="0" name="table1" id="table1" width="100%">
<thead>
<tr class="th">
<th><input title="{lang_admin('click_to_select_all_items_on_this_page')}"  onclick="CheckAll(this.form)" type="checkbox" name="chkall" class="checkbox" /></th>
          <th>{lang_admin('username')}</th>
          <th>{lang_admin('point_number')}</th>
          <th>{lang_admin('interest_rate')}</th>
          <th>{lang_admin('cost')}</th>
          <th>IP</th>
          <th>{lang_admin('number_of_registrations')}</th>
          <th>{lang_admin('url')}</th>
          <th>{lang_admin('date')}</th>
          <th>{lang_admin('dosomething')}</th>
        </tr>

</thead>


<tbody>
{loop $data $d}
<tr>

<td ><input onclick="c_chang(this)" type="checkbox" value="{$d.$primary_key}" name="select[]" class="checkbox" /> </td>

<td align="left" style="padding-left:10px;">{$d['username']}</td>
<td align="left" style="padding-left:10px;">{$d['point']}</td>
<td align="left" style="padding-left:10px;">{$d['profitmargin']} %</td>
<td align="left" style="padding-left:10px;"><font color="red"><?php echo $d['point']*($d['profitmargin']/100);?></font></td>
<td align="left" style="padding-left:10px;">{$d['visits']}</td>
<td align="left" style="padding-left:10px;">{$d['registers']}</td>
<td align="left" style="padding-left:10px;">{$d['website']}</td>
<td>{date('Y-m-d H:i:s',$d['regtime'])}</td>

<td>
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/settle/table/$table/id/$d[$primary_key]");?>" title="{lang_adming('settlement')}"><i class="glyphicon glyphicon-usd"></i></a> 
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("/act/edit/table/$table/id/$d[$primary_key]");?>" title="{lang_admin('edit')}"><i class="glyphicon glyphicon-edit"></i></a>
</td>
</tr>
{/loop}


</tbody>
</table>

<div class="page"><?php echo pagination::adminhtml($record_count); ?></div>
<div class="blank20"></div>
</div>
<div class="blank20"></div>

<input type="hidden" name="batch" value="">
<input  class="btn btn-primary" type="button" value=" 删除 " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>

</form>

<div class="blank30"></div>
</div>
</div>