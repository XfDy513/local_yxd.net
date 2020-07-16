
<div class="main-right-box">
<h5>{lang_admin('settlement')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<ul class="nav nav-tabs" role="tablist">
    <li>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=config&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('to_configure')}">
            {lang_admin('to_configure')}
        </a>
    </li>
    <li>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=visit&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('visit')}">
            {lang_admin('visit')}
        </a>
    </li>
    <li>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=reguser&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('register')}">
            {lang_admin('register')}
        </a>
    </li>
    <li class="active">
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=pay&table=union&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('settlement')}">
            {lang_admin('settlement')}
        </a>
    </li>
</ul>

<div class="blank30"></div>
<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">


<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
          <th class="catname">{lang_admin('user')}</th>
          <th class="htmldir">{lang_admin('date')}</th>
          <th class="htmldir">{lang_admin('amount_of_money')}</th>
          <th class="htmldir">{lang_admin('account_number')}</th>
          <th class="htmldir">{lang_admin('operator')}</th>
        </tr>

</thead>


<tbody>
{loop $data $d}
<tr>

<td class="catname" align="left">{$d['username']}</td>
<td class="htmldir">{date('Y-m-d H:i:s',$d['addtime'])}</td>
<td class="htmldir">{$d['amount']} {lang_admin('unit')}</td>
<td class="htmldir"><font color="red">{$d['payaccount']}</font></td>
<td class="htmldir">{$d['inputer']}</td>

</tr>
{/loop}


</tbody>
</table>
</div>

<div class="page"><?php echo pagination::adminhtml($record_count); ?></div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>

<input type="hidden" name="batch" value="">
<input  class="btn btn-danger" type="button" value=" {lang_admin('delete')} " name="delete" onclick="if(getSelect(this.form) && confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){this.form.action='<?php echo modify('act/batch',true);?>'; this.form.batch.value='delete'; returnform(this.form);}"/>

</form>

<div class="blank30"></div>
</div>
</div>