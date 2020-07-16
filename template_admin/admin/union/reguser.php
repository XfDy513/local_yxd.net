
<div class="main-right-box">
<h5>{lang_admin('registered_user_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">

<ul class="nav nav-tabs" role="tablist">
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=config&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('module_configuration')}</a></li>
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=visit&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('visit')}</a></li>
<li class="active"><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=reguser&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('register')}</a></li>
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=pay&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('settlement')}</a></li>
</ul>

<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="catname">{lang_admin('username')}</th>
<th class="htmldir">{lang_admin('email')}</th>
<th class="htmldir">IP</th>
<th class="htmldir">{lang_admin('id')}</th>
</tr>
</thead>

<tbody>
{loop $data $d}
<tr>

<td class="catname">{$d['username']}</td>
<td class="htmldir">{$d['e_mail']}</td>
<td class="htmldir">{$d['userip']}</td>
<td class="htmldir">{$d['introducer']}[{$d['introducerusername']}]</td>

</tr>
{/loop}


</tbody>
</table>
</div>

<div class="page"><?php echo pagination::adminhtml($record_count); ?></div>


<div class="blank30"></div>
</div>
</div>

