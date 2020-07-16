


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
<h5>{lang_admin('site_list')}</h5>
<div class="blank20"></div>
<div class="box" id="box">
    <input class="btn btn-primary" type="button" value=" {lang_admin('site_settings')} " onclick="gotourl(this)"   data-dataurl="{url::create('config/system/set/sitesetup')}" />

<a href="#" onclick="gotourl(this)"   data-dataurl="index.php?case=website&act=addwebsite&admin_dir={get('admin_dir',true)}&site=default"  class="btn btn-success">{lang_admin('adding_sites')}</a>
<div class="blank30"></div>

<form name="listform" id="listform"  action="<?php echo uri();?>" method="post" onsubmit="return returnform(this);">

<div class="table-responsive">
<table class="table table-hover">
<thead>
        <tr class="th">
          <th class="text-center"><!--id-->{lang_admin('id')}</th>
          <th class="text-center"><!--id-->{lang_admin('site_pictures')}</th>
          <th><!--name-->{lang_admin('site')}</th>
          <th><!--url-->URL</th>
          <th>{lang_admin('dosomething')}</th>
        </tr>

</thead>
<tbody>
{loop $data $d}
<tr>
<td class="text-center">{$d['id']}</td>
<td class="coupon-list-img text-center" >
    <a  target="_blank" href="#" onclick="gotourl(this)"   data-dataurl="">
        <img src="{$d['site_websiteimg']}" class="img-responsive" onerror='this.src="<?php echo config::getadmin('onerror_pic');?>"' />
    </a>
</td>
<td style="padding-left:10px;">{$d['name']}</td>
<td align="left" style="padding-left:10px;">{$d['url']}</td>

<td class="manage">



<a href="#" onclick="gotourl(this)"   data-dataurl="<?php echo modify("act/editwebsite/id/".$d['path']);?>" title="{lang_admin('edit')}" class="btn btn-primary">{lang_admin('edit')}</a>

    <a href="{$d['url']}index.php?case=admin&act=remotelogin&admin_dir={$d['admindir']}&args={$d['args']}&submit=1" title="{lang_admin('switch')}" class="btn btn-default">{lang_admin('switch')}</a>
<a onclick="if(confirm('{lang_admin('are_you_sure_you_want_to_delete_it')}')){gotourl(this);};" href="#" data-dataurl="<?php echo modify("/act/deletewebsite/id/".$d['path']);?>" title="{lang_admin('delete')}" class="btn btn-default">{lang_admin('delete')}</a>
</td>
</tr>
{/loop}


      </tbody>
    </table>



</form>
</div>

<div class="blank30"></div>
</div>
</div>
