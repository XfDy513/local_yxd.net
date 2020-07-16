<style type="text/css">
.main .main-right-box {
position: absolute;
top:130px;
right:30px;
left:30px;
bottom:30px;
}
</style>


<div class="main-right-box">
<h5>{lang_admin('payment_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">
<style type="text/css">
	.tips {width:100%;}
</style>



    <form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
          <th class="catname"><!--name-->{lang_admin('name')}</th>
          <th class="htmldir"><!--rate-->{lang_admin('rate')}</th>
          <th class="htmldir"><!--ver-->{lang_admin('edition')}</th>
          <th class="manage">{lang_admin('dosomething')}</th>
        </tr>

</thead>
<tbody>
{loop $data $d}
<tr>
<td class="catname">{$d['name']}</td>
<td class="htmldir">{cut($d['pay_fee'])}%</td>
<td class="htmldir">{cut($d['version'])}</td>

<td class="manage">
<?php if ($d['install']==0){?>
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/install/table/$table/name/".$d['pay_code']);?>" title="{lang_admin('install')}" class="btn btn-gray" data-dataurlname="{lang_admin('install')} {lang_admin('payment_method')}">{lang_admin('install')}</a>
<?php }else{?>
<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/edit/table/$table/id/".$d['id']);?>" title="{lang_admin('edit')}" class="btn btn-gray" data-dataurlname="{lang_admin('edit')} {lang
_admin('payment_method')}">{lang_admin('edit')}</a>
<a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#" data-dataurl="<?php echo modify("/act/delete/table/$table/id/".$d['id']);?>" title="{lang_admin('delete')}" class="btn btn-gray">{lang_admin('delete')}</a>
<?php } ?>
</td>
</tr>
{/loop}


      </tbody>
    </table>
</div>

</form>
<div class="blank30"></div>
</div>
</div>
