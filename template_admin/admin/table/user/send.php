
<div class="main-right-box">
<h5>{lang_admin('mail')}</h5>
<div class="blank20"></div>
<div class="box" id="box">


<ul class="nav nav-tabs" role="tablist">
<li class="active">
    <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=send&table=user&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('mail')}">
        {lang_admin('mail')}
    </a>
</li>
<li><a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=mail&table=user&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('group_sending')}">
        {lang_admin('group_sending')}
    </a>
</li>
<li>
    <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=send&table=user&type=subscription&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('subscribe_to_group_distribution')}">
        {lang_admin('subscribe_to_group_distribution')}
    </a>
</li>
 <li>
     <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=sendsms&table=user&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('short_message')}">
         {lang_admin('short_message')}
     </a>
 </li>
    <li>
        <a href="#" onclick="gotourl(this)"   data-dataurl="{$base_url}/index.php?case=table&act=notification&table=user&admin_dir={get('admin_dir',true)}&site=default" data-dataurlname="{lang_admin('notice')}">
            {lang_admin('notice')}
        </a>
    </li>
</ul>
<div class="clearfix blank30"></div>
<?php
$st=$_GET['st'];
if(front::get('type')=='subscription'){

	if($_GET['site']!='default'){
		$path = config::get('site_url').'/data/subscriptionmail.txt';
	}else{
		$path = ROOT.'/data/subscriptionmail.txt';
	}

	$maillist = file_get_contents($path);
	$maillist = preg_match_all('/\[(.*?)\]/is',$maillist,$out);
	$out[1] = array_unique($out[1]);
	$maillist = implode(',',$out[1]);
	if($maillist[strlen($maillist)-1] == ',') $maillist = substr($maillist,0,-1);
}
?>

<form method="post" name="mail_form1" action="{uri()}"  onsubmit="return returnform(this);">
<input type="hidden" name="onlymodify" value=""/>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('username')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<textarea name="mail_address" id="mail_address" class="form-control textarea"><?php if($st) {?>{table_user::mail_before()}<?php }?><?php if(front::get('type')=='subscription'){ echo $maillist; }?></textarea>
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('send_format_example')}: username1@cmseasy.cn,<br>username2@cmseasy.cn,<br>....usernameN@cmseas.cn"></span>
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('title')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<input name="title" type="text" value="" class="form-control" />
</div>
</div>
<div class="clearfix blank20"></div>

<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">{lang_admin('content')}</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<textarea name="content" id="sendmail" class="form-control textarea"></textarea>
<span class="tips icon-info" data-toggle="tooltip" data-html="ture" data-placement="right" title="{lang_admin('you_can_enter_legitimate_html_code')}"></span>
</div>
</div>
<div class="clearfix blank20"></div>

<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
    <input  name="submit" value="1" type="hidden">
    <input type="submit"   value="{lang_admin('send_out')}" class="btn btn-primary btn-lg" />
</form>
<div class="blank30"></div>
</div>
</div>
