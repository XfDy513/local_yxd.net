
<div class="main-right-box">
<h5>{lang_admin('extension')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<ul class="nav nav-tabs" role="tablist">
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=config&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('modular')}</a></li>
<li class="active"><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=visit&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('visit')}</a></li>
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=reguser&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('register')}</a></li>
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=union&act=pay&table=union&admin_dir={get('admin_dir',true)}&site=default">{lang_admin('settlement')}</a></li>
</ul>

<div class="blank30"></div>

<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr class="th">
<th class="catname">{lang_admin('source')}</th>
<th class="htmldir">IP</th>
<th class="htmldir">{lang_admin('time')}</th>
<th class="htmldir">{lang_admin('user')}</th>
<th class="htmldir">{lang_admin('time')}</th>
</tr>
</thead>


<tbody>
{loop $data $d}
<tr>

<td class="catname">{if $d['referer']}{$d['referer']}{else}{lang_admin('address_bar_directly_into')}{/if}</td>
<td class="htmldir">{$d['visitip']}</td>
<td class="htmldir">{date('Y-m-d H:i:s',$d['visittime'])}</td>
<td class="htmldir" align="left">{$d['regusername']}</td>
<td class="htmldir">{if $d['regtime']}{date('Y-m-d H:i:s',$d['regtime'])}{/if}</td>

</tr>
{/loop}

</tbody>
</table>
</div>



<div class="page"><?php echo pagination::adminhtml($record_count); ?></div>



<div class="blank30"></div>
</div>
</div>